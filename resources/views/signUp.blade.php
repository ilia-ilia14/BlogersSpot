@extends('layouts.app')

@section('content')
    <div class="text-center col-md-5 ">
        <form class="form-signup">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <input type="text" id="firstname" class="form-control" placeholder="First Name" required autofocus>
            <input type="text" id="lastname" class="form-control" placeholder="Last Name" required autofocus>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <input type="password" id="inputPassword1" class="form-control" placeholder="Confirm Password" required>
            <p></p>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
        </form>
    </div>

@endsection
