<?php
include("../connect.php");

$cp=$_POST['cp'];
$np=$_POST['np'];
$cpp=$_POST['cpp'];
$q1="select password from admin_login";
$res=mysqli_query($cn,$q1);
if($row=mysqli_fetch_array($res))
{
	if($row['password']==$cp)
	{
		$q="update admin_login set password='$np'";
      mysqli_query($cn,$q);
	  echo "<script>alert('Password Updated Successfully');
		window.location='pass.php';
		</script>";
		
      }
	else
	{
		echo "<script>alert('Incorrect current password');
		window.location='pass.php';
		</script>";
		
	}
}	



?>