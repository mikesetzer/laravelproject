<?php

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

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/', function (){
    return view('Welcome');
});

Route::get('/about/', function() {
    return view('about', [
        'articles' => App\Article::latest()->take(3)->get()
    ]);
});

Route::get('/articles/', function() {
    return view('articles', [
        'articles' => App\Article::latest()->take(10)->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{article}', 'ArticlesController@show');
