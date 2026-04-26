<?php
include("header.php");
include("../connect.php");
$sid=$_GET['sid'];



    
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

<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>School Details - Grade Wise</h2>
                           </div>
                        </div>
                     </div>
					 
					 <ul style="list-style-type: none;overflow: hidden;color:darkblue;font-weight:bold;margin:5px;margin-bottom:20px;padding:5px;">
					
					 <li style="border:1px solid gray;font-size:1.2em;padding:10px;float:left;">Total Enrolments : <?php $q="select count(*) as total from general_profile where school_id=$sid";
					 $res=mysqli_query($cn,$q);$data=mysqli_fetch_assoc($res);echo $data['total'];?></li>
					 <li style="border:1px solid gray;font-size:1.2em;padding:10px;float:left;">Total Boys :<?php $q="select count(*) as total from general_profile where gender='Male' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></li>
									<li style="border:1px solid gray;font-size:1.2em;padding:10px;float:left;">Total Girls : <?php $q="select count(*) as total from general_profile where gender='Female' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></li>
									<li style="border:1px solid gray;font-size:1.2em;padding:10px;float:left;">Total Transgender : <?php $q="select count(*) as total from general_profile where gender='Transgender' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></li>
									<li style="border:1px solid gray;font-size:1.2em;padding:10px;float:left;color:red;">Data Last Updated at: <?php $q="select login_time from school_login where school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['login_time'];?></li>
									
									</ul>
									<div class="row">
					 <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Classes/ Grades</th>
                                             <th>Boys</th>
                                             <th>Girls</th>
                                             <th>Transgender</th>
                                             <th>Total</th>
                                             <th colspan="2" style="text-align:center">Action</th>
                                             
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>I</td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Male' AND enrolmnt_details.class_of_last_year='Anganwadi' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Female' AND enrolmnt_details.class_of_last_year='Anganwadi' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Transgender' AND enrolmnt_details.class_of_last_year='Anganwadi' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td style="color:red;font-weight:bold;"><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where enrolmnt_details.class_of_last_year='Anganwadi' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td style="text-align:center;"><a href="class-wise.php?class=<?php print "1";?>&sid=<?php print $sid;?>"><button name="vm1" class="btn btn-info" style="font-size:1.2em;">View/ Manage</button></a></td>
											 
                                            
                                          </tr>
										  <tr>
                                             <td>II</td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Male' AND enrolmnt_details.class_of_last_year='1' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Female' AND enrolmnt_details.class_of_last_year='1' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Transgender' AND enrolmnt_details.class_of_last_year='1' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td style="color:red;font-weight:bold;"><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where enrolmnt_details.class_of_last_year='1' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td style="text-align:center"><a href="class-wise.php?class=<?php print "2";?>&sid=<?php print $sid;?>"><button name="vm2" class="btn btn-info" style="font-size:1.2em;">View/ Manage</button></a></td>
											 
                                             
                                          </tr>
										  <tr>
                                             <td>III</td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Male' AND enrolmnt_details.class_of_last_year='2' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Female' AND enrolmnt_details.class_of_last_year='2' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Transgender' AND enrolmnt_details.class_of_last_year='2'AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td style="color:red;font-weight:bold;"><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where enrolmnt_details.class_of_last_year='2' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td style="text-align:center"><a href="class-wise.php?class=<?php print "3";?>&sid=<?php print $sid;?>"><button name="vm3" class="btn btn-info" style="font-size:1.2em;">View/ Manage</button></a></td>
											 
                                             
                                          </tr>
										  <tr>
                                             <td>IV</td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Male' AND enrolmnt_details.class_of_last_year='3'AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Female' AND enrolmnt_details.class_of_last_year='3'AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Transgender' AND enrolmnt_details.class_of_last_year='3' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td style="color:red;font-weight:bold;"><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where enrolmnt_details.class_of_last_year='3' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             
                                             <td style="text-align:center"><a href="class-wise.php?class=<?php print "4";?>&sid=<?php print $sid;?>"><button name="vm4" class="btn btn-info" style="font-size:1.2em;">View/ Manage</button></a></td>
											 
                                             
                                          </tr>
										  <tr>
                                             <td>V</td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Male' AND enrolmnt_details.class_of_last_year='4' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Female' AND enrolmnt_details.class_of_last_year='4' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Transgender' AND enrolmnt_details.class_of_last_year='4' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td style="color:red;font-weight:bold;"><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where enrolmnt_details.class_of_last_year='4' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             
                                             <td style="text-align:center"><a href="class-wise.php?class=<?php print "5";?>&sid=<?php print $sid;?>"><button name="vm5" class="btn btn-info" style="font-size:1.2em;">View/ Manage</button></a></td>
											 
                                             
                                          </tr>
										  <tr>
                                             <td>VI</td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Male' AND enrolmnt_details.class_of_last_year='5'AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Female' AND enrolmnt_details.class_of_last_year='5' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Transgender' AND enrolmnt_details.class_of_last_year='5' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td style="color:red;font-weight:bold;"><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where enrolmnt_details.class_of_last_year='5' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             
                                             <td style="text-align:center"><a href="class-wise.php?class=<?php print "6";?>&sid=<?php print $sid;?>"><button name="vm6" class="btn btn-info" style="font-size:1.2em;">View/ Manage</button></a></td>
											 
                                             
                                          </tr>
										  <tr>
                                             <td>VII</td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Male' AND enrolmnt_details.class_of_last_year='6'AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Female' AND enrolmnt_details.class_of_last_year='6' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Transgender' AND enrolmnt_details.class_of_last_year='6' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                           <td style="color:red;font-weight:bold;"><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where enrolmnt_details.class_of_last_year='6' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             
                                             <td style="text-align:center"><a href="class-wise.php?class=<?php print "7";?>&sid=<?php print $sid;?>"><button name="vm7" class="btn btn-info" style="font-size:1.2em;">View/ Manage</button></a></td>
											 
                                             
                                          </tr>
										  <tr>
                                             <td>VIII</td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Male' AND enrolmnt_details.class_of_last_year='7' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Female' AND enrolmnt_details.class_of_last_year='7'AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             <td><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where general_profile.gender='Transgender' AND enrolmnt_details.class_of_last_year='7'AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                    <td style="color:red;font-weight:bold;"><?php $q="select count(*) as total from general_profile INNER JOIN enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id where enrolmnt_details.class_of_last_year='7' AND school_id=$sid";
									$res=mysqli_query($cn,$q);
									$data=mysqli_fetch_assoc($res);echo $data['total'];?></td>
                                             
                                             <td style="text-align:center"><a href="class-wise.php?class=<?php print "8";?>&sid=<?php print $sid;?>"><button name="vm8" class="btn btn-info" style="font-size:1.2em;">View/ Manage</button></a></td>
											 
                                             
                                          </tr>
                                       </tbody>
                                    </table>
									<a href="manage_students.php"><button type="button" style="font-size:2em;" class="btn btn-secondary">Back</button></a>
						
                                 </div>
                              </div>
                           </div>
                        </div>
                     
					 </div>
</div>



<?php include("footer.php");?>