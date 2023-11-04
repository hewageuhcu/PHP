<?php
include("conn.php");
mysqli_select_db($conn,"jobseeker");

$sql1 = "CREATE TABLE personal_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    name VARCHAR(100),
    gender VARCHAR(10),
    dateofbirth DATE
)";

$result1 = mysqli_query($conn, $sql1);
echo "<br>";

if (!$result1) {
    die("Invalid query " . mysqli_error($conn));
} else {
    echo "TABLE SUCCESSFULLY CREATED.";
}

mysqli_close($conn);
?>
