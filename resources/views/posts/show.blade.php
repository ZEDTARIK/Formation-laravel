@extends('_layout')
@section('content')
<h2>Show Post : {{$post->title}}</h2>
        <pre>
        {{ $post->body }}
        </pre>
@endsection