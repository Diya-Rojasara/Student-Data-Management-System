<?php
include("../connect.php");
$sid=$_POST['sid'];
$snm=$_POST['sname'];
$stype=$_POST['stype'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$classes=$_POST['classes'];
$scode=$_POST['scode'];
$pass=$_POST['password'];


$q="update school_login set school_name='$snm',school_type='$stype',start_date='$sdate',end_date='$edate',classes='$classes',school_code=$scode,password='$pass' where school_id='$sid'";


mysqli_query($cn,$q);
header("location:view_users.php");
?>