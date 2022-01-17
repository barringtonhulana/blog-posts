@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div>
        <a href="{{ secure_url('/posts', [$post->id]) }}">Back</a>
    </div>
    <h1>Update post: <br>{{ $post->title }}</h1>
    <form action="{{ secure_url('/posts/update', [$post->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input type="text" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <textarea name="body" id="" cols="30" rows="10">{{ $post->body }}</textarea>
        </div>
        <div>
            <input type="text" name="slug" value="{{ $post->slug }}">
        </div>
        <button type="submit">Update Post</button>
    </form>
@endsection
