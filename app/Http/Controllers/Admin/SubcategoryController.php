<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    public function index()
    {   
        $data=Subcategory::all();
        return view('admin.subcategory.index',compact('data'));
    }

    public function create()
    {   
        $cat=Category::all();
        return view('admin.subcategory.create',compact('cat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subcategory_name'=>'required|unique:subcategories|max:20',
        ]);

        $data=New Subcategory;
        $data->category_id=$request->category_id;
        $data->subcategory_name=$request->subcategory_name;
        $data->subcategory_slug=Str::of($request->subcategory_name)->slug('-');
        $data->save();

        return redirect()->back();
    }

    public function edit($id)
    {   
        $data=Subcategory::find($id);
        return view('admin.subcategory.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'subcategory_name'=>'required|unique:subcategories|max:20',
        ]);

        $data=Subcategory::find($id);
        $data->subcategory_name=$request->subcategory_name;
        $data->subcategory_slug=Str::of($request->subcategory_name)->slug('-');
        $data->save();

        return redirect()->route('subcategory.index');
    }

    public function destroy($id)
    {
        Subcategory::destroy($id);
        return redirect()->back();
    }
}
