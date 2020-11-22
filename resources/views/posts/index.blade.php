@extends('_layout')

@section('content')

    <h2>List Posts</h2>

    <ul>
        @forelse($posts as $post)
        <li> {{$post->id}}  - {{$post->title}}</li>
        @empty
            <p>Not Post</p>
        @endforelse
    </ul>
@endsection