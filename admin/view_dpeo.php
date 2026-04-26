<?php include("header.php");
include("../connect.php");
 

?>
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>View DPEO User</h2>
                           </div>
                        </div>
                     </div>
               

<br>  

<style>
th,td{
	font-size:1.2em;
	border:1px solid black;
	padding:10px;
	margin:20px;
}
</style>
</div>

            <div style="overflow-x:auto">  
<div style="margin-bottom:20px;"><a href="dpeo_add.php"><button name="adduser" style="background-color:orange;font-size:1.2em;border:1px solid black;">Add DPEO User</button></a></div>
    			
          <table style="font-size:1.2em;border-collapse:collapse">
		  <thead>
					<tr>
					<th>User Id</th>
					<th>Password</th>
					<th colspan="2">Action</th>
					</tr>
					</thead>
					<?php
					
					$q="select * from dpeo_login";
					$res=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($res))
					{
					?>
					<tbody>
					<tr>
					<td><?php $uid=$row['user_id'];print $uid; ?></td>
					<td><?php $pass=$row['password'];print $pass;?></td>
					
					<td><a href="dpeo_update.php?uid=<?php print $uid;?>"><button class="btn btn-success" style="font-size:1.2em">Edit</button></a></td>
					
					<td><a href="dpeo_delete_code.php?uid=<?php print $uid;?>"><button class="btn btn-danger" style="font-size:1.2em" onclick="return confirm('Are you sure want to delete?')">Delete</button></a></td>
						
					
					
					
					
					</tr>
					</tbody>
					
					<?php
					}
					?>
					</table>
                                 
								</div>
						</div>		

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


				
					
					

					 	
<?php include("footer.php");?>