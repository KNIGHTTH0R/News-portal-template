@extends('layouts.master')

@section('content')
<div class="col-12 col-md-9">
    <h1>{{ $post->title}}</h1>
    <p>{{ $post->body }}</p>
<hr>
    <div class="comments">
        <ul class="list-group">
        @foreach ($post->comments as $comment)
            <li class="list-group-item">
                <strong>
                    {{ $comment->user->name }} : {{ $comment->created_at->diffForHumans() }}:
                </strong>
                 {{ $comment->body }}
            </li>
        @endforeach
        </ul>
    </div>

    <hr>
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="comment-body">Your comment here...</label>
                    <textarea class="form-control" rows="3" name="comment-body" id="comment-body"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    @include('layouts.errors')

</div>
@endsection