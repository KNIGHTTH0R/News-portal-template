@extends('layouts.master')

@section('content')
        <div class="col-12 col-md-9">
            <div class="row">
                @foreach($posts as $post)
                    @include('posts.post')
                @endforeach
            </div><!--/row-->
        </div><!--/span-->
@endsection



