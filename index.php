<style>
    body{
        background-color: black;
        color: white;
    }
</style>

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
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="log_in" value="login"><br>
    </form>
</body>
</html>

<?php
    if (isset($_POST["log_in"])) {
        

        if (!empty($_POST["username"]) && !empty($_POST["password"])) {

            # IN REAL WORLD YOU MUST USE, USER INPUT FILTER.
            $_SESSION["usrname"] = $_POST["username"];
            $_SESSION["pwd"] = $_POST["password"];

            echo $_SESSION["usrname"] . "<br>";
            echo $_SESSION["pwd"];
        }
        else{
            echo "Missing username/password <br>";
        }
    }
?>




