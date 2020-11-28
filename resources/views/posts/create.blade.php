@extends('_layout')
@section('content')
    <h3>Create Post</h3>

<form method="POST" action="{{ route('posts.store') }}">

    @csrf 

        <div class="form-group">
            <label for="title">Title Post</label>
            <input class="" type="text" id="title" name="title" placeholder="Title Post" value={{ old('title')}} >
        </div>
        
        <div class="form-group">
            <label for="body">Body Post</label>
            <input class="" type="text" id="body" name="body" placeholder="Body Post" value={{ old('body')}} >
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Add Post</button>
        </div>

        @if( $errors->any())
        <ul>
            @foreach( $errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
        @endif

    </form>

@endsection