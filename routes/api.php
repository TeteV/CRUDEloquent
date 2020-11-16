<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/add-post','App\Http\Controllers\PostController@addPost');

Route::post('/add-post','App\Http\Controllers\PostController@createPost');

Route::get('/posts','App\Http\Controllers\PostController@getPosts');

Route::delete('/delete-post/{id}','App\Http\Controllers\PostController@deletePost');

Route::put('/update-post/{id}','App\Http\Controllers\PostController@updatePost');

Route::get('/edit-post/{id}','App\Http\Controllers\PostController@updateForm');

Route::get('/posts/{id}','App\Http\Controllers\PostController@getPost');
