<!DOCTYPE html>
<html>
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
<a href='viewitem.php'>View Item</a>

<br><br>
<a href='sellerprofile.php'>Profile</a>

<br><br>
Item Code:<input type="text" name="item code">
<br><br>
Item Name:<input type="text" name="item name">
<br><br>
Price:<input type="number" name="price">

<br><br>
<input type="submit" name="submit query" value="Submit Query">
</form>

<br><br>

</html>
