@extends('layouts.administrador')
@section('title','Editar Categoria')
@section('tag_a_url')
    <a class="btn btn-primary float-right" href="{{ route('categories.create') }}">Listar</a>
@endsection
@section('content_administrador')
{{ Form::model( $category,["route" => ["categories.update",$category->id],"method" => "PUT"] )}}
@include('Admin.categories.partials.__form')
{{ Form::close()}}
@endsection
@section('scripts')
<script src="{{ asset('js/js_category.js') }}" type="text/javascript"></script>
@endsection
