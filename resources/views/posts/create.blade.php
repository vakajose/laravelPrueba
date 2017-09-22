@extends('layouts.app')

@section('content')

@if (count($errors) )
	{{-- expr --}}

	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				{{-- expr --}}
				<li>{{$error}}</li>
			@endforeach

		</ul>


	</div>
@endif

<form action="{{ route('store_post_path') }}" method="POST">
	

	{{ csrf_field() }}

 	<div class="form-group"> 
		<label for="title"> Title:</label>
		<input type="text" name="title" class="form-control" value="{{old('title')}}">
 	</div>


 	<div class="form-group">
 		<label for="description">Descripcion:</label>
 		<textarea rows="5" name="description" class="form-control"> {{old('description')}}</textarea>
 	</div>

 	<div class="form-group">
 		<label for="url">URL:</label>
 		<input type="text" name="url" class="form-control" value="{{old('url')}}"/>
 	</div>

 	<div class="form-group">
 		<button type="submit" class="btn btn-primary">Create Post</button>

 	</div>

</form>

	


@endsection