@extends('layouts.app')
@section('content')
<h2>Show Post : {{$post->title}}</h2>
        <pre>
        {{ $post->body }}

            @if($post->active)
                Enabled 
            @else
                Disabled
            @endif
            
        </pre>
@endsection