@extends('layouts.administrador')
@section('title','Publicación')
@section('tag_a_url')
    <a class="btn btn-success float-right" href="{{ route('posts.create') }}">Crear</a>
@endsection
@section('content_administrador')
{{ Form::model( $post ,["route" => ["posts.update",$post->id],"method" => "PUT"] )}}
@include('Admin.posts.partials.__form')
{{ Form::close()}}
@endsection
@section('scripts')
<script src="{{ asset('js/js_post.js') }}" type="text/javascript"></script>
@endsection