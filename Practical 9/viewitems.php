<!DOCTYPE html>
<html>
<head>
<style>
table,th,td{
	border:1px solid black;
}
</style>
</head>
<body>
<?php
function test_input ($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<a href='designform.php'>Sign Out</a>
<br><br>
<a href='buyerprofile.php'>Profile</a>

<br><br>


<table>
<tr>
<th>Item Code</th>
<th>Item Name</th>
<th>Price</th>
<th>Seller</th>
</tr>
<tr>
<td>001</td>
<td>item1</td>
<td>100</td>
<td>2</td>
<td><input type="button" name="buy" value="BUY"></td>
</tr>

<tr>
<td>002</td>

<td>item2</td>
<td>200</td>
<td>4</td>
<td><input type="button" name="buy" value="BUY"></td>
</tr>
</table>


</form>

<br><br>

</html>