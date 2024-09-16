<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Traits\ImageUploadTrait;
use File;

class SupplierController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'supplier';
        $supplier = Supplier::all();
        return view('backend.supplier.index',compact('data','supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'supplier';
        return view('backend.supplier.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupplierRequest $request)
    {
        $supplier = new Supplier();
        
        if ($request->hasFile('image')) {
            $bannerImg = $this->uploadImage($request, 'image', 'SupplierImages');
            $supplier->image = $bannerImg;
        }
        
        $supplier->supplierName = $request->supplierName;
        $supplier->supplierAddress = $request->supplierAddress;
        $supplier->phone = $request->phone;
        $supplier->email = $request->email;
        $supplier->tinNumber = $request->tinNumber;
        $supplier->tradeLicense = $request->tradeLicense;
        $supplier->bankAcNo = $request->bankAcNo;
        $supplier->emergencyContact = $request->emergencyContact;
        $supplier->save();
        
        toastr()->success('Supplier Created Successfully');
        return redirect()->route('supplier.index');
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
        $data['active_menu'] = 'supplier';
        $supplier = Supplier::findOrFail($id);
        return view('backend.supplier.edit',compact('data','supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSupplierRequest $request, string $id)
    {
        $supplier = Supplier::findOrFail($id);
        
        if ($request->hasFile('image')) {
            $bannerImg = $this->updadeImage($request, 'image', 'SupplierImages',$oldImagePath);
            $supplier->image = $bannerImg;
        }
        
        $supplier->supplierName = $request->supplierName;
        $supplier->supplierAddress = $request->supplierAddress;
        $supplier->phone = $request->phone;
        $supplier->email = $request->email;
        $supplier->tinNumber = $request->tinNumber;
        $supplier->tradeLicense = $request->tradeLicense;
        $supplier->bankAcNo = $request->bankAcNo;
        $supplier->emergencyContact = $request->emergencyContact;
        $supplier->save();
        
        toastr()->success('Supplier Updated Successfully');
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        if(File::exists(public_path($supplier->image))){
            File::delete(public_path($supplier->image));
        };
       $supplier->delete();
       toastr()->success('Supplier Deleted Successfully');
       return back();
    }
}
