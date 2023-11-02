<!DOCTYPE html>
<html>
<body>
<?php
$nameErr = $passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is a required field";
    } else {
        $username = test_input($_POST["name"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Please enter a valid password";
    } else {
        $password = test_input($_POST["password"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <span class="error"><?php echo $nameErr; ?></span>
    <br><br>
    Password: <input type="password" name="password">
    <span class="error"><?php echo $passwordErr; ?></span>
    <br><br>
    <input type="submit" name="login" value="Login">
    <input type="reset" name="clear" value="Clear">
</form>
<br><br>
<?php
echo "If you are a new user, create an account <a href='createusername.php'>from here</a>.";
?>
</body>
</html>
