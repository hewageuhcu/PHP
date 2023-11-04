<?php
include("conn.php");
mysqli_select_db($conn,"jobseeker");
$sql="DROP TABLE personal_info";
$result=mysqli_query($conn,$sql);
if(!$result){
	die("invalid query".mysqli_error($conn));
}else{
	echo("<BR>TABLE SUCCESSFULLY DROPPED.");
}
mysqli_close($conn);
?>