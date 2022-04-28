<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index-posts', compact('posts'));
    }

    public function create()
    {
        return view('posts.create-post');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return back()->with('success', 'Post created successfully!');
    }

    public function show($locale, $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show-post', compact('post'));
    }
}
