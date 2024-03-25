<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    THIS IS THE HOME PAGE<br>
    <!-- THIS IS A LOGOUT BUTTON -->
    <form action="home.php" method="post">
        <input type="submit" name="log_out" value="logout">
    </form>
</body>
</html>
<?php
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";

    # WE WILL USE THE [isset()] FUNCTION TO SEE WETHER OUR LOGOUT BUTTON IS SET.
    if (isset($_POST["log_out"])) {

        # WE WILL END THE SESSION BEFORE LOGGING OUT.
        # THE CODE BELOW IS USED FOR LOGGING OUT.
        session_destroy();

        # AFTER LOGGING OUT, WE MOVE BACK TO THE INDEX PAGE.
        header("Location: index.php");
    }
?>