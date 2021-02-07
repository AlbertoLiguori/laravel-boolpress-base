@extends('layouts.main')

@section('section-1')


<h1>{{$tag->name}}</h1>

<ul>
    @foreach($tag->posts as $post)
    <li>{{$post->title}}</li>
    @endforeach
</ul>

@endsection
