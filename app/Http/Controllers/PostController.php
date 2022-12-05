<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddpostRequest;

class PostController extends Controller {

    public function add(AddpostRequest $req) {
        // $validation = $req->validate([
        //     'name' => 'required|min:5|max:50',
        //     'fulltext' => 'required|min:20'
        // ]);
    }

}
