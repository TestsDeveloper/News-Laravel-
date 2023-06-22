<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

Route::middleware('auth')->group(function () {
     //admin check and user
     Route::get('/condition',[AuthController::class,'authCondition']);
    Route::redirect('/','login');


    //admin profile page
Route::prefix('admin')->group(function(){


    //Admin profile
    Route::get('/adminProfile', [UserController::class, 'adminProfile'])->name('admin#profile');
    Route::post('/update/{id}',[UserController::class,'profileUpdate'])->name('profile#update');



    Route::get('/adminList', [UserController::class, 'adminList'])->name('admin#list');
    Route::get('/userList', [UserController::class, 'userList'])->name('user#list');
    Route::get('/contactList', [UserController::class, 'contactList'])->name('contact#list');
});

});





// home page
Route::get('/home', [UserController::class, 'homePage'])->name("home#page");



// category
Route::get('/categoryList', [CategoryController::class, 'categoryList'])->name('category#list');
Route::get('create/category', [CategoryController::class, 'createCategory'])->name('create#category');
Route::post('create', [CategoryController::class, 'create'])->name('create');
Route::get('updatePage/category/{id}', [CategoryController::class, 'updatePage'])->name('updatePage#category');
Route::post('update/category/{id}', [CategoryController::class, 'update'])->name('update#category');
Route::get('delete/category/{id}', [CategoryController::class, 'delete'])->name('delete#category');


//news post
Route::prefix('news')->group(function(){
    //news list
    Route::get('/postList', [postController::class, 'postList'])->name('new#postList');

    //create posts page
    Route::get('create/postPage',[PostController::class,'createPostPage'])->name('news#createPostPage');

    //create post
    Route::post('create/post' ,[PostController::class,'createPost'])->name('news#createPost');

    //delete post
    Route::get('delete/post/{id}',[PostController::class , 'deletePost'])->name('news#deletePost');

    //detail post page
    Route::get('detail/post/{id}', [ PostController::class , 'detailPostPage'])->name('news#detailPostPage');

    //edit post
    Route::post('edit/post/{id}' ,[PostController::class,'editPost'])->name('news#editPost');
});


