@extends('layouts.app')

@section('content')
    <h1>Create new Post</h1>
    <div class="col-md-6">
        <form action="{!! action('PostsController@store') !!}" method="POST">
            @csrf
        <!-- action='{{route('posts.store')}}' -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                <small id="title" class="form-text text-muted">We'll never share your post.</small>
            </div>
            <div class="form-group">
                <label for="postbody">Enter Post</label>
                <textarea class="form-control" name="postbody" id="postbody" required></textarea>
            </div>
            <div class="form-group" >
                <label for="selecttype">Post Type</label>
                <select class="selectpicker" name="selectype" id="selecttype" required>
                    <option default></option>
                    @foreach($categories as $category)
                        <option value="{{$category->Category_Id}}">{{$category->Name}}</option>
                    @endforeach
                </select>
                </div>
            <div class="form-check">
                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                 <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
