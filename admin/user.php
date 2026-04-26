<?php include("../connect.php");

?>
<style>
.container {
  width: 100%;
  
}

table {
  width: 100%;
  border-collapse: collapse;
}

th,td {
  border: 1px solid black;
  color:black;
  font-size:1.2em;
}


.hack1 {
  display: table;
  table-layout: fixed;
  width: 100%;
}

.hack2 {
  display: table-cell;
  overflow-x: auto;
  width: 100%;
}


</style>

                 					<div class="container">

  <div class="hack1">
    <div class="hack2">
                                    <table class="table table-bordered">
									<?php
					                   $get=$_GET["q"];
					                    if($get=="SCHOOL")
					                    {
						            ?>
                                       <thead>
					<tr>
					<th>School Name</th>
					<th>School Type</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Classes </th>
					<th>School Code</th>
					<th>Password</th>
					</tr>
					</thead>
					<?php
					
					$q="select * from school_login";
					$res=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($res))
					{
					?>	
                                       
					<tbody>
					<tr>
					<td><?php $snm=$row['school_name']; 
					print $snm;?></td>
					<td><?php print $row['school_type']; ?></td>
					<td><?php print $row['start_date']; ?></td>
					<td><?php print $row['end_date']; ?></td>
					<td><?php print $row['classes']; ?></td>
					<td><?php print $row['school_code']; ?></td>
					<td><?php print $row['password']; ?></td>
					<td><a href="user_update.php?snm=<?php print $snm;?>"><input type="button" class="btn btn-danger" value="Update"></a></td>
					
					<td><a href="user_delete_code.php?snm=<?php print $snm;?>"><input type="button" class="btn btn-danger" value="Delete"></a></td>
						
					
					
					
					
					</tr>
					</tbody>
					<?php
					}
					}
					else
					{
					?>
					<thead>
					<tr>
					<th>User Id</th>
					<th>Password</th>
					
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
					<td><?php print $row['user_id']; ?></td>
					<td><?php print $row['password']; ?></td>
					
						
					
					
					
					
					</tr>
					</tbody>
					
					<?php
					}
					
					}
					?>
                                    </table>
                                 
								</div>
</div>
</div>								
                              
                           

    