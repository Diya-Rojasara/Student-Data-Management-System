<?php include("header.php");
include("../connect.php");
 

?>
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>View School Users</h2>
                           </div>
                        </div>
                     </div>
               

<br>  


</div>
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
	<div style="margin-bottom:20px;"><a href="user_add.php"><button name="adduser" style="background-color:orange;font-size:1.2em;border:1px solid black;">Add School User</button></a></div>
                                    <table class="table table-bordered">
<thead>
					<tr>
					<th>School Name</th>
					<th>School Type</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Classes </th>
					<th>School Code</th>
					<th>Password</th>
				
					<th colspan='2'>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					
					$q="select * from school_login";
					$res=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($res))
					{
					?>	
					<tr>
					<?php $sid=$row['school_id'];?>
					<td><?php $snm=$row['school_name']; 
					print $snm;?></td>
					<td><?php print $row['school_type']; ?></td>
					<td><?php print $row['start_date']; ?></td>
					<td><?php print $row['end_date']; ?></td>
					<td><?php print $row['classes']; ?></td>
					<td><?php print $row['school_code']; ?></td>
					<td><?php print $row['password']; ?></td>
					
					<td><a href="user_update.php?sid=<?php print $sid;?>"><button class="btn btn-success" style="font-size:1.2em">Edit</button></a></td>
					
					<td><a href="user_delete_code.php?sid=<?php print $sid;?>"><button class="btn btn-danger" style="font-size:1.2em" onclick="return confirm('Are you sure want to delete?')">Delete</button></a></td>
						
					
					
					
					
					</tr>
					</tbody>
					<?php
					}
					?>
					</table>
                                 
								</div>
								
</div>
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