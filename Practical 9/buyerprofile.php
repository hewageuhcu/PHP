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
<a href='viewitems.php'>View Item</a>

<br><br>


<table>
<tr>
<th>Seller ID</th>
<th>Item Code</th>

</tr>
<tr>
<td>2</td>
<td>002</td>


</tr>

<tr>
<td>4</td>

<td>004</td>


</tr>
</table>


</form>

<br><br>

</html>