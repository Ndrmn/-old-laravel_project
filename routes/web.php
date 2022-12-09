<?php

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');