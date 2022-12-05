<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/addpost', function () {
    return view('addpost');
});

Route::post('/add', 'App\Http\Controllers\PostController@add')->name('postform');