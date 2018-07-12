@extends('layouts.administrador')
@section('title','Nueva Etiqueta')
@section('tag_a_url')
    <a class="btn btn-success float-right" href="{{ route('tags.create') }}">Crear</a>
@endsection
@section('content_administrador')
{{ Form::model( $tag,["route" => ["tags.update",$tag->id],"method" => "PUT"] )}}
@include('Admin.Tags.partials.__form')
{{ Form::close()}}
@endsection
