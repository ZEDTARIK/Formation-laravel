@extends('_layout')

@section('content')

<div class="row" >
    <div class="col-md-12">
    <a href="{{ route('posts.create') }}" class="btn btn-primary" role="button">Add New Post</a>
    </div>
</div>

        <div class="row" style="margin-top: 3px">
            <div class="col-md-12">
                
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Post</div>
                    <div class="panel-body">
                        
                        <table class="table table-hover table-bordered table-sm-responsive">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>body</th>
                                    <th>N.Comments</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($posts as $post)
                                <tr>
                                <td>{{ $post->title}}</td>
                                <td>{{ $post->body}}</td>
                                <td>
                                    <span class="badge">{{ $post->comments_count }}</span>
                                </td>
                                    <td>
                                        <a href="{{ route('posts.edit', ['post' => $post->id])}}" class="btn btn-primary btn-sm" role="button">Edit</a> 
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
                                            @csrf 
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>Not Post</tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                  </div>
            </div>
        </div>

@endsection