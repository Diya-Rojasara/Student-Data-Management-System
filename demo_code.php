<?php

include("connect.php");
$uid=$_POST['uid'];
$pass=$_POST['pass'];
$d1=$_POST['d1'];
$q="select * from admin_login";
$res=mysqli_query($cn,$q);
if($row=mysqli_fetch_array($res))
{
	$auid=$row['user_id'];
	$apass=$row['password'];
}

$q1="select * from school_login";
$res1=mysqli_query($cn,$q1);
$suid=array();
$spass=array();
$sid=array();
$i=0;
while($row=mysqli_fetch_array($res1))
{
	
	$sid[$i]=$row['school_id'];
	
	$suid[$i]=$row['school_code'];
	$spass[$i]=$row['password'];

	$i=$i+1;
}
$q2="select * from dpeo_login";
$res2=mysqli_query($cn,$q2);
$dpass=array();
$duid=array();
$i=0;
while($row=mysqli_fetch_array($res2))
{
	$duid[$i]=$row['user_id'];
	$dpass[$i]=$row['password'];
	$i=$i+1;
}


if($d1=="Admin")
{
	if($uid==$auid && $pass==$apass)
	{
		session_start();
		$_SESSION["aname"]=$uid;
		$aname=$_SESSION["aname"];
		header('location:admin/index.php');
	}
	
	else
	{
		?>
		
		<script language="javascript">
		alert("Invalid UserId or Password");
		 window.location = 'demo.php';
		</script>
		<?php
	}
}
else if($d1=="School")
{
	for($i=0;$i<count($suid);$i++)
	{
	if($uid==$suid[$i] && $pass==$spass[$i])
	{
		session_start();
		$_SESSION["sid"] = $sid[$i];
	
		$_SESSION["sname"]=$uid;
		header('location:index.php?sid='.$sid[$i]);
	?>
		<?php
	}
	else
	{
		?>
		<script language="javascript">
		alert("Invalid UserId or Password");
		 window.location = 'demo.php';
		</script>
		<?php
	}
	}
} 
else if($d1=="DPEO")
{
	
		for($i=0;$i<count($duid);$i++)
		{
			if($uid==$duid[$i] && $pass==$dpass[$i])
			{
			session_start();
			$_SESSION["dname"]=$uid;
		
			header('location:dindex.php');
			}
	
	else
	{
		?>
		<script language="javascript">
		alert("Invalid UserId or Password");
		 window.location = 'demo.php';
		</script>
		<?php
	}
		}
}
?>