<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**yo
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $categories = category::all();
        $category_post = category::with('posts')->when($request->category_id, function ($q){
            $q->where('id' , request('category_id'));
        })
            -> latest()
            ->get();
        return view('home', compact('categories','category_post'));

    }

    public function posts(Request $request)
    {
        $categories = category::all();
        $post = Post::when($request->category_id, function ($q){
            $q->where('category_id' , request('category_id'));
        })
            -> latest()
            ->get();
        return view('post', compact('categories','post'));
    }
}