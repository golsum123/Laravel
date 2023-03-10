<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" conte(nt="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>laravel app - @yield('title')</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white
    border-bottom shadow-sm mb-3">
        <h5 class="my-0 mr-md-auto ">laravel app</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('home.index') }}">home</a>
            <a class="p-2 text-dark" href="{{ route('home.contact') }}">content</a>
            <a class="p-2 text-dark" href="{{ route('posts.index') }}">blog post</a>
            <a class="p-2 text-dark" href="{{ route('posts.create') }}">add blog</a>
        </nav>
    </div>

    <div class="container">
        <h1>hello world</h1>
        @if(session('status'))
            <div style="color:red;">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>