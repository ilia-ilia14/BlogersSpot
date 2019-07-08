<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .btn-space {
            margin-right: 8px;
        }
        .footer
        {
            margin-top: 24%;
            left: 0;
            bottom: 0;
            width: 100%;
            overflow: hidden;
        }
        @media (min-width: 400px) {
            .btn-space {
                margin-right: 8px;
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>
@include('layouts.navbar')
<div class="container">
    <p></p>
    @include('layouts.messages')
    @yield('content')
</div>

<script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'postbody' );
</script>

@include('layouts.footer')
</body>
</html>
