@extends('layouts.master')

@section('content')
<div class="col-12 col-md-9">
    <h1>{{ $post->title}}</h1>
    <p>{{ $post->body }}</p>
</div>
@endsection