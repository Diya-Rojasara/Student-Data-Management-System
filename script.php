<?php
include("connect.php");
	
$sid=$_GET['sid1']; 
$logintime ="UPDATE school_login SET login_time = now() where school_id=$sid";
mysqli_query($cn, $logintime);

	  
?>