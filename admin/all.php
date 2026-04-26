<?php include("../connect.php");
include ("header.php");
?>
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>List of All Students</h2>
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
					<th>Class/ Grade</th>
					<th>Rollno</th>
					<th>Student's Code</th>
					<th>Student's Name</th>
					<th>Gender</th>
					
					
					</tr>
					</thead>
					<?php
	
					
					$q="select general_profile.s_gp_id,student_name,gender,sid,
					enrolmnt_details.class_of_last_year,
					enrolmnt_details.rollno,school_login.school_name
					from general_profile 
					INNER JOIN
					enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id
					INNER JOIN
					school_login ON general_profile.school_id=school_login.school_id
					 where class_of_last_year>=1 ORDER BY enrolmnt_details.class_of_last_year ASC";
					$q1="select general_profile.s_gp_id,student_name,gender,sid,
					enrolmnt_details.class_of_last_year,
					enrolmnt_details.rollno,school_login.school_name
					from general_profile 
					INNER JOIN
					enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id 
					INNER JOIN
					school_login ON general_profile.school_id=school_login.school_id
					where class_of_last_year='Anganwadi'";
					$res1=mysqli_query($cn,$q1);
					
					
					$res=mysqli_query($cn,$q);
		?>
				<tbody>
				<?php
				while($row=mysqli_fetch_array($res1))
				{
?>
<tr>
												
										<td><?php print $row['school_name'];?></td>
													<td><?php print "1";?></td>
												
												
											 <td><?php print $row['rollno'];?></td>
                                            
                                             <td><?php print $row['sid'];?></td>
                                             <td><?php print $row['student_name'];?></td>
											 
                                             <td><?php print $row['gender'];?></td>
                                             
                                             </tr>
<?php
}

				
				while($row=mysqli_fetch_array($res))
				{
?>
<tr>
											<td><?php print $row['school_name'];?></td>
										
												<?php 
												
												if($row['class_of_last_year']=="1")
												{
												?>
													<td><?php print "2";?></td>
												
												<?php
												}
												
												else if($row['class_of_last_year']=="2")
												{
												?>
													<td><?php print "3";?></td>
												
												<?php
												}
												else if($row['class_of_last_year']=="3")
												{
												?>
													<td><?php print "4";?></td>
												
												<?php
												}
												else if($row['class_of_last_year']=="4")
												{
												?>
													<td><?php print "5";?></td>
												
												<?php
												}
												
												else if($row['class_of_last_year']=="5")
												{
												?>
													<td><?php print "6";?></td>
												
												<?php
												}
												else if($row['class_of_last_year']=="6")
												{
												?>
													<td><?php print "7";?></td>
												
												<?php
												}
												else if($row['class_of_last_year']=="7")
												{
												?>
													<td><?php print "8";?></td>
												
												<?php
												}
												?>
											 <td><?php print $row['rollno'];?></td>
                                            
                                             <td><?php print $row['sid'];?></td>
                                             <td><?php print $row['student_name'];?></td>
											 
                                             <td><?php print $row['gender'];?></td>
                                             
                                             </tr>
<?php
}
?>
                                       
					</tbody>
					
					</table>
<a href="index.php"><button class="btn btn-secondary btn-sm mt89" tabindex="0" style="font-size:1.2em"> Back</button></a>

                                 
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