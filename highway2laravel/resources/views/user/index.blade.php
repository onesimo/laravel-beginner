@extends('base')

@section('title', 'User control')

@section('container')
	<h2>Users</h2>

	<ul>
	@foreach ($users as $user)
		<li>{{ $user }}</li>
	@endforeach
	</ul>

@endsection
