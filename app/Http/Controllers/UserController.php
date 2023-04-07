<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('user-list')){
            return view('errors.403');
        }
        $roles = Role::all();
        $users=User::paginate(5);
        return view('pages.users',[
            'roles' => $roles,
            'users' => $users,
            'links' => $users->links()
        ]);
    }
    public function create()
    {
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('user-create')){
            return view('errors.403');
        }
        $roles = Role::all();   
        return view('pages.create-user',compact('roles'));
    }
    public function createUser(Request $request)
    {
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('user-create')){
            return view('errors.403');
        }
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8|same:password'
        ]);
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole($request->input('role_name'));
        return redirect()->route('users')->with('success','user created succesfuly');
    }
    public function deleteUser($id)
    {   
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('user-delete')){
            return view('errors.403');
        }
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('users')->with('success','user created succesfuly');
        }
            return redirect()->route('users')->with('error','something is wrong');
    }
    public function showUser($id)
    {
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('user-edit')){
            return view('errors.403');
        }
        $user=User::where('id',$id)->first();
        $roles = Role::all();
        return view('pages.update-user',compact('user','roles'));
    }
    public function updateUser(Request $request)
    {
        $user=auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('user-edit')){
            return view('errors.403');
        }
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8|same:password'
        ]);
        $user=User::find($request->id);
        $user->name = $request->name;
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        if($request->has('email')){
            $useremail=User::where('email',$request->email);
            if($useremail){
                if($request->email == $user->email ){
                    $user->email=$request->email;
                }else{
                    return redirect()->route('update.user',$user->id)->with('info','email that you entered is exist please chose another');
                }
            }
            $user->email=$request->email;
        }
        $user->save();
        if (!empty($request->role_name)) {
            $user->syncRoles([$request->input('role_name')]);
        }    
        return redirect()->route('users')->with('success','user updated succesfuly');
    }

}
