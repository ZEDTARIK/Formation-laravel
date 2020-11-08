<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post($id = 1) {
        $posts = [
            1 => ['title' => 'Learn Laravel'],
            2 => ['title' => 'Learn Angular']
        ];
        return view('posts.post', ['data' => $posts[$id]]);
    }
}
