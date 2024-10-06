<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Size;
use App\Models\Supplier;
use App\Models\ItemInfo;
use App\Http\Requests\ItemInfoRequest;
use App\Traits\ImageUploadTrait;
use File;

class ItemInfoController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'item_info';
        $itemInfo = ItemInfo::with('category', 'brand', 'color', 'size', 'supplier')->get();
        return view('backend.Iteminfo.index',compact('data','itemInfo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'item_info';
        $category = Category::where('parent_id', null)->get();
        $subCategory = Category::whereNot('parent_id', null)->get();
        $brand = Brand::where('status', 'active')->get();
        $color = Color::where('status', 'active')->get();
        $size = Size::where('status', 'active')->get();
        $supplier = Supplier::all();
        return view('backend.Iteminfo.create',compact('data','category','subCategory','brand','color','size','supplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemInfoRequest $request)
    {
       $itemInfo = new ItemInfo();
       $itemInfo->category_id = $request->category_id; 
       $itemInfo->sub_category_id = $request->sub_category_id; 
       $itemInfo->brand_id = $request->brand_id; 
       $itemInfo->color_id = $request->color_id; 
       $itemInfo->size_id = $request->size_id; 
       $itemInfo->name = $request->name; 
       $itemInfo->code = $request->code; 
       $itemInfo->supplier_id = $request->supplier_id; 
       $itemInfo->description = $request->description; 
       if ($request->hasFile('image')) {
        $itemSingleImg = $this->uploadImage($request,'image','ItemInfoSingleImg');
        $itemInfo->image = $itemSingleImg;
       }
       if ($request->hasFile('multiple_image')) {
        $itemMultiImg = $this->multipleImgUpload($request, 'multiple_image', 'ItemInfoMultiImg');
        $itemInfo->multiple_image = implode(',', $itemMultiImg);
    }
       $itemInfo->save();

       toastr()->success('Item Info Created Successfully');
       return redirect()->route('item_info.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $itemInfo = ItemInfo::findOrFail($id);
        
        if ($itemInfo->image && File::exists(public_path($itemInfo->image))) {
            File::delete(public_path($itemInfo->image));
        }
    
        if ($itemInfo->multiple_image) {
            $images = explode(',', $itemInfo->multiple_image);
            foreach ($images as $image) {
                $imagePath = public_path('ItemInfoMultiImg/' . trim($image));
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
        }
        // Delete the item info record
        $itemInfo->delete();
    
        // Show success message
        toastr()->success('ItemInfo and all associated images deleted successfully');
        return back();
    }
}