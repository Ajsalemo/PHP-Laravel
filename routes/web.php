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

Route::get('blog/post', function () {
    return view('blog.create');
})->name('blog.create');

Route::get('admin', function () {
    return view('blog.index');
})->name('admin.index');

Route::get('admin/post/create', function () {
    return view('blog.index');
})->name('admin.create');

Route::get('admin/post/edit/{id}', function () {
    return view('blog.index');
})->name('admin.edit');
