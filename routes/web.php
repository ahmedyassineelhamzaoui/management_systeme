<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('forgotPassword',function(){
    return view('auth.forgetPassword');
})->name('forgot-password');

Route::get('/', function () {
    return view('auth.login');
})->name('login-page');
Route::get('/index',function (){
 return view('pages.index');  
});
Route::get('change-password',function(){
    return view('auth.changePassword');
})->name('change-password');
Route::get('500',function(){
    return view('errors.500');
});
Route::get('users',function(){
    return view('pages.users');
});
Route::get('permissions',function(){
    return view('pages.permissions');
});
Route::get('products',function(){
    return view('pages.products');
});
Route::get('categories',function(){
    return view('pages.categories');
});
Route::get('roles',function(){
    return view('pages.roles');
});