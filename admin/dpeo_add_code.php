<?php include("../connect.php");
$uid=$_POST['uid'];
$pass=$_POST['pass'];

$q="insert into dpeo_login(user_id,password) values('$uid','$pass')";

mysqli_query($cn,$q);
header("location:view_dpeo.php");

?>
