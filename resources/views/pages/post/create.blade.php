@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

    <h1>CREATE NEW POST</h1>
    <form
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('POST')

        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="text">Text</label>
        <input type="text" name="text" id="text">
        <br>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept="image/png">
        <br>
        <input type="submit" value="CREATE">
    </form>
@endsection
