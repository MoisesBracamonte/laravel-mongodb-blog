@extends('layouts.administrador')
@section('title','Publicación')
@section('tag_a_url')
    <a class="btn btn-primary float-right" href="{{ route('posts.create') }}">Crear</a>
@endsection
@section('content_administrador')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario</th>
      <th scope="col">Categoria</th>
      <th scope="col">Etiquetas</th>
      <th scope="col">Estado</th>
      <th scope="col" colspan="3">&nbsp</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <td>{{ $post->id }}</td>
      <td>{{ $post->name }}</td>
      <td>{{ $post->user->name }}</td>
      <td>{{ $post->category->name }}</td>
      <td>
            @foreach($post->tags as $tag)
                  <span class="badge badge-dark">{{ $tag->name}}</span>
            @endforeach
      </td>
      <td width="10px"> 
              @if($post->status == "PUBLISHED")
                  <span class="badge badge-success">{{ $post->status}}</span>
              @else
                  <span class="badge badge-warning">{{ $post->status}}</span>
              @endif        
        </td>
      <td width="10px">
        {!! Form::open(["route" => ["posts.edit",$post->id],"method" => "GET" ]) !!}
          <button class="btn btn-sm btn-info">Editar</button>
        {!! Form::close() !!}
      </td>
      <td width="10px"> 
        {!! Form::open(["route" => ["posts.destroy",$post->id],"method" => "DELETE" ]) !!}
          <button class="btn btn-sm btn-danger">Eliminar</button>
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $posts->render() }}
@endsection