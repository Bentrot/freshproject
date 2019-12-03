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

//Route::get('/', function () {
//    return view('test' , [
//    'name' => request('name')
//    ]);
//});
//
//Route::get('/welcome', function () {
//    return view('welcome');
//});
//
//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'first-post' => 'First post text',
//        'second-post' => 'Second post text here'
//    ];
//
//    if (! array_key_exists($post,$posts)){
//        abort(404,' Sorry, no post available.');
//    }
//
//    return view('post',[
//        'post' => $posts[$post]
//    ]);
//});

route::get('/posts/{post}','PostsController@show');

