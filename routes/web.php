<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Controllers
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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
    Route::get("post/new", [AdminController::class, "showNewPostFormOnAdminPage"])->name("admin.newpost");
    Route::get("post/edit/{id}", [AdminController::class, "getAdminPagePostById"])->name("admin.edit");
    Route::post("post/new/submit", [AdminController::class, "createNewPostOnAdminPage"])->name("admin.create");
    Route::post("post/edit/submit/{id}", [AdminController::class, "editPostOnAdminPage"])->name("admin.editsubmit");
    Route::post("post/delete/submit/{id}", [AdminController::class, "deletePostOnAdminPage"])->name("admin.deletesubmit");
});

Auth::routes();

Route::get('/home', [HomeController::class, "index"])->name('home');

