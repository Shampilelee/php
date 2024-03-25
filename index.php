
<style>
    body{
        background-color: black;
        color: white;
    }
</style>


<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome to DhopeCorn👨‍💻</h2>
        username:<br>
        <input type="text" name="user_name"><br>
        password:<br>
        <input type="password" name="user_pwd"><br>
        <input type="submit" name="submit" value="login"><br>
        
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username = filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "user_pwd", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username)) {
            echo "Please Enter Your Username";
        }
        elseif (empty($password)){
            echo "Please Enter Your Password";
        }
        else {

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql_code = "INSERT INTO users (username, password)
                         VALUE ('$username', '$hashed_password') ";

            # ADD try-catch Here
            try {
                mysqli_query($conn, $sql_code);
                echo "You Are Now Registered!";
            } catch (mysqli_sql_exception) {
                echo "You have a problem signing up";
            }
            
        }
    }







 
    # CLOSE CONNECTION WITH MySQL
    mysqli_close($conn);
?>
