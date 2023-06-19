<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.myprofile.index');
    })->name('dashboard');
});

// home page
Route::get('/', [UserController::class, 'homePage'])->name("home#page");

// user
Route::get('/adminProfile', [UserController::class, 'adminProfile'])->name('admin#profile');
Route::get('/adminList', [UserController::class, 'adminList'])->name('admin#list');
Route::get('/userList', [UserController::class, 'userList'])->name('user#list');
Route::get('/contactList', [UserController::class, 'contactList'])->name('contact#list');


// category
Route::get('/categoryList', [CategoryController::class, 'categoryList'])->name('category#list');
Route::get('create/category', [CategoryController::class, 'createCategory'])->name('create#category');
Route::post('create', [CategoryController::class, 'create'])->name('create');


//news post
Route::get('/postList', [postController::class, 'postList'])->name('post#list');
