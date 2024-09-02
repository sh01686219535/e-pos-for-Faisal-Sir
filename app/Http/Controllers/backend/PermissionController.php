<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Permission;
use App\Models\SubModule;
use Illuminate\Http\Request;
use Str;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permission = Permission::all();
        return view('backend.permission.index', compact('permission'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $module = Module::all();
        $subModule = SubModule::all();
        return view('backend.permission.create', compact('module', 'subModule'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'module_id' => 'required',
            'subModule_id' => 'required',
            'permission' => 'required'
        ]);
        $permission = new Permission();
        $permission->module_id = $request->module_id;
        $permission->subModule_id = $request->subModule_id;
        $permission->permission = $request->permission;
        $permission->slug = Str::slug($request->permission);
        $permission->save();
        toastr()->success('Permission Created Successfully');
        return redirect('/permission');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $module = Module::all();
        $subModule = SubModule::all();
        $permission = Permission::findOrFail($id);
        return view('backend.permission.edit', compact('module', 'subModule', 'permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'module_id' => 'required',
            'subModule_id' => 'required',
            'permission' => 'required'
        ]);
        $permission = Permission::findOrFail($id);
        $permission->module_id = $request->module_id;
        $permission->subModule_id = $request->subModule_id;
        $permission->permission = $request->permission;
        $permission->slug = Str::slug($request->permission);
        $permission->save();
        toastr()->success('Permission Updated Successfully');
        return redirect('/permission');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();
        toastr()->error('Permission Deleted Successfully');
        return back();
    }
}
