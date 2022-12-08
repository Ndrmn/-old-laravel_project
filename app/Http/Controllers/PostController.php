<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddpostRequest;
use App\Models\Blog;

class PostController extends Controller {

    public function home_index() {

        return view('home.index');
    }

    public function index() {

        return view('blog.index', ['data' => Blog::orderBy('id', 'desc')->get()]);
    }

    public function create() {

        return view('blog.create');
    }

    public function store(AddpostRequest $request) {

        $path = $request->file('image')->store('uploads','public');

        $blog = new Blog();
        $blog->name = $request->input('name');
        $blog->fulltext = $request->input('fulltext');
        $blog->image = $path;

        $blog->save();

        return redirect()->route('blog.index');
    }

    // public function show($id) {

    //     return view('blog.show', ['data' => Blog::find($id)]);
    // }

    public function show(Blog $blog) {

        return view('blog.show', ['data' => $blog]);
    }
}