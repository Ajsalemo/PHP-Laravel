<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Factory;
use Illuminate\Http\Request;

// Controllers
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;

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
    Route::get("post/get", [BlogController::class, "getAllBlogPagePosts"])->name("blog.posts");
    Route::get("post/view/{id}", [BlogController::class, "getBlogPagePostById"])->name("blog.view");
});


Route::group(["prefix" => "admin"], function () {
    Route::get("",  [AdminController::class, "getAllAdminPagePosts"])->name("admin.index");

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
        return redirect()->back()->with("success", "Edit successful");
    })->name("admin.editsubmit");

    Route::get("post/edit/{id}", [AdminController::class, "getAdminPagePostById"])->name("admin.edit");
});
