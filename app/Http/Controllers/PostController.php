<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function add_post($id)
    {
        $author=Author::find($id);
        $post=new Post();
        $post->title="Mobile";
        $post->cat="mobile post good";
        $author->post()->save($post);
    }
    public function show_post($id)
    {
        $post=Author::find($id)->post;
        return $post;

    }
}