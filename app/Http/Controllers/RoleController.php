<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Role;
use App\Models\Role_has_permissions;
// use App\Models\Permission;
use Spatie\Permission\Middlewares\RoleOrPermissionMiddleware;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function showCreateRoleForm()
    {
        $permissions=Permission::all();
        return view('pages.create-role',compact('permissions'));
    }

    public function getRoles()
    {
        $Permissions=Permission::all();
        $rolesPermissions=Role_has_permissions::all();
        $roles=Role::paginate(5);
        return view('pages.roles',compact('roles','rolesPermissions','Permissions'));
    }
    public function createRole(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permission);
        return redirect()->route('roles')->with('success','role has been created successfuly');
    }
    public function deleteRole($id)
    {
        $role = Role::find($id);
        if(!$role){
            return redirect()->route('roles')->with('error','something wrong');
        }
        $role->delete();
        return redirect()->route('roles')->with('success','role has been deleted succesfuly');
    }
}
