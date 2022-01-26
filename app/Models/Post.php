<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    public function allPosts()
    {
        // Return all posts
        $posts = DB::select("SELECT * FROM posts");
        return $posts;
    }

    public function postById($id)
    {
        // Return post by ID
        $posts = DB::select("SELECT * FROM posts WHERE id = ?", array($id));
        return $posts;
    }

    public function newPost($id)
    {
        // create a new post
    }

    public function editPost($id)
    {
        // edit a post by ID
    }
}
