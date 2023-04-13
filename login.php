<?php
require_once("./lib/config.php");
 if(isset($_SESSION["username"])){
    header("location:index.php");
}
if(isset($_POST["user"])){
    $user=$_POST["user"];
    $pass=$_POST["pass"];
   $query="select * from users where username=\"".$user."\" AND pass=\"".$pass."\"" ;
   $result=$conn->query($query);
   if ( isset($result->num_rows) && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION["username"]=$row["username"];
            header("location:index.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user">
        <input type="password" name="pass">
        <input type="submit" value="Submit">
    </form>
</body>
</html>