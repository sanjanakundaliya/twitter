<?php
require_once("./lib/config.php");
if(!isset($_SESSION["username"])){
    header("location:login.php");
}else{
    $username=$_SESSION["username"];
}
 if(isset($_POST["deactivate"])){
    $query="UPDATE users SET isaccountdisabled = 'false' WHERE username = \"".$username."\"; ";
    $conn->query($query);
    header("location:logout.php");
 }
 if(isset($_POST["delete"])){
    $query="DELETE FROM  users WHERE username = \"".$username."\"; ";
    $conn->query($query);
    header("location:logout.php");
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
    <form action="" method="post">
        <input type="submit" value="deactivate" name="deactivate">
    </form>
    <form action="" method="post">
        <input type="submit" value="delete" name="delete">
    </form>
</body>
</html>