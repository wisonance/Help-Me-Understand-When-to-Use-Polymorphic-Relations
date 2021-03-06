<?php

Auth::loginUsingId(1);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('posts/{post}', function (App\Post $post) {
    return view('posts.show')->withPost($post);
});

// Laracasts Homework: Set up routing to add and remove a favorite.
