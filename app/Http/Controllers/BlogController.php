<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function getAllBlogPagePosts()
    {
        $postModel = new Post();
        $posts = $postModel->allPosts();
        return view("blog.posts",  ["posts" => $posts]);
    }

    public function getBlogPagePostById($id)
    {
        $postModel = new Post();
        $posts = $postModel->postById($id);
        return view("blog.view",  ["posts" => $posts]);
    }
}
