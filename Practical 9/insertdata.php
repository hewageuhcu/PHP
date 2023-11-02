<?php
include("connectdb.php");
mysqli_select_db($conn, "emarket");
$sql = "INSERT INTO User (user_id, username, password, role)
        VALUES (00030, 'buyer', 'MD5#buyer123', 'buyer'),
               (00031, 'seller', 'MD5#seller123', 'seller')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("<br>Invalid query: " . mysqli_error($conn));
} else {
    echo "<br>DATA INSERTED SUCCESSFULLY<br>";
}

mysqli_close($conn);
?>
