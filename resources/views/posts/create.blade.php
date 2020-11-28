@extends('_layout')
@section('content')
    <h3>Create Post</h3>

<form method="POST" action="{{ route('posts.store') }}">

    @csrf 

    @include('posts.form')      

        <div class="form-group">
            <button type="submit" class="btn btn-success">Add Post</button>
        </div>

      
    </form>

@endsection