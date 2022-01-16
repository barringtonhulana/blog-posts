@extends('layouts.app')

@section('title', 'All posts')

@section('content')
    <h1>All posts</h1>
    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <p>{{ $post->created_at }}</p>
        </div>
    @endforeach
@endsection
