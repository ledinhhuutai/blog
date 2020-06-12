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


Route::get('/posts','PostController@index')->name('posts.index');
Route::get('/posts/show/{id}', 'PostController@show')->name('post.show');
Route::get('/posts/create','PostController@create')->name('post.create');
