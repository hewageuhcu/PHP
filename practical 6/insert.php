<?php
include ("conn.php");
mysqli_select_db($conn,"jobseeker");
$sql1= "INSERT INTO personal_info(id,title,name,gender,dateofbirth)
VALUES(0020,'Ms','K.Sedara','F','1980-11-02'),
(0021,'Mr','S.Alwis','M','1969-03-03'),
(0022,'Prof','A.Pieris','F','1982-04-14')";
$result1=mysqli_query($conn,$sql1);
if(!$result1){
	die("invalid query".mysqli_error($conn));
}else{
	echo"<br>";
	echo"DATA ADDED SUCCESSFULLY";
}
mysqli_close($conn);
?>