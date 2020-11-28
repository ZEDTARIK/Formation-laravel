@extends('_layout')
@section('content')


<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
        <div class="panel-heading">Edit Post N° {{ $post->id}}</div>
            <div class="panel-body">
          
                <form method="POST" class="form-horizontal" action="{{ route('posts.update', ['post' => $post->id]) }}">
                    @csrf 
                    @method('PUT')
                    @include('posts.form')   

                        <div class="form-group">
                            <div class="col-sm-6 text-center">
                                <button type="submit" class="btn btn-warning">Edit Post</button>
                            </div>
                        </div>
                </form>
                
                
            </div>
          </div>
    </div>
</div>

@endsection