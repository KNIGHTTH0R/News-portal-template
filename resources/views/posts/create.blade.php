@extends('layouts.master')
@section('content')
<div class="col-12 col-md-9">
    <form action="/posts" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="post-title">Post title</label>
            <input type="text" class="form-control" name="post-title" id="post-title" placeholder="Post title">
        </div>
        <div class="form-group">
            <label for="post-body">Post body</label>
            <textarea class="form-control" rows="3" name="post-body" id="post-body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        @include('layouts.errors')
    </form>
</div>
@endsection