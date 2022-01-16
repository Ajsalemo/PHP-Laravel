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
        $fakePost = [
            'id' => 1,
            'title' => 'This is a fake title',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry.'
        ];
        return view('blog.posts', ['post' => $fakePost]);
    })->name('blog.posts');
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
