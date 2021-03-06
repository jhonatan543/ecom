<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::latest()->get();
        return view('admin.category.index',compact('categories'));
    }

    // ============ store category =========
    public function StoreCat(Request $request){
        $request->validate([
            'category_name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/|unique:categories,category_name'
        ]);


        Category::insert([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->back()->with('success','Categoría Agregada');
    }


    // ========= edit category data
    public function Edit($cat_id){
        $category = Category::find($cat_id);
        return view('admin.category.edit',compact('category'));
    }

    // ============ UpdateCat category =========
    public function UpdateCat(Request $request){
        $cat_id = $request->id;

        $request->validate([
            'category_name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/|unique:categories,category_name'
        ]);

        Category::find($cat_id)->update([
            'category_name' => $request->category_name,
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.category')->with('Catupdated','Categoría Actualizada');
    }


    // Delete category
    public function Delete($cat_id){
        Category::find($cat_id)->delete();
        return Redirect()->back()->with('delete','Categoría Borrada Satisfactoriamente');
    }


    // status inactive
    public function Inactive($cat_id){
        Category::find($cat_id)->update(['status' => 0]);
        return Redirect()->back()->with('Catupdated','Categoría Desactivada');
    }


    // status inactive
    public function Active($cat_id){
        Category::find($cat_id)->update(['status' => 1]);
        return Redirect()->back()->with('Catupdated','Categoría Activada');
    }

}
