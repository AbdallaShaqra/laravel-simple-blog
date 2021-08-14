<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    function add(Request $req)
    {   
        $post = new Posts;
        $post->title=$req->title;
        $post->body=$req->body;
        $result = $post->save();
        return ["Result"=>"Done"];
    }
}
