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
        print_r($posts);
        return view("blog.posts",  ["posts" => $posts]);
    }
}
