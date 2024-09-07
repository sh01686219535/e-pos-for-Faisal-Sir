<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'module';
        $module = Module::all();
        return view('backend.module.index', compact('data','module'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'module';
        return view('backend.module.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'moduleName' => 'required|string|max:100|regex:/^[^#]+$/',
        ]);
        $module = new Module();
        $module->moduleName = $request->moduleName;
        $module->save();
        toastr()->success('Module Created Successfully.');
        return redirect('/module');
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
        $data['active_menu'] = 'module';
        $module = Module::findOrFail($id);
        return view('backend.module.edit', compact('module','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'moduleName' => 'required|string|max:100|regex:/^[^#]+$/',
        ]);
        $module = Module::findOrFail($id);
        $module->moduleName = $request->moduleName;
        $module->save();
        toastr()->success('Module Updated Successfully.');
        return redirect('/module');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $module = Module::findOrFail($id);
        $module->delete();
        toastr()->error('Module Deleted Successfully.');
        return back();
    }
}
