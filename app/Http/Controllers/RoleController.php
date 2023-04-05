<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Role_has_permissions;
use App\Models\Permission;
use Spatie\Permission\Middlewares\RoleOrPermissionMiddleware;

class RoleController extends Controller
{
    public function getRoles()
    {
        $Permissions=Permission::all();
        $rolesPermissions=Role_has_permissions::all();
        $roles=Role::paginate(5);
        return view('pages.roles',compact('roles','rolesPermissions','Permissions'));
    }
}
