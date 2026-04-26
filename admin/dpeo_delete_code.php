<?php
include("../connect.php");

$uid=$_GET['uid'];
$q="delete from dpeo_login where user_id='$uid'";

mysqli_query($cn,$q);
header("location:view_dpeo.php");
?>