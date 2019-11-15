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

<<<<<<< HEAD
Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
=======
Route::get('/articles/', function() {
    return view('articles', [
        'articles' => App\Article::latest()->take(10)->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index');
>>>>>>> 92f8d3b278180288fa1c10381b4a8541e903aa7c
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
