<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\SubModule;
use Illuminate\Http\Request;

class SubModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'subModule';
        $subModule = SubModule::all();
        return view('backend.subModule.index',compact('subModule','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'subModule';
        $module = Module::all();
        return view('backend.subModule.create', compact('module','data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'module_id' => 'required',
            'subModuleName' => 'required|string|max:100'
        ]);
        $subModule = new SubModule();
        $subModule->module_id = $request->module_id;
        $subModule->subModuleName = $request->subModuleName;
        $subModule->save();
        toastr()->success('SubModule Created Successfully.');
        return redirect('/subModule');
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
        $data['active_menu'] = 'subModule';
        $module = Module::all();
        $subModule = SubModule::findOrFail($id);
        return view('backend.subModule.edit', compact('module','subModule','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'module_id' => 'required',
            'subModuleName' => 'required|string|max:100'
        ]);
        $subModule = SubModule::findOrFail($id);
        $subModule->module_id = $request->module_id;
        $subModule->subModuleName = $request->subModuleName;
        $subModule->save();
        toastr()->success('SubModule Updated Successfully');
        return redirect('/subModule');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subModule = SubModule::findORFail($id);
        $subModule->delete();
        toastr()->error('SubModule Deleted Successfully');
        return back();
    }
}
