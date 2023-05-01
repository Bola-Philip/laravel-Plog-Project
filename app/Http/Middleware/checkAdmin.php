<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class checkAdmin
{
    /*
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $hashedPassword = Hash::make($request->password);
        if (!Auth::guard('admin') -> attempt(['email' => $request->email , 'password' => $request->password])){
            dd($request->all());
            return back() -> withInput($request->only('email'));
        }
        //return redirect() -> intended('admin');
        return $next($request);
    }
}
