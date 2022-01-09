<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => 'Main'], function(){
    Route::get('/',IndexController::class);
});

Route::group(['namespace' => 'Admin','prefix' => 'admin'], function(){
    Route::group(['namespace' => 'Main'], function(){
        Route::get('/',IndexController::class);
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function(){
        Route::get('/',IndexController::class)->name('admin.posts.index');
        Route::get('/create',CreateController::class)->name('admin.posts.create');
        Route::post('/',StoreController::class)->name('admin.posts.store');
        Route::get('/{post}',ShowController::class)->name('admin.posts.show');
        Route::get('/{post}/edit',EditController::class)->name('admin.posts.edit');
        Route::patch('/{post}',UpdateController::class)->name('admin.posts.update');
        Route::delete('/{post}',DeleteController::class)->name('admin.posts.delete');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
        Route::get('/',IndexController::class)->name('admin.categories.index');
        Route::get('/create',CreateController::class)->name('admin.categories.create');
        Route::post('/',StoreController::class)->name('admin.categories.store');
        Route::get('/{category}',ShowController::class)->name('admin.categories.show');
        Route::get('/{category}/edit',EditController::class)->name('admin.categories.edit');
        Route::patch('/{category}',UpdateController::class)->name('admin.categories.update');
        Route::delete('/{category}',DeleteController::class)->name('admin.categories.delete');
    });
    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function(){
        Route::get('/',IndexController::class)->name('admin.tags.index');
        Route::get('/create',CreateController::class)->name('admin.tags.create');
        Route::post('/',StoreController::class)->name('admin.tags.store');
        Route::get('/{tag}',ShowController::class)->name('admin.tags.show');
        Route::get('/{tag}/edit',EditController::class)->name('admin.tags.edit');
        Route::patch('/{tag}',UpdateController::class)->name('admin.tags.update');
        Route::delete('/{tag}',DeleteController::class)->name('admin.tags.delete');
    });
});



Auth::routes();
