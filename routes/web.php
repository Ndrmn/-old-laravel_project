<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog/{id}', 'App\Http\Controllers\PostController@showonepost')->name('onepost');

Route::get('/blog', 'App\Http\Controllers\PostController@getBlogData')->name('getblog');

Route::get('/addpost', function () {
    return view('addpost');
})->name('addpost');

Route::post('/add', 'App\Http\Controllers\PostController@add')->name('postform');