<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('home1', [\App\Http\Controllers\HomeController1::class, 'index'])
    ->name('home1');

Route::get('post/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('about', function () {
    return view('about');
})->name('about');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts', [App\Http\Controllers\HomeController::class, 'posts'])->name('posts');


Route::get('admin/login', 'App\Http\Controllers\adminController@adminLogin') -> name('admin.login');
Route::get('admin', 'App\Http\Controllers\adminController@index')->middleware('auth:admin')-> name('admin');

Route::post('admin/check', 'App\Http\Controllers\adminController@checkAdminLogin')->middleware('checkAdmin')->name('check.admin.login');

