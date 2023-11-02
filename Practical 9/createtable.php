<?php
include("connectdb.php");
mysqli_select_db($conn, "emarket");

// Create the Item table
$sql1 = "CREATE TABLE Item (
    itemcode INT AUTO_INCREMENT PRIMARY KEY,
    itemname VARCHAR(100),
    price FLOAT(10, 2),
    seller VARCHAR(100)
)";
$result1 = mysqli_query($conn, $sql1);

echo "<br>";

// Create the User table
$sql2 = "CREATE TABLE User (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(100),
    role VARCHAR(100)
)";
$result2 = mysqli_query($conn, $sql2);

echo "<br>";

$sql3 = "CREATE TABLE Cart (
    buyer_id INT  AUTO_INCREMENT PRIMARY KEY,
    itemcode INT (10),
    seller_id INT(10),
    FOREIGN KEY (itemcode) REFERENCES Item(itemcode),
    FOREIGN KEY (seller_id) REFERENCES User(user_id)
)";
$result3 = mysqli_query($conn, $sql3);

echo "<br>";

if (!$result1 || !$result2 || !$result3) {
    die("Invalid query: " . mysqli_error($conn));
} else {
    echo "TABLES CREATED SUCCESSFULLY";
}

mysqli_close($conn);
?>
