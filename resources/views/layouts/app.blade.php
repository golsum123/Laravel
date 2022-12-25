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
    <div>
        <h5>laravel app</h5>
        <nav>
            <a href="{{ route('home.index') }}">home</a>
            <a href="{{ route('home.contact') }}">content</a>
            <a href="{{ route('posts.index') }}">blog post</a>
            <a href="{{ route('posts.create') }}">add blog</a>
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