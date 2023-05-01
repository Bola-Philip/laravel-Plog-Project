<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show(post $post)
    {
        return view('showPost',compact('post'));
    }
}
