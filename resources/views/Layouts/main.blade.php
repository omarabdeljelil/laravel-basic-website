<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Basic Web Site')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@include('inc.navbar')

<div class="container" id="container">
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @include('inc.messages')
            @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
        </div>
    </div>
</div>
<footer id="footer" class="text-center bg-white border-top shadow-sm">
    <p>Copyright 2018 &copy; Omar Abdeljelil</p>
</footer>
</body>
</html>