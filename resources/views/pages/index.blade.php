@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center">
		<h1> {{$title}} </h1>
    	<p> This is the my first laravel application</p>
    	<p>
    		@if (Auth::guest())
	    		<a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
	    		<a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    		@endif
    	</p>	
	</div>

@endsection
