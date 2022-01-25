<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    public function getAllPosts()
    {
        // Return all posts
        $posts = DB::select("SELECT * FROM posts");
        print_r($posts);
        return $posts;
    }

    public function getPostById($id)
    {
        // return post by ID
    }

    public function newPost($id)
    {
        // create a new post
    }

    public function editPostById($id)
    {
        // edit a post by ID
    }
}
