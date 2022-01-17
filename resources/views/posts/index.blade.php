@extends('layouts.app')

@section('title', 'All posts')

@section('content')
    <h1>All posts</h1>
    <div>
        <a href="{{ secure_url('/posts/add') }}">Add New Post</a>
    </div>
    @foreach($posts as $post)
        <div>
            <a href="{{ secure_url('/posts', [$post->id]) }}"><h2>{{ $post->title }}</h2></a>
            <p>{{ $post->body }}</p>
            <p>{{ $post->created_at }}</p>
        </div>
    @endforeach
@endsection
