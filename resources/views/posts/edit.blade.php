@extends('layouts.app')
@section('content')


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Post N° {{ $post->id}}</div>
            <div class="card-body">

                <form method="POST" class="form-horizontal" action="{{ route('posts.update', ['post' => $post->id]) }}">
                    @csrf 
                    @method('PUT')
                    @include('posts.form')   

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-warning">Edit Post</button>
                            <a href="{{ route('posts.index')}}"  type="button"  class="btn btn-danger"> Cancel </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection