
@extends('layouts.app')

@section('content')
    <a href="../categories" class="btn btn-primary">Go Back</a>
    <div class="col-md-5">
        <h4> Post Title: {{$post->Title}}</h4>
        <p>Post Body: {!! $post->Body !!}</p>
        <small> written on: {{$post->Created_at}} By: {{$post->user->name}}</small>
    </div>
@endsection
