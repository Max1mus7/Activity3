
@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')
@if($credentials->getUsername() == 'Mark')
	<h3>Mark you have logged in correctly</h3>
@else
	<h3>Someone besides Mark logged in successfully.</h3>
@endif
@endsection