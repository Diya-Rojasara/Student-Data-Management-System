<?php
include ("../connect.php");

$sid=$_GET['sid'];

$q="delete from school_login where school_id=$sid";
mysqli_query($cn,$q);
$q1="select s_gp_id from general_profile where school_id=$sid";
$res=mysqli_query($cn,$q1);
while($row=mysqli_fetch_array($res))
{
	$s_gp_id=$row[0];
	mysqli_query($cn,"delete from contact_details where s_gp_id=$s_gp_id");
	mysqli_query($cn,"delete from additional_details where s_gp_id=$s_gp_id");
	mysqli_query($cn,"delete from enrolmnt_details where s_gp_id=$s_gp_id");
	mysqli_query($cn,"delete from facility where s_gp_id=$s_gp_id");
	

}
$q1="delete from general_profile where school_id=$sid";

mysqli_query($cn,$q1);
header("location:view_users.php");
?>
