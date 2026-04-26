<?php include("../connect.php");
include ("header.php");
?>
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>View Grade Details</h2>
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
					<th>Class/ Grade</th>
					<th>Rollno</th>
					<th>Student's Code</th>
					<th>Student's Name</th>
					<th>Gender</th>
					<th colspan="3">Action</th>
					
					</tr>
					</thead>
					<?php
					$sid=$_GET['sid'];
					$class=$_GET["class"];
					$class1=$class;
					if($class=="1")
					{
						$class="Anganwadi";
					}
					else if($class=="2")
					{
						$class="1";
					}
					else if($class=="3")
					{
						$class="2";
					}
					else if($class=="4")
					{
						$class="3";
					}
					else if($class=="5")
					{
						$class="4";
					}
					else if($class=="6")
					{
						$class="5";
					}
					else if($class=="7")
					{
						$class="6";
					}
					
					else if($class=="8")
					{
						$class="7";
					}
					
					
					$q="select general_profile.s_gp_id,student_name,gender,sid,
					enrolmnt_details.class_of_last_year,
					enrolmnt_details.rollno
					from general_profile 
					INNER JOIN
					enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where enrolmnt_details.class_of_last_year='$class' AND school_id=$sid";
					
					$res=mysqli_query($cn,$q);
		?>
				<tbody>
				<?php
				while($row=mysqli_fetch_array($res))
				{
?>
<tr>
												<?php $s_gp_id=$row['s_gp_id'];?>
											 <td><?php print $class1;?></td>
											 <td><?php print $row['rollno'];?></td>
                                            
                                             <td><?php print $row['sid'];?></td>
                                             <td><?php print $row['student_name'];?></td>
											 
                                             <td><?php print $row['gender'];?></td>
                                             <td><a href="view_students.php?s_gp_id=<?php print $s_gp_id;?>&class=<?php print $class1;?>"><button class="btn btn-primary" style="font-size:1.2em;">View</button></a></td>
                                             <td><a href="delete_students.php?s_gp_id=<?php print $s_gp_id;?>&class=<?php print $class1;?>&sid=<?php print $sid;?>"><button class="btn btn-danger" style="font-size:1.2em" onclick="return confirm('Are you sure want to delete?')">Delete</button></a></td>
											 
                                             </tr>
<?php
}
?>
                                       
					</tbody>
					
					</table>
<a href="school_wise.php?sid=<?php print $sid;?>"><button class="btn btn-secondary btn-sm mt89" tabindex="0" style="font-size:1.2em"> Back to School Dashboard</button></a>
		 
		   
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