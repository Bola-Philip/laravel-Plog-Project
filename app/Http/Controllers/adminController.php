<?php

namespace App\Http\Controllers;

use App\Models\category;
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

    public function admin()
    {
        return view('admin');
    }
    public function adminLogin(){
        return view('auth.adminLogin');
    }

    public function checkAdminLogin(Request $request)
    {
//        if (Auth::guard('admin') -> attempt(["email" => $request -> email , "password" => $request -> password])){
//            return redirect() -> intended('admin');
//        }
//        return back() -> withInput($request -> only('email'));
       return view('admin');
    }


}
