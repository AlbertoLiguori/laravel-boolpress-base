@extends('layouts.main')

@section('section-1')

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$singlePost['title']}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$singlePost['author']}}</h6>
    <h6 class="card-subtitle mb-2 text-muted">{{$singlePost->category->title}}</h6>
    <p class="card-text">{{$singlePost['created_at']}}</p>
    <p class="card-text">{{$singlePost['updated_at']}}</p>
    <p class="card-text">{{$singlePost->postInformation->description}}</p>

    <a href="{{route('posts.index')}}" class="card-link">Torna all'elenco dei post</a>
  </div>
</div>

@endsection
