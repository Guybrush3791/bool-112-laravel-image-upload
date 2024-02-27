@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Posts</h1>
    <a href="{{ route('post.create') }}">CREATE NEW POST</a>
    <br><br>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('post.show', $post -> id) }}">
                    {{ $post -> title}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
