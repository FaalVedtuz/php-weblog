<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION["user"])){
    $_SESSION["user"] = "Guest";
}
function checkUser(){
    if($_SESSION["user"]!== "Guest"){
        return "Logout";
    }else{
        return "Login";
    }
}
function sessionLink(){
    $checkSession = checkUser();
    if($checkSession === "Logout"){
        logout();
        return "index.php";
    }else{
        return "index.php";
    }
}
function logout(){
    session_destroy();
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
        <a href="<?php echo sessionLink(); ?>"><?php echo checkUser(); ?></a>
        <a href="register.php">Register</a>
        <strong><?php echo $_SESSION["user"] ?></strong>
    </nav>