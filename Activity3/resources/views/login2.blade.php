<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Login</title>
</head>
	<body>
	@extends('layouts.appmaster')
	@section('title', 'Login Page')
	@section('content')
	<form action="dologin" method="post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
	<label for="username">Username</label>
	<input type="text" id="username" name="username"></input>
	<?php echo $errors->first('username')?>
	<p></p>
	<label for="password">Password</label>
	<input type="text" id="password" name="password"></input>
	<?php echo $errors->first('password')?>
	<p></p>
	<br>
	<br>
	<input type="submit" value="Submit"></input>
	</form>
	@endsection
    </body>
</html>