<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use App\Models\User;
use App\models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users=User::paginate(5);
        return view('pages.users',[
            'users' => $users,
            'links' => $users->links()
        ]);
    }
    public function create()
    {
        return view('pages.create-user');
    }
    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8|same:password'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->input('role_id'),
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('users')->with('success','user created succesfuly');
    }
    public function deleteUser($id)
    {   
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('users')->with('success','user created succesfuly');
        }
            return redirect()->route('users')->with('error','something is wrong');
    }
    public function showUser($id)
    {
        $user=User::where('id',$id)->first();
        $roles = Role::all();
        return view('pages.update-user',compact('user','roles'));
    }
    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8|same:password'
        ]);
        $user=User::find($request->id);
        if($request->has('name')){
            $user->name=$request->name;
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
        if($request->has('password')){
            $user->password=Hash::make($request->password);
        }
        $user->role_id=$request->input('role_id');

        $user->update();
        return redirect()->route('users')->with('success','user updated succesfuly');
    }

}
