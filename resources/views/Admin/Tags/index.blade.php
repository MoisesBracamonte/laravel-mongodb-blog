@extends('layouts.administrador')
@section('title','Etiquetas')
@section('tag_a_url')
    <a class="btn btn-primary float-right" href="{{ route('tags.create') }}">Crear</a>
@endsection
@section('content_administrador')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Slug</th>
      <th scope="col" colspan="3">&nbsp</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tags as $tag)
    <tr>
      <td>{{ $tag->id }}</td>
      <td>{{ $tag->name }}</td>
      <td>{{ $tag->slug }}</td>
      <td width="10px"> Ver </td>
      <td width="10px">
        {!! Form::open(["route" => ["tags.edit",$tag->id],"method" => "GET" ]) !!}
          <button class="btn btn-sm btn-info">Editar</button>
        {!! Form::close() !!}
      </td>
      <td width="10px"> 
        {!! Form::open(["route" => ["tags.destroy",$tag->id],"method" => "DELETE" ]) !!}
          <button class="btn btn-sm btn-danger">Eliminar</button>
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $tags->render() }}
@endsection
@section('scripts')
<script src="{{ asset('js/js_tag.js') }}" type="text/javascript"></script>
@endsection