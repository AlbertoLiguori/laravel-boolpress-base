@extends('layouts.main')

@section('section-1')

        <form class="row g-3" method="post" action="{{route('posts.update', $oldPost['id'])}}">
          @csrf
          @method('PUT')

                  <div class="col-md-6">
                    <label for="inputTitle" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="inputTitle" name="input_title" value="{{$oldPost['title']}}">
                  </div>

                  <div class="col-md-6">
                    <label for="inputAuthor" class="form-label">Author:</label>
                    <input type="text" class="form-control" id="inputAuthor" name="input_author" value="{{$oldPost['author']}}">
                  </div>

                  <div class="col-md-4">
                    <label for="inputCategory" class="form-label">Category</label>
                    <select id="inputCategory" class="form-select" name="input_category_id">

                      <option value="{{$oldPost->category->id}}" selected> {{$oldPost->category->title}} </option>

                      @foreach($categories as $category)

                        <option value="{{$category->id}}"> {{$category->title}} </option>

                      @endforeach

                    </select>
                  </div>

                  <div class="col-md-10">
                      <label for="inputDescription" class="form-label">Description:</label>
                      <textarea id="inputDescription" rows="8" cols="80" name="input_description">{{$oldPost->postInformation->description}} </textarea>
                  </div>

                <fieldset>

                          <legend>Scegli i Tag:</legend>

                            @foreach($tags as $tag)

                              <div>
                                <input type="checkbox" id="{{'inputChk' . $tag->name}}" name="tags[]" value="{{$tag->id}}">
                                <label for="{{'inputChk' . $tag->name}}">{{$tag->name}}</label>
                              </div>

                            @endforeach

                  </fieldset>

                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>

        </form>

@endsection
