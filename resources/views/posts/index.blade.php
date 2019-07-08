<!-- include navigation and other files from layout -->
@extends('layouts.app')

<!-- main content section -->
@section('content')
    <div class="col-md-8 ">
        <div class="row">
            <div class="col-lg">
                <a class="btn btn-success my-2 my-sm-0" href="{{route('posts.create')}}">Create Post</a>
            </div>
        </div>




    <p></p>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">{{$categoryName}} Posts</h6>


        @if(count($posts) > 0)
            @foreach($posts as $post)


                <a class="nav-link "  href="{{route('posts.show', $post->id)}}">
                <div class="media text-muted pt-3 ">
                    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-info">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-gray-dark">Title: {{$post->Title}}</strong>
                        </div>
                        <p >{!!  $post->Body !!}</p>
                        <samll>Written By: {{$post->user->name}},  {{$post->Created_at}}</samll>
                    </div>
                </div>
                </a>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No Posts found</p>
        @endif

    </div>
    </div>
@endsection

