@extends('layouts.app')


@section('content')
    <h1><a href="{{ route('posts.edit', $post->id) }}">{{$post->title}}</a></h1>
    <div>{{$post->content}}</div>
@endsection()