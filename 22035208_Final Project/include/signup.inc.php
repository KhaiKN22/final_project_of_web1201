<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $phone = $_POST["phone"];

    require_once 'functions.php';

    if (passwordMatch($password, $confirmPassword) !== false) {
        header("location: ../signup.php?error=pwdnotmatch");
        exit();
    }
    
    else {
        header("location: ../signup.php?error=none");
        exit();
    }

}
