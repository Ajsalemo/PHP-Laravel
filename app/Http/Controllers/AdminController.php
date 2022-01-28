<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Factory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAllAdminPagePosts()
    {
        $postModel = new Post();
        $posts = $postModel->allPosts();
        return view("admin.index",  ["posts" => $posts]);
    }

    public function getAdminPagePostById($id)
    {
        $postModel = new Post();
        $posts = $postModel->postById($id);
        return view("admin.edit", ["adminEditPost" => $posts]);
    }

    public function createNewPostOnAdminPage(Request $request, Factory $validator)
    {
        $postModel = new Post();
        $posts = $postModel->newPost($request);

        // Using the built-in Laravel validator to make all these fields required with a min character length of 1
        $validation = $validator->make($request->all(), [
            'firstname' => 'required|min:1',
            'lastname' => 'required|min:1',
            'title' => 'required|min:1',
            'content' => 'required|min:1'
        ]);
        // If validation fails redirect back to the same page and display an error through Session flashes
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        }
        return redirect("admin")->with("success", "Post successful.");
    }
}
