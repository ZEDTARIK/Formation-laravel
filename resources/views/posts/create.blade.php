@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">Create New Post</div>
            <div class="panel-body">
          
                <form method="POST" class="form-horizontal" action="{{ route('posts.store') }}">
                    @csrf 
                    @include('posts.form')   

                        <div class="form-group">
                            <div class="col-sm-6 text-center">
                                <button type="submit" class="btn btn-success">Add Post</button>
                            </div>
                        </div>
                </form>
                
                
            </div>
          </div>
    </div>
</div>

@endsection