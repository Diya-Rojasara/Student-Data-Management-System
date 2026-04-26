<?php
include("../connect.php");
$sid1=$_GET['sid'];
$s_gp_id=$_GET['s_gp_id'];
$class=$_GET['class'];
$q="delete from general_profile where s_gp_id=$s_gp_id";
mysqli_query($cn,$q);
$q1="delete from contact_details where s_gp_id=$s_gp_id";
mysqli_query($cn,$q1);
$q2="delete from additional_details where s_gp_id=$s_gp_id";
mysqli_query($cn,$q2);
$q3="delete from enrolmnt_details where s_gp_id=$s_gp_id";
mysqli_query($cn,$q3);
$q4="delete from facility where s_gp_id=$s_gp_id";
mysqli_query($cn,$q4);
header('location:class-wise.php?class='.$class.'&sid='.$sid1);





?>