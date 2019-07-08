@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <div class="col-md-6">
        <form action=" {!! action('PostsController@update', $post->id) !!}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$post->Title}}" placeholder="Enter Title" required>
                <small id="title" class="form-text text-muted">We'll never share your post.</small>
            </div>
            <div class="form-group">
                <label for="postbody">Enter Post</label>
                <textarea class="form-control" name="postbody" id="postbody" rows="3" required>{{$post->Body}}</textarea>
            </div>
            <div class="form-group" >
                <label for="selecttype">Post Type</label>
                <select class="selectpicker" name="selecttype" id="selecttype" required>
                    <option default value="{{$post->Category_Id}}"></option>
                    @foreach($categories as $category)
                        <option value="{{$category->Category_Id}}">{{$category->Name}}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="_method" value="PUT" />
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

