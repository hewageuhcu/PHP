<?php
include ("conn.php");
mysqli_select_db($conn,"jobseeker");
$sql="UPDATE personal_info SET title='Mrs.' WHERE id='0022'";
$result=mysqli_query($conn,$sql);
if(!$result){
	die("invalid query".mysqli_error($conn));
}else{
	echo"<br>RECORD SUCCESSFULLY UPDATED";
}
mysqli_close($conn);
?>
