<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Factory;
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

Route::get("/", function () {
    return view("blog.index");
})->name("blog.index");

Route::group(["prefix" => "blog"], function () {
    Route::get("post/view/{id}", function ($id) {
        // This is mock data for the time being
        if ($id == 1) {
            $postDetail = [
                "id" => 1,
                "title" => "This is a fake title",
                "firstname" => "Some",
                "lastname" => "User",
                "content" => "Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum is simply dummy text of the printing and
                typesetting industry."
            ];
            return view("blog.view", ["post" => $postDetail]);
        } else {
            return view("blog.view");
        }
    })->name("blog.view");

    Route::get("post/get", function () {
        // This is mock data for the time being
        $post = [
            "id" => 1,
            "title" => "This is a fake title",
            "firstname" => "Some",
            "lastname" => "User",
            "content" => "Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry."
        ];
        return view("blog.posts", ["post" => $post]);
    })->name("blog.posts");
});


Route::group(["prefix" => "admin"], function () {
    Route::get("", function () {
        $adminPost = [
            "id" => 1,
            "title" => "This is a fake title",
            "firstname" => "Some",
            "lastname" => "User",
            "content" => "Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry."
        ];

        return view("admin.index", ["post" => $adminPost]);
    })->name("admin.index");

    Route::get("post/new", function () {
        return view("admin.newpost");
    })->name("admin.newpost");

    Route::post("post/new/submit", function (Request $request, Factory $validator) {
        // Using the built-in Laravel validator to make all these fields required with a min character length of 1
        $validation = $validator->make($request->all(), [
            'first-name' => 'required|min:1',
            'last-name' => 'required|min:1',
            'title' => 'required|min:1',
            'content' => 'required|min:1'
        ]);
        // If validation fails redirect back to the same page and display an error through Session flashes
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        }
        return redirect("admin")->with("success", "Post successful.");
    })->name("admin.create");

    Route::post("post/edit/submit", function (Request $request, Factory $validator) {
        $validation = $validator->make($request->all(), [
            'first-name' => 'required|min:1',
            'last-name' => 'required|min:1',
            'title' => 'required|min:1',
            'content' => 'required|min:1'
        ]);
        // If validation fails redirect back to the same page and display an error through Session flashes
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        }
        return redirect()->back()->with("success", "Edit successful.");
    })->name("admin.editsubmit");

    Route::get("post/edit/{id}", function () {
        $adminEditPost = [
            "id" => 1,
            "title" => "This is a fake title",
            "firstname" => "Some",
            "lastname" => "User",
            "content" => "Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry."
        ];
        return view("admin.edit", ["adminEditPost" => $adminEditPost]);
    })->name("admin.edit");
});
