<?php include("sheader.php");
include("connect.php");
$class=$_GET['class'];
 

?>
<style>
td,th{
	font-size:1.2em;
	color:black;
	
}

</style>
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>View Students</h2>
                           </div>
                        </div>
                     </div>
               

<br>  


</div>
<style>
th,td {
  padding: 5px;
}

</style>

                 					<div class="container">

  <div>
    <div>
	                                
<table class="table table-bordered">
					<?php 
					$s_gp_id=$_GET['s_gp_id'];
					$q="select school_id,student_name,gender,dob,sid,mother_name,father_name,guardian_name,aadhar_number,
					contact_details.address,contact_details.pincode,contact_details.mobileno,contact_details.alt_mob_no,contact_details.e_mail,
					additional_details.m_tongue,additional_details.social_category,additional_details.minority_group,
					additional_details.bpl,additional_details.aay,additional_details.ews,additional_details.cwsn,
					additional_details.cwsn_type,additional_details.indian_national,additional_details.out_of_school,additional_details.is_main_streamed,
					enrolmnt_details.ad_num,enrolmnt_details.ad_Date,enrolmnt_details.rollno,enrolmnt_details.status_of_prev_year,
					enrolmnt_details.class_of_last_year,enrolmnt_details.appeared_for_exam,enrolmnt_details.result,enrolmnt_details.marks_per,
					enrolmnt_details.attendence,facility.faci_provided,facility.faci_detail,facility.central_scholarship,
					facility.state_scholarship,facility.other,facility.amount,facility.cwsn_facility,
					facility.cwsn_faci_detail,facility.sld,facility.sld_value,facility.asd,facility.extra_curri,facility.ncc_nss,
					facility.talented,facility.t_value,facility.mentor,facility.participated_in_camps,facility.state_level_compe
					from general_profile 
					INNER JOIN
					contact_details ON general_profile.s_gp_id=contact_details.s_gp_id
					INNER JOIN
					additional_details ON general_profile.s_gp_id=additional_details.s_gp_id
					INNER JOIN
					enrolmnt_details ON general_profile.s_gp_id=enrolmnt_details.s_gp_id
					INNER JOIN
					facility ON general_profile.s_gp_id=facility.s_gp_id where general_profile.s_gp_id=$s_gp_id";
					$res=mysqli_query($cn,$q);
		
					
if($row=mysqli_fetch_array($res))
{
$sid=$row['school_id'];
echo "<tr>";
echo "<th>Student's Name(as per School Record)</th>";
echo "<td>" .  $row['student_name'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Gender</th>";
echo "<td>" . $row['gender'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Date of Birth</th>";
echo "<td>" . $row['dob'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Student Code/Id</th>";
echo "<td>" . $row['sid'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Mother's Name</th>";
echo "<td>" . $row['mother_name'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Father's Name</th>";
echo "<td>" . $row['father_name'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Guardian's Name</th>";
echo "<td>" . $row['guardian_name'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Aadhaar Number of Student</th>";
echo "<td>" . $row['aadhar_number'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Address</th>";
echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Pincode</th>";
echo "<td>" . $row['pincode'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Mobile Number (of Student/ Parent/ Guardian)</th>";
echo "<td>" . $row['mobileno'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Alternate Mobile Number (of Student/ Parent/ Guardian)</th>";
echo "<td>" . $row['alt_mob_no'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Contact E-mail id (of Student/ Parent/ Guardian)</th>";
echo "<td>" . $row['e_mail'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Mother Tongue of the Student</th>";
echo "<td>" . $row['m_tongue'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Social Category</th>";
echo "<td>" . $row['social_category'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Minority Group</th>";
echo "<td>" . $row['minority_group'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Whether BPL benficiary?</th>";
echo "<td>" . $row['bpl'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Whether Antyodaya Anna Yojana(AAY) Beneficiary?</th>";
echo "<td>" . $row['aay'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Whether belongs to EWS/ Disadvantaged Group?</th>";
echo "<td>" . $row['ews'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Whether CWSN?</th>";
echo "<td>" . $row['cwsn'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>If Yes, Type of impairment</th>";
echo "<td>" . $row['cwsn_type'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Whether the Student is Indian National?</th>";
echo "<td>" . $row['indian_national'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Is this Student identified as Out-of-School-Child in current or previous years?</th>";
echo "<td>" . $row['out_of_school'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>When the Student is mainstreamed?</th>";
echo "<td>" . $row['is_main_streamed'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Admission Number in School</th>";
echo "<td>" . $row['ad_num'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Admission Date in Present School</th>";
echo "<td>" . $row['ad_Date'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Roll Number</th>";
echo "<td>" . $row['rollno'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Status of student in Previous Academic Year of Schooling(2022-23)</th>";
echo "<td>" . $row['status_of_prev_year'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Class studied in the last academic year</th>";
echo "<td>" . $row['class_of_last_year'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>In the previous class studied – whether appeared for examinations</th>";
echo "<td>" . $row['appeared_for_exam'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Result</th>";
echo "<td>" . $row['result'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>In the previous class studied – Marks obtained (in Percentage)</th>";
echo "<td>" . $row['marks_per'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>No. of days Student attended school (in the previous academic year)</th>";
echo "<td>" . $row['attendence'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Facilities provided to the Student (for the year of filling data)?</th>";
echo "<td>" . $row['faci_detail'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Central Scholarship Received by Student (in Previous Academic year)</th>";
echo "<td>" . $row['central_scholarship'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>State Scholarship Received by Student (in Previous Academic year)</th>";
echo "<td>" . $row['state_scholarship'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Other Scholarship Received by Student (in Previous Academic year)</th>";
echo "<td>" . $row['other'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Total amount</th>";
echo "<td>" . $row['amount'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Facilities provided to Student in case of CWSN (for the year of filling data)?</th>";
echo "<td>" . $row['cwsn_faci_detail'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Whether Student has been screened for Specific Learning Disability (SLD)?</th>";
echo "<td>" . $row['sld_value'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Whether Student has been screened for Autism Spectrum Disorder (ASD)?</th>";
echo "<td>" . $row['asd'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Is the student involved in any extracurricular activity?</th>";
echo "<td>" . $row['extra_curri'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Has the Student been identified as a gifted / talented in following?</th>";
echo "<td>" . $row['t_value'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Whether provided mentors?</th>";
echo "<td>" . $row['mentor'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Whether provided mentors?</th>";
echo "<td>" . $row['mentor'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Whether the student participated in nurturance camps?
</th>";
echo "<td>" . $row['state_level_compe'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Does the Student participate in NCC/ NSS/ Scouts and Guides?
</th>";
echo "<td>" . $row['ncc_nss'] . "</td>";
echo "</tr>";











}

?>
        </table>   
<a href="index.php?sid=<?php print $sid;?>"><button class="btn btn-secondary btn-sm mt89" tabindex="0" style="font-size:1.2em"> Back to School Dashboard</button></a>
<a href="class-wise.php?class=<?php print $class;?>&sid=<?php print $sid;?>"><button class="btn btn-primary btn-sm mt89" tabindex="0" style="font-size:1.2em"> Back to Student Dashboard</button></a>
		
								</div>
								
</div>
</div>								

   

</div>
 


				
					
					

					 	
<?php include("sfooter.php");?>