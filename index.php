<?php
require_once("./lib/config.php");
if(!isset($_SESSION["username"])){
    header("location:login.php");
}else{
    $username=$_SESSION["username"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="."></a>
    <a href="member.php">Members</a>
    <a href="profile.php">profile</a>
</body>
</html>