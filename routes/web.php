<?php

Route::get('/', [App\Http\Controllers\PostController::class, 'home_index'])->name('home.index');

Route::get('/blog', [App\Http\Controllers\PostController::class, 'index'])->name('blog.index');

Route::get('/addpost', [App\Http\Controllers\PostController::class, 'create'])->name('blog.create');

Route::post('/add', [App\Http\Controllers\PostController::class, 'store'])->name('blog.store');

Route::get('/blog/{blog}', [App\Http\Controllers\PostController::class, 'show'])->name('blog.show');