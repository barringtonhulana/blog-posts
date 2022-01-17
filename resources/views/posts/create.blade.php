@extends('layouts.app')

@section('title', 'Create new post')

@section('content')
    <h1>Create new post</h1>
    <form action="{{ secure_url('/posts') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="title" value="">
        </div>
        <div>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Add Post</button>
    </form>
@endsection
