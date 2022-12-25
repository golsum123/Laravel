@extends('layouts.app')
@section('title' , $post['title'])

@section('content')
@if($post['is_new'])
<div>using if</div>
@else
<div>old post</div>
@endif

@isset($post['is_new'])
<div>old unless</div>
@endisset
<h1>{{ $post['title'] }}</h1>
<p>{{ $post['content'] }}</p>
@endsection