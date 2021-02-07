<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\PostInformation;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts = Post::all();

        $columns =[
          'id' => '#',
          'category_id' => 'Cat.ID',
          'category' => 'Category',
          'title' => 'Title',
          'author' => 'Author',
          'description' => 'Description',
          'tags' => 'Related Tags',
          'created_at' => "Created At",
          'updated_at' => "Updated At",
          'actions' => 'CRUD'
        ];

        return view('posts.index', compact(['allPosts' ,'columns']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @ param  \Illuminate\Http\Request  $request
     * @ return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        //Sto creando una nuova row alla tabella Post
        $newPost= new Post();

        //Sto creando una nuova row alla tabella PostInformation
        $newPostInformation = new PostInformation();

        $newPost->title = $data['input_title'];
        $newPost->category_id = $data['input_category_id'];
        $newPost->author = $data['input_author'];

        $newPostInformation->description = $data['input_description'];

        $newPostInformation->slug ='non-sono-vuoto';


        $newPost->save();
        //Attenzione!!!!(sia all'ordine che ad inserire il valore della foreign Key)
        $newPostInformation->post_id = $newPost->id;
        $newPostInformation->save();

        return view('posts.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singlePost = Post::find($id);
        return view('posts.show', compact('singlePost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $oldPost = Post::find($id);
        return view('posts.edit', compact(['oldPost', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $oldPost = Post::find($id);

      $oldPost->title = $request->input('input_title');
      $oldPost->category_id = $request->input('input_category_id');
      $oldPost->author = $request->input('input_author');

      $oldPost->save();

      $oldPost->postInformation->description = $request->input('input_description');

      $oldPost->postInformation->save();

      return view('posts.success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post= Post::find($id);

      $post->postInformation->delete();
      $post->delete();

      return redirect()->route('posts.index');
    }
}
