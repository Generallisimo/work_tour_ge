<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function AdminCategory(){
        $tour=Category::all();
        return view('admin/categories/index', compact('tour'));
    }
    public function AdminCategoryAddShow(){
        return view('admin/categories/add');
    }
    public function AdminCategoryAdd(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin_category');
    }
    public function AdminCategoryDelete($id){
        $category=Category::find($id);
        $category->delete();
        return redirect()->back();
    }
    public function AdminCategoryUpdateShow($id){
        $category=Category::find($id);
        return view('admin/categories/update', compact('category'));
    }
    public function AdminCategoryUpdate(Request $request, $id){
        $category=Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin_category');
    }
}
