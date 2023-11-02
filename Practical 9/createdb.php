<?php
include("connectdb.php");
$result=mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS emarket");
echo"<br>";
if(!$result){
	die("invalid query".mysqli_error());
	
}
else{
	echo"Database created";
}
mysqli_close($conn);
?>