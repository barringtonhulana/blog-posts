@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p>Published at: {{ $post->published_at }}</p>
    <p>Created at: {{ $post->created_at }}</p>
    <p>Updated at:{{ $post->updated_at }}</p>
    <div>
        <a href="{{ secure_url('/posts/edit', [$post->id]) }}">Edit Post</a>
    </div>
    <div>
        <form action="{{ secure_url('/posts/delete', [$post->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Post</button>
        </form>
    </div>
@endsection
