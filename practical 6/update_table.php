<?php
include("conn.php");
mysqli_select_db($conn,"jobseeker");
$sql="ALTER TABLE personal_info ADD age int";
$result=mysqli_query($conn,$sql);
if(!$result){
	die("invalid query".mysqli_error($conn));
}else{
	echo"<BR>COLUMN SUCCESSFULLY ADDED";
}
mysqli_close($conn);
?>