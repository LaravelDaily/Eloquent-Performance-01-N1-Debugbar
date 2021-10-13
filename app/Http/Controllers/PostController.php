<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // With N + 1 Query Problem:
        $posts = Post::all();

        // The correct way with Eager loading:
        // $posts = Post::with('user')->get();

        // Or you can load the relationship later
        // $posts->load('user');

        return view('posts.index', compact('posts'));
    }
}
