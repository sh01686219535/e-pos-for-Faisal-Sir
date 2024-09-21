<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = array();
      $data['active_menu'] = 'category';
      $categories = Category::with('children')->whereNull('parent_id')->get();
      return view('backend.category.index',compact('data','categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'category';
        $category = Category::with('childrenRecursive')->whereNull('parent_id')->get();
        return view('backend.category.create',compact('data','category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required'
        ]);
      
        $category = new Category();
        $category->category_name = $request->category_name;
        if(isset($request->parent_id)){
            $category->parent_id = $request->parent_id;
        }
        $category->save();
        toastr()->success('Category Created Successfully');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = array();
        $data['active_menu'] = 'category';
        $category = Category::with('childrenRecursive')->findOrFail($id);
        $categories = Category::with('childrenRecursive')->whereNull('parent_id')->get();
        return view('backend.category.edit',compact('data','category','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;
        if(isset($request->parent_id)){
            $category->parent_id = $request->parent_id;
        }
        $category->save();
        toastr()->success('Category Updated Successfully');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        toastr()->success('Category Deleted Successfully');
        return back();
    }
}
