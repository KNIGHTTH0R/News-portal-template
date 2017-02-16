@extends('layouts.master')
@section('content')
<div class="col-12 col-md-9">
    <form action="/login" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="name">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Name">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
        @include('layouts.errors')
    </form>
</div>
@endsection