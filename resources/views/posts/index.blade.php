@extends('_layout')

@section('content')

    <h2>List Posts</h2>

    <ul>
        @foreach($posts as $post)
    <li> {{$post->id}}  - {{$post->title}}</li>
        @endforeach
    </ul>
@endsection