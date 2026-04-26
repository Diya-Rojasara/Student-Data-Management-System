
<?php include("connect.php");
   session_start();
   
$sid=$_GET['sid'];
   $sql = "UPDATE school_login SET login_time = NOW() WHERE school_id = $sid";   
	mysqli_query($cn,$sql);
		
  
	   session_unset();
       session_destroy();
       header('location: demo.php');
	  
   
?>