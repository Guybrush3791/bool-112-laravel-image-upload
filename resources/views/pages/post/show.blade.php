@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>{{ $post -> title }}</h1>
    <div>
        {{ $post -> text }}
    </div>
    <img src="{{ asset('storage/' . $post -> image) }}" alt="" width="300px">
@endsection
