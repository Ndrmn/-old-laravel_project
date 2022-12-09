<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddpostRequest;
use App\Models\Post;

class PostController extends Controller {

    public function index() {

        return view('posts.index', ['data' => Post::orderBy('id', 'desc')->get()]);
    }

    public function create() {

        return view('posts.create');
    }

    public function store(AddpostRequest $request) {

        Post::create([
            'name' => $request->name,
            'full_text' => $request->full_text,
            'image' => $request->file('image')->store('uploads','public')
        ]);

        return redirect()->route('posts.index');
    }

    public function show(Blog $post) {

        return view('posts.show', ['data' => $post]);
    }
}