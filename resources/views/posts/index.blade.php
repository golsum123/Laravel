@extends('layouts.app')
@section('title' , 'postblog')

@section('content')
    @forelse($posts as $key => $post)
        @include('posts.partials.post')

    @empty
    no posts found
    @endforelse 

@endsection