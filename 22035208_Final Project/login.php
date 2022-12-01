<?php

if (isset($_POST["submit"])) {
    $email = $_POST["username"];
    $password = $_POST["password"];

    header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Boulala</title>
    <link rel="stylesheet" href="css/signup_login.css">
</head>

<body>
    <div class="container">
        <img src="img/boulala-logo.png" class="logo">
        <form action="include/login.inc.php" method="post">
            <input type="text" required autocomplete="off" name="username" placeholder="Username">
            <input type="password" required autocomplete="off" name="password" placeholder="Password">

            <button type="submit" name="submit" class="submit-button">Login</button>
        </form>

        <div class="link">
            <a href="#">Forgotten password?</a><br><br>
            <a href="signup.php">Don't have an account? Register now</a>

            <div style="color: red;">
                <?php
                    if (isset($_GET["message"])) {
                        echo "<script>alert('Please login first')</script>";
                    }
                ?>
            </div>
        </div> 
    </div>
</body>

</html>