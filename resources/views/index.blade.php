<!-- include navigation and other files from layout -->
@extends('layouts.app')

<!-- main content section -->
@section('content')
    <div class="row">
        <div class="col-md-11">
            <div class="starter-template text-center">
                <h1>Welcom to <b>BlogersSpot</b></h1>
                <p class="lead">This blog has sub-categories, such as: sport, cooking, sleeping, where people are able to post their experiences and opinions.
                    <br>If you already have an account sign in or sign up in order to see or add new posts</p>
            </div>
        </div>
    </div>
    <p></p>
    <div class="row">

        <div class="col-md-11">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/sports.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/cooking.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/programming.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/sleeping.jpg" alt="Fourth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </div>
@endsection
