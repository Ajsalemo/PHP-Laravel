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

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

Route::group(['prefix' => 'blog'], function() {
    Route::get('post/view/{id}', function ($id) {
        return view('blog.viewpost');
    })->name('blog.view');
    
    Route::get('post/get', function () {
        return view('admin.index');
    })->name('blog.dashboard');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('newpost', function () {
        return view('admin.newpost');
    })->name('admin.newpost');

    Route::post('post/create', function () {
        return "This worked";
    })->name('admin.create');

    Route::get('post/edit/{id}', function ($id) {
        return view('blog.index');
    })->name('admin.edit');
});
