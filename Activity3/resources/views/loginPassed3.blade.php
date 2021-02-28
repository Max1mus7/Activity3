
@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')
<!-- add a customer here -->
<h4>Add a customer here!</h4>
<form action="addCustomer" method="post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
	<label for="firstName">First Name: </label>
	<input type="text" id="firstName" name="firstName"></input>
	<p></p>
	<label for="lastName">Last Name: </label>
	<input type="text" id="lastName" name="lastName"></input>
	<br>
	<br>
	<input type="submit" value="Add Customer"></input>
	</form>
	<hr>
	<!-- add an order here-->
	<h4>Add an order here!</h4>
	<form action="addOrder" method="post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
	<label for="firstName">First Name: </label>
	<input type="text" id="firstName" name="firstName"></input>
	<p></p>
	<label for="lastName">Last Name: </label>
	<input type="text" id="lastName" name="lastName"></input>
	<p></p>
	<label for="product">Product: </label>
	<input type="text" id="product" name="product"></input>
	<br>
	<br>
	<input type="submit" value="Submit"></input>
	</form>
	<hr>
	<!-- create a new customer and order here -->
	<h4>Create your own order here!</h4>
	<form action="createOrder" method="post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
	<label for="firstName">First Name: </label>
	<input type="text" id="firstName" name="firstName"></input>
	<p></p>
	<label for="lastName">Last Name: </label>
	<input type="text" id="lastName" name="lastName"></input>
	<p></p>
	<label for="product">Product: </label>
	<input type="text" id="product" name="product"></input>
	<br>
	<br>
	<input type="submit" value="Submit"></input>
	</form>
@endsection