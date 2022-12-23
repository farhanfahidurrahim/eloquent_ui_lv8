<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //index Method
    public function index()
    {
        $cat=Category::all();
        return view('admin.category.index',compact('cat'));
    }

    //Crate Method
    public function create()
    {
        return view('admin.category.create');
    }

    //Store Method
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required|unique:categories|max:20',
        ]);

        $cat=new Category;
        $cat->category_name=$request->category_name;
        $cat->category_slug = Str::of($request->category_name)->slug('-');
        $cat->save();
        
        return redirect()->back();
    }

    //Edit Method
    public function edit($id)
    {   
        $cat=Category::find($id);
        return view('admin.category.edit',compact('cat'));
    }

    //Update Method
    public function update(Request $request,$id)
    {
        $request->validate([
            'category_name'=>'required|unique:categories|max:20',
        ]);

        $cat=Category::find($id);
        $cat->category_name=$request->category_name;
        $cat->category_slug = Str::of($request->category_name)->slug('-');
        $cat->save();

        return redirect()->route('category.index');
    }

    //Delete Method
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->back();
    }
}
