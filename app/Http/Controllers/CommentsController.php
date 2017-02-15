<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Post;


class CommentsController extends Controller
{
    public function create()
    {

    }

    public function store(Post $post)
    {

        $this->validate(request(),[
            'comment-body'=>'required'
        ]);

        Comments::create([
            'post_id'=> $post->id,
            'body' => request('comment-body')
        ]);

        return back();

    }
}
