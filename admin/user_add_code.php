<?php include("../connect.php");
$sname=$_POST['sname'];
$stype=$_POST['stype'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$classes=$_POST['classes'];
$scode=$_POST['scode'];
$pass=$_POST['password'];
$q="insert into school_login(school_name,school_type,start_date,end_date,classes,school_code,password) values('$sname','$stype','$sdate','$edate','$classes','$scode','$pass')";

mysqli_query($cn,$q);
header("location:view_users.php");

?>
