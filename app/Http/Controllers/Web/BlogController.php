<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
class BlogController extends Controller
{
    public function index()
    {

        $posts = Post::orderBy('_id','DESC')->where('status','PUBLISHED')->paginate(9);
        return view('web.posts',['posts' => $posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postAll($id){
        $post = Post::where('_id',$id)->first();
        return view('web.show',['post' => $post]);
    }
    // Listar publicaciones por categorias 
    public function categoryPublicacion($id){
        $where = array('category_id'=>$id,'status'=> 'PUBLISHED');
        $posts = Post::where($where)->orderBy('_id','DESC')->paginate(9);
        return view('web.posts',['posts'=>$posts]);
    }

    // Listar publicaciones por etiquetas
    public function tagPublicacion($slug){
        // Consulta cuando la relacion de la tabla es de muchos a muchos 
        $posts = Post::whereHas('tags',function($qr) use($slug){
                $qr->where('slug',$slug); // Esto quieres decit que buscara todo los post que contengan la tiqueta con ese slug
        })->where('status','PUBLISHED')->orderBy('_id','DESC')->paginate(9);
        return view('web.posts',['posts'=>$posts]);
    }
}
