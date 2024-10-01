<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AssignPermission;
use App\Models\Module;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Illuminate\Http\Request;

class AssignPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'assignPermission';
        $data['page_title'] = 'Assign List';
        $role = Role::all();
        $permissionAssign = AssignPermission::all();
        return view('backend.assignPermission.index', compact('data','role', 'permissionAssign'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'assignPermission';
        $data['page_title'] = 'Create Assign';
        $role = Role::all();
        $module = Module::with('subModule.permission')->get();
     
        return view('backend.assignPermission.create', compact('data','role', 'module'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach ($request->permission_id as $permission) {
            $permissionAssign = new RolePermission();
            $permissionAssign->role_id = $request->role_id;
            $permissionAssign->permission_id = $permission;
            $permissionAssign->save();
        }
        toastr()->success('Assign Permission Created Successfully');
        return redirect('/assignPermission');
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
        //
    }
}
