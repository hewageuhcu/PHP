<!DOCTYPE html>
<html>
    <body>
        <?php
        if ($_POST["name"] == "chathurya") { 
            echo "Welcome" . "</ br>";
        } else {
            echo "Sorry, we can't recognize you." . "</br>";
            echo '<a href="form.php">Login from here</a>' . "</br>"; 
        }
        ?>
    </body>
</html>
