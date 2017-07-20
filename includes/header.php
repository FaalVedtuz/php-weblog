<?php
session_start();

if(!isset($_SESSION["user"])){
    $_SESSION["user"] = "Guest";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Log</title>
</head>

<body>
    <nav>
        <a href="#">Logout</a>
        <a href="register.php">Register</a>
        <strong><?php echo $_SESSION["user"] ?></strong>
    </nav>