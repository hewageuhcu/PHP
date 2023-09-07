<?php
setcookie('username', 'chathurya', time() + 60 * 60 * 24 * 7);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Checking accesses</title>
</head>

<body>
    <?php
    echo $_COOKIE["username"] . "<br>";
    ?>

    <?php
    if (isset($_COOKIE["username"]) && $_COOKIE["username"] === "chathurya") {
        echo "Welcome " . $_COOKIE["username"] . "<br>";
    } else {
        echo "Sorry... you are not recognized." . "<br>";
    }
    ?>
</body>

</html>
