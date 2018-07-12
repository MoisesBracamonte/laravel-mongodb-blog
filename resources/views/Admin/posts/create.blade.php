@extends('layouts.administrador')
@section('title','Nueva publicación')
@section('tag_a_url')
    <a class="btn btn-primary float-right" href="{{ route('posts.index') }}">Listar</a>
@endsection
@section('content_administrador')
{{ Form::open( ["route" => "posts.store","method" => "POST"] )}}
@include('Admin.posts.partials.__form')
{{ Form::close()}}
@endsection
@section('scripts')
<script src="{{ asset('js/js_post.js') }}" type="text/javascript"></script>
@endsection
