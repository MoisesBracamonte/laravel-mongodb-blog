<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $posts  = Post::orderBy('_id','DESC')->paginate(9);
          return view('Admin.posts.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('_id','DESC')->pluck('name','_id');
        $tags = Tag::orderBy('_id','DESC')->pluck('name','_id');
        return view('Admin.posts.create',['categories' => $categories,'tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
          $post = Post::create( $request->except('tag_id'));
         $post->tags()->attach($request->tag_id); //  Insertamos los datos en la  tabla pibot, 
         return redirect()->route('posts.index')->with("Se creo la publicación correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::orderBy('_id','DESC')->pluck('name','_id');
        $tags = Tag::orderBy('_id','DESC')->pluck('name','_id');
        return view('Admin.posts.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
            $post = Post::find($id);
            $post->fill($request->except('tag_id'))->save();
            $post->tags()->sync($request->tag_id);
            return  redirect()->route('posts.index')->with('ok_update','Se actualizo la publicación');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back()->withInput()->with('ok_delete','Se elimino la publicación correctamente');
    }
}
