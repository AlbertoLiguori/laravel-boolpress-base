@extends('layouts.main')

@section('section-1')


<table class="table">
  <thead>
    <tr>
      @foreach($columns as $column)
      <th scope="col">{{$column}}</th>
      @endforeach
    </tr>
  </thead>
  <tbody>

    @foreach($allPosts as $post)

      <tr>
        <th scope="row">{{$post['id']}}</th>
        <td>{{$post['category_id']}}</td>
        <td>{{$post->category->title}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['author']}}</td>
        <td>{{$post->postInformation->description}}</td>
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>
        <td> <a href="{{route('posts.show',$post['id'])}}"> Retrieve </a>
             <a href="{{route('posts.edit',$post['id'])}}"> Update </a>


             <form class="" action="{{route('posts.destroy', $post['id']) }}" method="post">
                   @csrf
                   @method('DELETE')

                   <button type="submit" name="button">Elimina</button>

             </form>

        </td>
      </tr>

    @endforeach
  </tbody>
</table>

@endsection
