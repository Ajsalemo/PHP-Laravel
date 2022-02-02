<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

    public function showNewPostFormOnAdminPage()
    {
        return view("admin.newpost");
    }

    public function createNewPostOnAdminPage(Request $request)
    {
        $postModel = new Post();
        // Using the built-in Laravel validator thats extended via Controller to make all these fields required with a min character length of 1
        $this->validate($request, [
            'firstname' => 'required|min:1',
            'lastname' => 'required|min:1',
            'title' => 'required|min:1',
            'content' => 'required|min:1'
        ]);
        // If validation fails redirect back to the same page and display an error through Session flashes
        // $this-validate automatically populates the session with failing error messages 
        $postModel->newPost($request);
        return redirect("admin")->with("success", "Post successful.");
    }

    public function editPostOnAdminPage(Request $request, $id)
    {
        $postModel = new Post();
        // Using the built-in Laravel validator thats extended via Controller to make all these fields required with a min character length of 1
        $this->validate($request, [
            'firstname' => 'required|min:1',
            'lastname' => 'required|min:1',
            'title' => 'required|min:1',
            'content' => 'required|min:1'
        ]);
        // If validation fails redirect back to the same page and display an error through Session flashes
        // $this-validate automatically populates the session with failing error messages 
        $postModel->editPost($request, $id);
        return redirect()->back()->with("success", "Edit successful");
    }
}
