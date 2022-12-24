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
        $data->category_id=$catId->category_id;
        $data->subcategory_id=$request->subcategory_id;
        $data->childcategory_name=$request->childcategory_name;
        $data->childcategory_slug=Str::of($request->childcategory_name)->slug('-');
        $data->save();

        return redirect()->back();
    }

    public function edit($id)
    {   
        $data=Childcategory::find($id);
        return view('admin.childcategory.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'childcategory_name'=>'required|unique:childcategories|max:25',
        ]);

        $data=Childcategory::find($id);
        $data->childcategory_name=$request->childcategory_name;
        $data->childcategory_slug=Str::of($request->childcategory_name)->slug('-');
        $data->save();

        return redirect()->route('childcategory.index');
    }

    public function destroy($id)
    {
        Childcategory::destroy($id);
        return redirect()->back();
    }
}
