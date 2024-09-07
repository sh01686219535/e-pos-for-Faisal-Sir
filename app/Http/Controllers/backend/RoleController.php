<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['active_menu'] = 'role';
        $role = Role::all();
        return view('backend.role.index',compact('role','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = array();
        $data['active_menu'] = 'role';
        return view('backend.role.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'roleName'=>'required|string|max:100'
        ]);
        $role = new Role();
        $role->roleName = $request->roleName;
        $role->save();
        toastr()->success('Role Created Successfully');
        return redirect('/role');
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
        $data['active_menu'] = 'role';
        $role = Role::findOrFail($id);
        return view('backend.role.edit',compact('role','data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'roleName'=>'required|string|max:100'
        ]);
        $role = Role::findOrFail($id);
        $role->roleName = $request->roleName;
        $role->save();
        toastr()->success('Role Updated Successfully');
        return redirect('/role');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        toastr()->error('Role Deleted Sucessfully');
        return back();
    }
}
