@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12 col-md-offset-2">
		<h4>Lista de art&iacute;culos</h4>
		<div class="row">
		@foreach($posts as $post)
			<section class="col-md-4 card-posts">
				<div class="card" >
				  <img class="card-img-top" src="{{ $post->file}}" alt="{{$post->name}}">
				    <h5 class="card-title-posts">{{ $post->name }}</h5>	
				  <div class="card-body">
				    <p class="card-text">{{$post->excerpt}}</p>
				    <a href="{{route('page.postAll',$post->id)}}" class="btn btn-success">Leer mas ...</a>
				  </div>
				</div>		
			</section>
		@endforeach
		</div>
		{{ $posts->render() }}
	</div>
</div>
@endsection