<?php
include ("conn.php");
$result=mysqli_query ($conn,"CREATE DATABASE IF NOT EXISTS jobseeker");
echo "<br>";
if(!$result){
	die("invalid query.mysqli_error(conn.php)");
}else{
	echo("DATABASE CREATED SUCCESSFULLY");
}
mysqli_close($conn);
?>