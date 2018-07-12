@extends('layouts.admin')
@section('content')
	<form method="post" action="{{url('category')}}" enctype="multipart/form-data">
		 @csrf
	<label for="">NAME : </label>
	<input type="text" name="name"><br><br>
	<label for="">SLUG : </label>
	<input type="text" name="slug"><br><br>
	<input type="submit" value="SEND DATA">
</form>
@endsection