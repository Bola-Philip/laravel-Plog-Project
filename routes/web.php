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

Route::get('createPost', [\App\Http\Controllers\HomeController::class, 'createPost'])
    ->name('createPost');

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
Route::post('admin/check', 'App\Http\Controllers\adminController@checkAdminLogin') ->middleware('checkAdmin')-> name('check.admin.login');


Route::get('edit/{post_id}', 'App\Http\Controllers\adminController@editData')-> name('adminEdit');
Route::post('update/{post_id}', 'App\Http\Controllers\adminController@updateData')-> name('adminUpdate');
Route::delete('delete/{post_id}', 'App\Http\Controllers\adminController@deleteData')-> name('adminDelete');


Route::get('convert', function () {
})->name('contact');
