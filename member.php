<?php
require_once("./lib/config.php");
 if(!isset($_SESSION["username"])){
    header("location:index.php");
}
$username=$_SESSION["username"];
if(isset($_GET["following"])){
    $following=$_GET["following"];
   $query="insert into follow values(\"".$following."\",\"".$username."\")";
   $conn->query($query)
}

$query="select * from users where username <> \"".$username."\";";
$result=$conn->query($query);
if ( isset($result->num_rows) && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>

       <h1><?php echo $row["username"];?></h1>    
       <form action="" method="GET">
        <input type="hidden" name="following" value="<?php echo $row['username'];?>">
        <input type="submit" value="follow">
       </form>    
   <?php }
}
?>

