@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-10">
    <a href="{{ route('posts.create') }}" class="btn btn-outline-dark" role="button">Add New Post</a>
    </div>
</div>

<div class="row justify-content-center" style="margin-top: 9px;">
    <div class="col-md-10">

                <div class="card">
                    <div class="card-header">Lists</div>
                    <div class="card-body">
                     
                        <ul class="nav nav-tabs nav-stacked my-3">
                            <li class="nav-item">
                                <a href="/posts" class="nav-link @if($tab =='list') active @endif">Posts</a>
                            </li>
                            <li class="nav-item">
                                <a href="/posts/archive" class="nav-link @if($tab =='archive') active @endif">Archive</a>
                            </li>
                        </ul>
                        
                        <span class="label label-center">
                            {{ $posts->count()  }} Posts 
                        </span>
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