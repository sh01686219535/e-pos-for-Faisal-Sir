<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'color';
        $color = Color::all();
        return view('backend.color.index',compact('data','color'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'color';
        return view('backend.color.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'color_name'=>'required',
            'color_code'=>'required'
        ]);
        $color = new Color();
        $color->color_name = $request->color_name;
        $color->color_code = $request->color_code;
        $color->status = $request->status;
        $color->save();
        toastr()->success('Color Created Successfully');
        return redirect()->route('color.index');
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
        $color = Color::findOrFail($id);
        return view('backend.color.edit',compact('data','color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'color_name'=>'required',
            'color_code'=>'required'
        ]);
        $color = Color::findOrFail($id);
        $color->color_name = $request->color_name;
        $color->color_code = $request->color_code;
        $color->status = $request->status;
        $color->save();
        toastr()->success('Color Updated Successfully');
        return redirect()->route('color.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $color = Color::findOrFail($id);
        $color->delete();
        toastr()->success('Color Deleted Successfully');
        return back();
    }
}
