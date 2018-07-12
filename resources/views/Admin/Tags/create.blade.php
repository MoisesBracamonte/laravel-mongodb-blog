@extends('layouts.administrador')
@section('title','Nueva Etiqueta')
@section('tag_a_url')
    <a class="btn btn-primary float-right" href="{{ route('tags.index') }}">Listar</a>
@endsection
@section('content_administrador')
{{ Form::open( ["route" => "tags.store","method" => "POST"] )}}
@include('Admin.Tags.partials.__form')
{{ Form::close()}}
@endsection
@section('scripts')
<script src="{{ asset('js/js_tag.js') }}" type="text/javascript"></script>
@endsection
