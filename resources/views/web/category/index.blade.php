@extends('layouts.admin')
@section('content')
<div class="container">
    <a class="btn btn-primary float-right" href="{{ route('category.create') }}">Crear</a>

	<table>
		<thead>
		<tr>
			<th>NAME</th>
			<th>SLUG</th>
		</tr>
		</thead>
		<tbody>
	@foreach($categories as $c)
	<tr>
		<td>{{$c->name}}</td>
		<td>{{$c->slug}}</td>
	</tr>
	@endforeach
			
		</tbody>
	</table>

</div>
@endsection