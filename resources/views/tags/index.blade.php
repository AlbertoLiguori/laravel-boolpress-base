@extends('layouts.main')

@section('section-1')


<table class="table">
  <thead>
    <tr>

      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Posts</th>

    </tr>
  </thead>
  <tbody>

    @foreach($tags as $tag)

      <tr>
        <td scope="row">{{$tag['id']}}</td>
        <td>{{$tag['name']}}</td>
        <td>
          <a href="{{route('tags.show', $tag->id)}}">Details</a>
        </td>

      </tr>

    @endforeach
  </tbody>
</table>

@endsection
