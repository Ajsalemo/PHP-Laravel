<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::group(['prefix' => 'blog'], function () {
    Route::get('post/view/{id}', function ($id) {
        // This is mock data for the time being
        if ($id == 1) {
            $postDetail = [
                'id' => 1,
                'title' => 'This is a fake title',
                'firstname' => 'Some',
                'lastname' => 'User',
                'content' => 'Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.'
            ];
            return view('blog.view', ['post' => $postDetail]);
        } else {
            return view('blog.view');
        }
    })->name('blog.view');

    Route::get('post/get', function () {
        // This is mock data for the time being
        $post = [
            'id' => 1,
            'title' => 'This is a fake title',
            'firstname' => 'Some',
            'lastname' => 'User',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry.'
        ];
        return view('blog.posts', ['post' => $post]);
    })->name('blog.posts');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('', function () {
        $adminPost = [
            'id' => 1,
            'title' => 'This is a fake title',
            'firstname' => 'Some',
            'lastname' => 'User',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry.'
        ];

        return view('admin.index', ['post' => $adminPost]);
    })->name('admin.index');

    Route::get('post/new', function () {
        return view('admin.newpost');
    })->name('admin.newpost');

    Route::post('post/new/submit', function () {
        return redirect('admin')->with('success', 'Post successful.');
    })->name('admin.create');

    Route::post('post/edit/submit', function () {
        return redirect()->back()->with('success', 'Edit successful.');
    })->name('admin.editsubmit');

    Route::get('post/edit/{id}', function () {
        $adminEditPost = [
            'id' => 1,
            'title' => 'This is a fake title',
            'firstname' => 'Some',
            'lastname' => 'User',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry.'
        ];
        return view('admin.edit', ['adminEditPost' => $adminEditPost]);
    })->name('admin.edit');
});
