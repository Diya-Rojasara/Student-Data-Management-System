<?php include("header.php");
include("../connect.php");
$uid=$_GET['uid'];

?>

<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Edit DPEO User</h2>
                           </div>
                        </div>
                     </div>

<div class="col-md-12">
                  <div class="contact_section layout_padding">
         
            
               
            
         
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
				  
                     <div class="mail_section_1">
					 <form action="dpeo_update_code.php" method="post">
<?php

$q1="select * from dpeo_login where user_id='$uid'";
$res=mysqli_query($cn,$q1);
if($row=mysqli_fetch_array($res))
{


?>
<input type="hidden" name="uid1" value="<?php print $uid;?>">
					 <label for="sname" style="font-size:2em">Enter User ID:</label>
                        <input type="text" class="mail_text" placeholder="DPEO ID" name="uid" value="<?php print $row['user_id'];?>"><br>
						<label for="stype" style="font-size:2em">Enter Password:</label>
						<input type="password" class="mail_text" placeholder="DPEO Password" name="pass" value="<?php print $row['password'];?>"><br>
<?php
}
?>					
                        <br>
					 <br>
					 <br>
					 <br>
						
                        
                        <div><center><input type="submit" value="submit" style="font-size:2em;" class="btn btn-warning">
						<a href="view_dpeo.php"><button type="button" class="btn btn-secondary" style="font-size:2em;">Back</button></a><br>
					 
						</center>
						
						</div>
						</form>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
					</div>
					</div>
                     
<?php include("footer.php");?>					
