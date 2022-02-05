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
        $posts = DB::table($this->table)->get();
        return $posts;
    }

    public function postById($id)
    {
        // Return post by ID
        $posts = DB::table($this->table)->whereIn("id", array($id))->get();
        return $posts;
    }

    public function newPost($request)
    {
        // Create a new post
        $posts = DB::table($this->table)->insert(
            array(
                "firstname" => $request["firstname"],
                "lastname" => $request["lastname"],
                "title" => $request["title"],
                "content" => $request["content"]
            )
        );
        return $posts;
    }

    public function editPost($request, $id)
    {
        // Edit a post by ID
        $posts = DB::table($this->table)->where("id", $id)->update(
            array(
                "firstname" => $request["firstname"],
                "lastname" => $request["lastname"],
                "title" => $request["title"],
                "content" => $request["content"]
            )
        );
        return $posts;
    }

    public function deletePost($id)
    {
        // edit a post by ID
        $posts = DB::table($this->table)->where("id", $id)->delete();
        return $posts;
    }
}
