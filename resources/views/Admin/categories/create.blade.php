@extends('layouts.administrador')
@section('title','Nueva Categoria')
@section('tag_a_url')
    <a class="btn btn-primary float-right" href="{{ route('categories.index') }}">Listar</a>
@endsection
@section('content_administrador')
{{ Form::open( ["route" => "categories.store","method" => "POST"] )}}
@include('Admin.categories.partials.__form')
{{ Form::close()}}
@endsection
@section('scripts')
<script src="{{ asset('js/js_category.js') }}" type="text/javascript"></script>
@endsection
