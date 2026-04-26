<?php
include("../connect.php");
$uid=$_POST['uid'];
$pass=$_POST['pass'];
$uid1=$_POST['uid1'];
$q="update dpeo_login set user_id='$uid',password='$pass' where user_id='$uid1'";

mysqli_query($cn,$q);
header("location:view_dpeo.php");
?>