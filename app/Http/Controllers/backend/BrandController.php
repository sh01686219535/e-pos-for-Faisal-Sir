<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use File;

class BrandController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'brand';
        $brand = Brand::all();
        return view('backend.brand.index',compact('data','brand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'brand';
        return view('backend.brand.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brandName' => 'required|string|max:200',
            'status' => 'required|string|max:200',
            'brandImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $brand = new Brand();
        
        if ($request->hasFile('brandImage')) {
            $bannerImg = $this->uploadImage($request, 'brandImage', 'brandImages');
            $brand->brandImage = $bannerImg;
        }
        
        $brand->brandName = $request->brandName;
        $brand->status = $request->status;
        $brand->save();
        
        toastr()->success('Brand Created Successfully');
        return redirect()->route('brand.index');
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
        $data['active_menu'] = 'brand';
        $brand = Brand::findOrFail($id);
        return view('backend.brand.edit',compact('data','brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'brandName' => 'required|string|max:200',
            'status' => 'required|string|max:200',
            'brandImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $brand = Brand::findOrFail($id);
        
        $oldImagePath = $brand->brandImage;
    
        if ($request->hasFile('brandImage')) {
            $bannerImg = $this->updadeImage($request, 'brandImage', 'brandImages', $oldImagePath);
            $brand->brandImage = $bannerImg;
        }
        
        $brand->brandName = $request->brandName;
        $brand->status = $request->status;
        $brand->save();
        
        toastr()->success('Brand Updated Successfully');
        return redirect()->route('brand.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        if (File::exists(public_path($brand->brandImage))) {
            File::delete(public_path($brand->brandImage));
        }
        $brand->delete();
        toastr()->success('Brand Deleted Successfully');
        return back();
    }
}
