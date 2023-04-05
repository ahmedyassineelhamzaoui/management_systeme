<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\SendMailreset;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index', 'login','sendEmail','forgotPassword','showChangePassword']]);
    }
    public function index()
    {
        return view('auth.login');
    }
    public function showDashboard(){
        return view('pages.index');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:8|string'
        ]);
        $credentials = $request->only('email', 'password');
        $token = Auth::attempt($credentials);
        if (!$token) {
            return redirect()->back()->with('error','invalid email or password');
        }
        $user=Auth::user();
        return redirect()->route('dashboard')->with('name',$user->name);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('logout');
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email'    => 'required|email|min:10',
        ]);
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error','email not exist');
        }
        $token = Str::random(40);
        $user->remembre_token = $token;
        $user->save();
        Mail::to($request->email)->send(new SendMailreset($token, $request->email, $user->name));
        return redirect()->back()->with('success','we have send an email verfication to your email');
    }
    public function forgotPassword()
    {
        return view('auth.forgetPassword');
    }
    public function showChangePassword($token)
    {
        return view('auth.changePassword',  ['token' => $token]);
    }
    public function changePassword(Request $request)
    {
    
        $request->validate([
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8|same:password'
        ]);
        $updatePassword=User::where('remembre_token',$request->token)->first();
        if(!$updatePassword){
            return back()->with('error', 'Invalid opperation !');
        }
        $updatePassword->update(['password' => Hash::make($request->password)]);
        
        return redirect()->route('login.page')->with('success','your password has been changed succesfuly');
    }
}
