<?php

function passwordMatch($password, $confirmPassword) {
    $result;
    if ($password !== $confirmPassword) {
        $result = true;
    }
    
    else {
        $result = false;
    }

    return $result;
}

function loginUser($username, $password) {
    session_start();
    $_SESSION["username"] = $username;
    header("location: ../index.php");
    exit();
}