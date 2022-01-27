<?php

namespace App\Http\Controllers;

use App\Models\Post;

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
}
