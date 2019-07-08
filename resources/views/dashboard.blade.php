@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Hello {{ Auth::user()->name }}! Now you can make or view the posts</p>
                        <a class="btn btn-success btn-space " href="categories/">Blog Categories</a>
                        <a class="btn btn-success my-2 my-sm-0" href="{{route('posts.create')}}">Create Post</a>
                    <hr>
                        @if(count($posts)> 0)

                            <table class="table table-striped" >
                                <tr>
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td><a href="{{route('posts.show', $post->id)}}"> {{$post->Title}} </a></td>
                                        <td><a class="btn btn-outline-info my-2 my-sm-0" href="posts/{{$post->id}}/edit">Edit Post</a></td>
                                        <td><form action=" {!! action('PostsController@destroy', $post->id) !!}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button type="submit" class="btn btn-outline-danger">Delete Post</button>
                                            </form></td>
                                    </tr>
                                @endforeach

                            </table>
                        @else
                            <p>You have no posts</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
