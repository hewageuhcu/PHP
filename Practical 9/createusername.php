<!DOCTYPE html>
<html>
<body>
<?php
$nameErr = $passwordErr = $option = "";
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

    if (isset($_POST["Role"])) {
        $option = test_input($_POST["Role"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name">
    <span class="error"><?php echo $nameErr; ?></span>
    <br><br>
    Password: <input type="password" name="password">
    <span class="error"><?php echo $passwordErr; ?></span>
    <br><br>
    Role:<select name="Role">
        <option value='1' <?php if ($option == '1') {
            echo "selected";
        } ?>>seller
        </option>
        <option value='2' <?php if ($option == '2') {
            echo "selected";
        } ?>>buyer
        </option>
    </select>
	<br><br>
    <input type="submit" name="submit_query" value="Submit Query">
    <input type="submit" name="clear" value="Clear">
	<br><br>
	<?php
	echo "<a href='additem.php'>If your selected role is seller, please get in here to add items</a><br><br>";
	
	echo "<a href='viewitems.php'>If your selected role is buyer, please click here to buy items</a>";
	?>
</form>
</body>
</html>
