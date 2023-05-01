<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index(Request $request)
    {
        $categories = category::all();
        $category_post = category::with('posts')->when($request->category_id, function ($q){
            $q->where('id' , request('category_id'));
        })
            -> latest()
            ->get();
        return view('admin', compact('categories','category_post'));

    }

    public function adminLogin(){
        return view('auth.adminLogin');
    }

    public function checkAdminLogin(Request $request)
    {
        if (! Auth::guard('admin') -> attempt(['email' => $request -> email , 'password' => $request -> password])){
            return back() -> withInput($request -> only('email'));
        }
        return redirect() -> intended('admin');
        //return $next($request);
    }

    public function admin()
    {
        return view('admin');
    }
    public function editData($post_id)
    {
        $categories = category::all();
        $category_post = Post::where('id' , $post_id)->get();
        return view('postUpdate', compact('categories','category_post'));
    }
    public function updateData(Request $request,$post_id)
    {
        $post = Post::find($post_id);
        $post->update($request->all());
        $post -> categories() -> sync($request -> categories);
    }
    public function deleteData(Request $request,$post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        $post -> categories() -> sync($request -> categories);
    }


}
