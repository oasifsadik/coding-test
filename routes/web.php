<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
Route::get('/',[LoginController::class,'showLoginForm']);

Route::middleware(['auth'])->group(function(){
    Route::get('/userdashboard',[UserController::class,'index'])->name('user');
});

Route::middleware(['auth','role'])->group(function(){
    //super admin
    Route::get('/superadmin/dashboard',[SuperAdminController::class,'index'])->name('superadmin');
    Route::get('/superadmin/review',[SuperAdminController::class,'review'])->name('review');
    Route::get('/superadmin/approved/{id}',[SuperAdminController::class,'approved'])->name('approved');
    Route::get('/superadmin/reject/{id}',[SuperAdminController::class,'reject'])->name('reject');


    //admin
    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin');

    //Admin post
    Route::get('/admin/post',[PostController::class,'post'])->name('post');
    Route::post('/admin/save',[PostController::class,'store'])->name('store');
    Route::get('/admin/edit/{id}',[PostController::class,'edit'])->name('edit');
    Route::post('/admin/update/{id}',[PostController::class,'update'])->name('update');
    Route::get('/admin/delete/{id}',[PostController::class,'detele'])->name('delete');
    Route::get('/admin/list',[PostController::class,'show'])->name('show');
});
