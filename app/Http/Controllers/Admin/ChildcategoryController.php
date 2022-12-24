<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Childcategory;
use App\Models\Category;
use Illuminate\Support\Str;
use DB;

class ChildcategoryController extends Controller
{
    public function index()
    {   
        $data=Childcategory::all();
        return view('admin.childcategory.index',compact('data'));
    }

    public function create()
    {   
        $cat=Category::all();
        return view('admin.childcategory.create',compact('cat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'childcategory_name'=>'required|unique:childcategories|max:25',
        ]);

        $catId=DB::table('subcategories')->where('id',$request->subcategory_id)->first();

        $data=new Childcategory;
        $data->childcategory_name=$request->childcategory_name;
        $data->category_id=$catId->category_id;
        $data->subcategory_id=$request->subcategory_id;
        $data->childcategory_slug=Str::of($request->childcategory_name)->slug('-');
        $data->save();

        return redirect()->back();
    }
}
