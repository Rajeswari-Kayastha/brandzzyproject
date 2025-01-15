<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:role-list|role-create', ['only' => ['index', 'store', 'create']]);
        $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $roles = Role::all();
        return view('backend.roles.index', compact('roles'));
    }

    public function create()
    {
        $permission = Permission::get();
        return view('backend.roles.create', compact('permission'));
    }

    public function store(Request $request)
    {
        $customErrorMessages = [
            'name.required' => 'The role name is required.',
            'name.unique' => 'The role name must be unique.',
            'permission.required' => 'Please select at least one permission.',
        ];

        // Validate the request
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required|array',
        ], $customErrorMessages);

        // Create the role
        $role = Role::create(['name' => $request->input('name')]);

        // Convert permission IDs to names
        $permissionIds = $request->input('permission');
        $permissions = Permission::whereIn('id', $permissionIds)->pluck('name')->toArray();

        // Sync permissions with the role
        $role->syncPermissions($permissions);

        return redirect()->route('admin.roles.index')
            ->with('success', 'New Role created successfully');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('backend.roles.edit', compact('role', 'permission', 'rolePermissions', 'id'));
    }

    public function update(Request $request, $id)
    {
        $customErrorMessages = [
            'name.required' => 'The role name is required.',
            'name.unique' => 'The role name must be unique.',
            'permission.required' => 'Please select at least one permission.',
        ];

        // Validate request
        $this->validate($request, [
            'name' => 'required|unique:roles,name,' . $id,
            'permission' => 'required|array',
        ], $customErrorMessages);

        // Find the role
        $role = Role::findOrFail($id);
        $role->name = $request->input('name');
        $role->save();

        // Convert IDs to names and sync permissions
        $permissionIds = $request->input('permission');
        $permissions = Permission::whereIn('id', $permissionIds)->pluck('name')->toArray();
        $role->syncPermissions($permissions);

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role updated successfully');
    }


    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('admin.roles.index')
            ->with('success', 'Role deleted successfully');
    }
}
