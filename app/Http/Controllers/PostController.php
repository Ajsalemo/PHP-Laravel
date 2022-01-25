<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function allPosts()
    {
        $postModel = new Post();
        $posts = $postModel->getAllPosts();
        return view("blog.posts",  ["posts" => $posts]);
    }
}
