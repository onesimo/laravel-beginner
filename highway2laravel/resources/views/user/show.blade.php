@extends('base')

@section('title', 'User control')

@section('container')
	<h2>Users</h2>

	<ul>
	@foreach ($users as $key => $user)
		@if($id == $key)
		<li>{{ $user }}</li>
		@endif
	@endforeach
	</ul>

@endsection
