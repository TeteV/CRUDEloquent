<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/add-post','App\Http\Controllers\PostController@addPost');

Route::post('/add-post','App\Http\Controllers\PostController@createPost')->name('post.add');

Route::get('/posts','App\Http\Controllers\PostController@getPosts');

Route::get('/delete-post/{id}','App\Http\Controllers\PostController@deletePost');

Route::get('/update-post','App\Http\Controllers\PostController@updatePost')->name('post.update');

Route::get('/edit-post/{id}','App\Http\Controllers\PostController@updateForm');
