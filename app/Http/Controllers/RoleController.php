<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Role;
use App\Models\Role_has_permissions;
// use App\Models\Permission;
use Spatie\Permission\Middlewares\RoleOrPermissionMiddleware;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showCreateRoleForm()
    {
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('role-create')){
            return view('errors.403');
        }
        $permissions=Permission::all();
        return view('pages.create-role',compact('permissions'));
    }

    public function getRoles()
    {
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if($user->hasPermissionTo('role-list')){
            $roles = Role::paginate(5);
            return view('pages.roles', compact('roles'));
        }
         return view('errors.403');
    }
    public function createRole(Request $request)
    {
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('role-create')){
            return view('errors.403');
        }
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permission);
        return redirect()->route('roles')->with('success','role has been created successfuly');
    }
    public function deleteRole($id)
    {
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('role-delete')){
            return view('errors.403');
        }
        $role = Role::find($id);
        if(!$role){
            return redirect()->route('roles')->with('error','something wrong');
        }
        $role->delete();
        return redirect()->route('roles')->with('success','role has been deleted succesfuly');
    }
    public function showRole($id)
    {
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('role-edit')){
            return view('errors.403');
        }
        $role = Role::find($id);
        $permissions = Permission::all();
        $rolePermissions = $role->permissions()->pluck('name')->toArray();
        return view('pages.update-role',compact('role','permissions','rolePermissions'));
    }
    public function updateRole(Request $request)
    {
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if($user->hasPermissionTo('role-edit')){
            $request->validate( [
                'name' => [
                    'required',
                    'min:3',
                     Rule::unique('roles')->ignore($request->id),
                ],
            ]);
    
            $role = Role::find($request->id);
            $role->name = $request->name;
            $role->syncPermissions($request->permission);
            $role->save();
    
            return redirect()->route('roles')->with('success','roles has been updated successfuly');
        }
        return view('errors.403');
        
    }
}
