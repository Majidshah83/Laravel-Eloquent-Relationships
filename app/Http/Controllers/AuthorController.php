<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;
class AuthorController extends Controller
{
    //show author and post
    public function index(){
        $author=Author::with('post')->get();
        return $author;
    }
    //insert author
    public function store()
    {
        $author=new Author();
        $author->name="zahid shah";
        $author->password="zahid";


        $author->save();




    }
    // inverse realtionship
     public function show_author($id)
    {
        $author=Post::find($id)->author;
        return $author;

    }

}