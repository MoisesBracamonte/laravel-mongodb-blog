@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12 col-md-offset-2">
			<section class="col-md-12 card-posts">
				<div class="card" >
				 <p class="categoria-product-class"><strong>Categoria :</strong> 
				 	<a href="{{ route('page.categoryPublicacion',$post->category->id)}}">{{ $post->category->name }}</a>
				 </p>
				 <hr>
				  <img class="card-img-top" src="{{ $post->file}}" alt="{{$post->name}}">
				    <h5 class="card-title-posts name-post">{{ $post->name }}</h5>	
				  <div class="card-body">
				    <p class="card-text text-excerpt">{{$post->excerpt}}</p>
				    <article>{{$post->body}}</article>
				    <hr>
				    	@foreach($post->tags as $tag) 
						    <span class="badge badge-dark">
						    		<a href="{{route('page.tagPublicacion',$tag->slug)}}">{{$tag->name}}</a> 
						    </span>
				    	@endforeach
				  </div>
				</div>		
			</section>
	</div>
</div>
@endsection