@extends('_layout')
@section('content')
    <h3>Edit Post</h3>

<form method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}">

    @csrf 
    @method('PUT')

    @include('posts.form')      

        <div class="form-group">
            <button type="submit">Edit Post</button>
        </div>

   
    </form>

@endsection