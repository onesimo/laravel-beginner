@extends('base')

@section('title', 'Create User')

@section('container')
	<h2>Create User</h2>

	<form action="/user/add"method="post" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="name" placeholder="name"><br/>
		<input type="text" name="email" placeholder="email"><br/>
		<input type="text" name="password" placeholder="password"><br/>
		<input type="text" name="password_confirmation" placeholder="Repeat password"><br/>
		<input type="submit" value="Save"><br/>
	</form>
	{{ var_dump($errors) }}
@endsection
