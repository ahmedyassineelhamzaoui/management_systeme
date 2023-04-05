<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductAjaxController;

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


Route::get('500',function(){
    return view('errors.500');
});
Route::controller(AuthController::class)->group(function(){
    Route::get('/','index');
    Route::get('/login','index');
    Route::post('/login','login')->name('login');
    Route::get('/index','showDashboard')->name('dashboard')->middleware('auth');
    Route::get('/logout','logout')->name('logout');
    Route::get('/forgot-password','forgotPassword');
    Route::post('/forgot-password','sendEmail')->name('reset');
    Route::get('/change-password/{token}','showChangePassword')->name('view-changePassword');
    Route::post('/change-password/{token}','changePassword')->name('change-password');
});
Route::controller(UserController::class)->group(function(){
    Route::get('users','index')->name('users');
    Route::post('create-user','createUser')->name('users.create');
    Route::get('create-user','create');
    Route::delete('users/{id}','deleteUser')->name('user.delete');
    Route::put('users','updateUser')->name('users.update');
    Route::get('update-user/{id}','showUser')->name('update.user');
    Route::put('/update-user/{id}','updateUser')->name('user.update');
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