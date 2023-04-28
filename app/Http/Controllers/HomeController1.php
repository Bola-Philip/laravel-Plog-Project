<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController1 extends Controller
{
    public function index(Request $request)
    {
        $post_id = Post::create([
            'title' => $request -> title,
            'post_text' => $request -> post_text,
        ]);
        $find_post = Post::find($post_id -> id);
        $find_post -> categories() -> sync($request -> categories);
    }
}
