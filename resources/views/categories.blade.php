<!-- include navigation and other files from layout -->
@extends('layouts.app')

<!-- main content section -->
@section('content')
    <div class="row">
    @if(count($categories > 0))
        @foreach($categories as $category)

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h3>{{$category->Name}}</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn  btn-outline-secondary" href="posts/{{$category->Category_Id}}/{{$category->Name}}" >View</a>
                                </div>
                                <small class="text-muted">3</small>
                            </div>
                        </div>
                    </div>
                </div>

        @endforeach
    @else
        <p>there is no categories, in order to add categories contact administrator.</p>
    @endif
    </div>

@endsection
