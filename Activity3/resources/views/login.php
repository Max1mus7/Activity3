<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Login</title>
</head>
	<body>
	<form action="dologin" method="post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
	<label for="Username">Username</label>
	<input type="text" id="Username" name="username"></input>
	<p></p>
	<label for="Password">Password</label>
	<input type="text" id="Password" name="password"></input>
	<p></p>
	<br>
	<br>
	<input type="submit" value="Submit"></input>
	</form>
    </body>
</html>