<html>
<body>
<h5>Add Order</h5>
<p>
<h5>Customer ID:</h5>
<form action="addorder" method="post">
{{ csrf_field() }}
<input type="text" name="customerID" value="12"></input>
</p>
<p>
<h5>Product:</h5>
<input type="text" name="product" value="Fishing License"></input>
</p>
<p>
<input type="submit"  value="Submit Query"></input>
</form>
</p>
</body>
</html>