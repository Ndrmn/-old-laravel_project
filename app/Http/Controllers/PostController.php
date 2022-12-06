<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddpostRequest;
use App\Models\Blog;

class PostController extends Controller {

    public function add(AddpostRequest $req) {
        // $validation = $req->validate([
        //     'name' => 'required|min:5|max:50',
        //     'fulltext' => 'required|min:20'
        // ]);

        $path = $req->file('image')->store('uploads','public');

        $blog = new Blog();
        $blog->name = $req->input('name');
        $blog->fulltext = $req->input('fulltext');
        $blog->image = $path;

        $blog->save();

        return redirect()->route('getblog');
    }

    public function getBlogData() {

        // $blog = new Blog();
        // dd($blog->all());
        $blog = new Blog();
        return view('blog', ['data' => $blog->orderBy('id', 'desc')->get()]);
    }

    public function showonepost($id) {
        $blog = new Blog();
        return view('onepost', ['data' => $blog->find($id)]);
    }
}