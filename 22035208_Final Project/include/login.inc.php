<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'functions.php';

    loginUser($username, $password);
}

else {
    header("location: ../login.php");
    exit();
}