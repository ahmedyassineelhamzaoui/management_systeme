<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
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
    Route::get('/login','index')->name('login.page');
    Route::post('/login','login')->name('login');
    Route::get('/index','showDashboard')->name('dashboard')->middleware('auth');
    Route::get('/logout','logout')->name('logout');
    Route::get('/forgot-password','forgotPassword');
    Route::post('/forgot-password','sendEmail')->name('reset');
    Route::get('/change-password/{token}','showChangePassword')->name('view-changePassword');
    Route::post('/change-password','changePassword')->name('change-password');
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
Route::controller(RoleController::class)->group(function(){
    Route::get('roles','getRoles')->name('roles');
    Route::get('create-role','showCreateRoleForm')->name('CreateRoleForm');
    Route::post('roles','createRole')->name('create.role');
    Route::delete('roles/{id}','deleteRole')->name('role.delete');
    Route::get('update-role/{id}','showRole')->name('update.role');
    Route::put('/update-role/{id}','updateRole')->name('role.update');

});

Route::controller(ProductController::class)->group(function(){
    Route::get('products','index')->name('products');
    Route::get('create-product','showProductForm')->name('create-product');
    Route::post('create-product','createProduct')->name('product.create');
});

Route::controller(CategorieController::class)->group(function(){
   Route::get('categories','index')->name('category');
   Route::post('categories','createCategory')->name('create.category');
   Route::put('categories','updateCategory')->name('update.category');
   Route::delete('categories','deleteCategory')->name('delete.category');

});

Route::get('permissions',function(){
    return view('pages.permissions');
});
