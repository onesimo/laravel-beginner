@extends('base')

@section('title', 'bar page ')

@section('container')
	<h2>bar parcial</h2>
	@if(true)
		I am true
	@endif

	<ul>
	@foreach (['foo','baz','bar'] as $item)
		<li>{{ $item }}</li>
	@endforeach
	</ul>

@endsection
