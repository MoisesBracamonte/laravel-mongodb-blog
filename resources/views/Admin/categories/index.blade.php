@extends('layouts.administrador')
@section('title','Etiquetas')
@section('tag_a_url')
    <a class="btn btn-primary float-right" href="{{ route('categories.create') }}">Crear</a>
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
    @foreach($categories as $category)
    <tr>
      <td>{{ $category->id }}</td>
      <td>{{ $category->name }}</td>
      <td>{{ $category->slug }}</td>
      <td width="10px"> Ver </td>
      <td width="10px">
        {!! Form::open(["route" => ["categories.edit",$category->id],"method" => "GET" ]) !!}
          <button class="btn btn-sm btn-info">Editar</button>
        {!! Form::close() !!}
      </td>
      <td width="10px"> 
        {!! Form::open(["route" => ["categories.destroy",$category->id],"method" => "DELETE" ]) !!}
          <button class="btn btn-sm btn-danger">Eliminar</button>
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $categories->render() }}
@endsection