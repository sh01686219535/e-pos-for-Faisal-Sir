<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'size';
        $size = Size::all();
        return view('backend.size.index',compact('data','size'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'size';
        return view('backend.size.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'size_name'=>'required',
        ]);
        $size = new Size();
        $size->size_name = $request->size_name;
        $size->status = $request->status;
        $size->save();
        toastr()->success('Size Created Successfully');
        return redirect()->route('size.index');
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
        $data['active_menu'] = 'color';
        $size = Size::findOrFail($id);
        return view('backend.size.edit',compact('data','size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'size_name'=>'required',
        ]);
        $size = Size::findOrFail($id);
        $size->size_name = $request->size_name;
        $size->status = $request->status;
        $size->save();
        toastr()->success('Size Updated Successfully');
        return redirect()->route('size.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $size = Size::findOrFail($id);
        $size->delete();
        toastr()->success('Size Deleted Successfully');
        return back();
    }
}
