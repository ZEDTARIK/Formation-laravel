@extends('_layout')

@section('content')

    <h2>List Posts</h2>

    <ul>
        @forelse($posts as $post)
        <li> {{$post->id}}  - {{$post->title}}</li>
        <li> {{$post->body}} </li>
        <li> 
            <a href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit Post</a> 
        </li>
        <li>
            <form method="POST" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
                @csrf 
                @method('DELETE')
                        <button type="submit">Delete</button>
            </form>
        </li>
        @empty
            <p>Not Post</p>
        @endforelse
    </ul>
@endsection