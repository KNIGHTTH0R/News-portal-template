<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    public function create()
    {

        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'post-title'=>'required',
            'post-body'=>'required'
        ]);

       Post::create([
           'title' => request('post-title'),
           'body' => request('post-body'),
           'user_id' => $post->user->id
       ]);

        return redirect('/');


    }
}
