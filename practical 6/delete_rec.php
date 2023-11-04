<?php
include("conn.php");
mysqli_select_db($conn,"jobseeker");
$sql="DELETE FROM personal_info";
$result=mysqli_query($conn,$sql);
if(!$result){
die("invalid query".mysqli_error($conn));
}
else{
	echo("<br>RECORDS DELETED SUCCESSFULLY");
}
	mysqli_close($conn);
	?>