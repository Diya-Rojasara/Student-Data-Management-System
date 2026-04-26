<?php include("dheader.php");
include("connect.php");

$duid=$_SESSION["dname"];
$str=strval($duid);

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
					<th>View Students</th>
		
					</tr>
					</thead>
					<tbody>
					<?php
					
					$q="select * from school_login where school_code LIKE '$str%'";
					$res=mysqli_query($cn,$q);
					if($row=mysqli_fetch_array($res))
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
					<td><a href="school_wise.php?sid=<?php print $sid;?>"><button class="btn btn-primary" style="font-size:1.2em">View</button></a></td>
					
						
					
					
					
					
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


				
					
					

					 	
<?php include("dfooter.php");?>