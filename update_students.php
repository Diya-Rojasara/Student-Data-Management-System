<?php include("sheader.php");
include("connect.php");
$class=$_GET['class'];
?>
<style>
label{
	color:black;
}
</style>
<div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Update Student Data</h1>
               </div>
            </div>
         </div>


         <div class="card-body">
		 <form method="post" action="update_students_code.php">
		 <div class="row">
		 <div class="col-md-12" style="font-size:2em;background-color:whitesmoke">
		 General Profile
		 </div> 
		 
		 <?php 
					$sid=$_GET['sid'];
					$s_gp_id=$_GET['s_gp_id'];
					$q="select student_name,gender,dob,sid,mother_name,father_name,guardian_name,aadhar_number,
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
					
		
		 
		 
		 ?>
		 <input type="hidden" value="<?php print $sid;?>" name="sid1">
		 <input type="hidden" value="<?php print $s_gp_id;?>" name="s_gp_id">
		 <input type="hidden" value="<?php print $class;?>" name="class">
		
<?php					
if($row=mysqli_fetch_array($res))
{
?>
		 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="sname" style="font-size:1.2em">Student's Name(as per School Record)</label>
<input type="text" class="mail_text" name="sname" value="<?php print $row['student_name'];?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="sname" style="font-size:1.2em">Gender</label>
		 <select name="gender" class="mail_text">
		 <?php $gender=$row['gender'];
		 if($gender=="Male")
		 {
		 ?>
		 <option value="Male" selected>Male</option>
		 <option value="Female">Female</option>
		 <option value="Transgender">Transgender</option>
		 <?php
		 }
		 else if($gender=="Female")
		 {
		 ?>
		 <option value="Male">Male</option>
		 <option value="Female" selected>Female</option>
		 <option value="Transgender">Transgender</option>
		 <?php 
		 }
		 else if($gender=="Transgender")
		 {
		 ?>
		 
		 <option value="Male">Male</option>
		 <option value="Female">Female</option>
		 <option value="Transgender" selected>Transgender</option>
		 <?php
		 }
		 ?>
		 </select>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="dob" style="font-size:1.2em">Date of Birth</label>
		 <input type="date" class="mail_text" name="dob" value="<?php print $row['dob'];?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="sid" style="font-size:1.2em">Student Code/Id</label>
		 <input type="number" class="mail_text" name="sid" value="<?php print $row['sid'];?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="mname" style="font-size:1.2em">Mother's Name</label>
		 <input type="text" class="mail_text" name="mname" value="<?php print $row['mother_name'];?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="fname" style="font-size:1.2em">Father's Name</label>
		 <input type="text" class="mail_text" name="fname" value="<?php print $row['father_name'];?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="gname" style="font-size:1.2em">Guardian's Name</label>
		 <input type="text" class="mail_text" name="gname" value="<?php if($row['guardian_name']=="Not Provided"){print ' ';}else{ print $row['guardian_name'];}?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="anum" style="font-size:1.2em">Aadhaar Number of Student</label>
		 <input type="number" class="mail_text" name="anum" value="<?php print $row['aadhar_number'];?>">
		 </div>
		 <div class="col-md-12" style="font-size:2em;background-color:whitesmoke">
		 Contact Details
		 </div> 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="addr" style="font-size:1.2em">Address</label>
		 <input type="text" class="mail_text" name="addr" value="<?php print $row['address'];?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="pin" style="font-size:1.2em">Pincode</label>
		 <input type="number" class="mail_text" name="pin" value="<?php print $row['pincode'];?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="mnum" style="font-size:1.2em">Mobile Number (of Student/ Parent/ Guardian)</label>
		 <input type="number" class="mail_text" name="mnum" value="<?php print $row['mobileno'];?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="amnum" style="font-size:1.2em">Alternate Mobile Number(of Student/ Parent/ Guardian)</label>
		 <input type="number" class="mail_text" name="amnum" value="<?php if($row['alt_mob_no']==0){print ' ';}else{ print $row['alt_mob_no'];}?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="email" style="font-size:1.2em">Contact E-mail id (of Student/ Parent/ Guardian)</label>
		 <input type="email" class="mail_text" name="email" value="<?php if($row['e_mail']=="Not Provided"){print ' ';}else{ print $row['e_mail'];}?>">
		 </div>
		 
		 <div class="col-md-12" style="font-size:2em;background-color:whitesmoke">
		 Additional Details
		 </div> 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="amnum" style="font-size:1.2em">Mother Tongue of the Student</label>
		 <select class="mail_text" name="mtongue">
		 <?php $lang=$row['m_tongue'];
		 if($lang=="Gujarati")
		 {
		 ?>
		 <option value="Gujarati" selected>Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 
		 else if($lang=="Hindi")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi" selected>Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 
		 else if($lang=="Kannada")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada" selected>Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Kashmiri")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri" selected>Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Konkani")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani" selected>Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Maithili")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili" selected>Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Malyalam")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam" selected>Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Manipuri")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri" selected>Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Marathi")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi" selected>Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Nepali")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali" selected>Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Odia")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia" selected>Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Punjabi")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi" selected>Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Tamil")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil" selected>Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Telugu")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu" selected>Telugu</option>
		 <option value="Urdu">Urdu</option>
		 
		 <?php 
		 }
		 else if($lang=="Urdu")
		 {
		 ?>
		 <option value="Gujarati">Gujarati</option>
		 <option value="Hindi">Hindi</option>
		 <option value="Kannada">Kannada</option>
		 <option value="Kashmiri">Kashmiri</option>
		 <option value="Konkani">Konkani</option>
		 <option value="Maithili">Maithili</option>
		 <option value="Malyalam">Malyalam</option>
		 <option value="Manipuri">Manipuri</option>
		 <option value="Marathi">Marathi</option>
		 <option value="Nepali">Nepali</option>
		 <option value="Odia">Odia</option>
		 <option value="Punjabi">Punjabi</option>
		 <option value="Tamil">Tamil</option>
		 <option value="Telugu">Telugu</option>
		 <option value="Urdu" selected>Urdu</option>
		 
		 <?php 
		 }
		 
		 
		 ?>
		 
		 </select>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="sc" style="font-size:1.2em">Social Category</label>
		 <select name="sc" class="mail_text">
		 <?php $sc=$row['social_category'];
		 if($sc=="GENERAL")
		 {
		?>
		
		 <option value="GENERAL" selected>GENERAL</option>
		 <option value="OBC">OBC</option>
		 <option value="SC">SC</option>
		 <option value="ST">ST</option>
		 <?php
		 }
		 else if($sc=="OBC")
		 {
		?>
		<option value="GENERAL">GENERAL</option>
		 <option value="OBC" selected>OBC</option>
		 <option value="SC">SC</option>
		 <option value="ST">ST</option>
		 <?php
		 }
		 else if($sc=="SC")
		 {
		?>
		<option value="GENERAL">GENERAL</option>
		 <option value="OBC">OBC</option>
		 <option value="SC" selected>SC</option>
		 <option value="ST">ST</option>
		 <?php
		 }
		 else if($sc=="ST")
		 {
		?>
		<option value="GENERAL">GENERAL</option>
		 <option value="OBC">OBC</option>
		 <option value="SC">SC</option>
		 <option value="ST" selected>ST</option>
		 <?php
		 }
		 ?>
		 
		 
		 </select>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="mg" style="font-size:1.2em">Minority Group</label>
		 <select name="mg" class="mail_text">
		 <?php $mg=$row['minority_group'];
		 if($mg=="NA")
		 {
		?>
		 <option value="NA" selected>NA</option>
		
		 <option value="Muslim">Muslim</option>
		 <option value="Jain">Jain</option>
		 <option value="Buddhist">Buddhist</option>
		 <option value="Christian">Christian</option>
		 <option value="Sikh">Sikh</option>
		 <option value="Parsi">Parsi</option>
		 <?php
		 }
		 else if($mg=="Muslim")
		 {
		?>
		 <option value="NA">NA</option>
		
		 <option value="Muslim" selected>Muslim</option>
		 <option value="Jain">Jain</option>
		 <option value="Buddhist">Buddhist</option>
		 <option value="Christian">Christian</option>
		 <option value="Sikh">Sikh</option>
		 <option value="Parsi">Parsi</option>
		 <?php
		 }
		 else if($mg=="Jain")
		 {
		?>
		 <option value="NA">NA</option>
		
		 <option value="Muslim">Muslim</option>
		 <option value="Jain" selected>Jain</option>
		 <option value="Buddhist">Buddhist</option>
		 <option value="Christian">Christian</option>
		 <option value="Sikh">Sikh</option>
		 <option value="Parsi">Parsi</option>
		 <?php
		 }
		 else if($mg=="Buddhist")
		 {
		?>
		 <option value="NA">NA</option>
		
		 <option value="Muslim">Muslim</option>
		 <option value="Jain">Jain</option>
		 <option value="Buddhist" selected>Buddhist</option>
		 <option value="Christian">Christian</option>
		 <option value="Sikh">Sikh</option>
		 <option value="Parsi">Parsi</option>
		 <?php
		 }
		 else if($mg=="Christian")
		 {
		?>
		 <option value="NA">NA</option>
		
		 <option value="Muslim">Muslim</option>
		 <option value="Jain">Jain</option>
		 <option value="Buddhist">Buddhist</option>
		 <option value="Christian" selected>Christian</option>
		 <option value="Sikh">Sikh</option>
		 <option value="Parsi">Parsi</option>
		 <?php
		 }
		 else if($mg=="Sikh")
		 {
		?>
		 <option value="NA">NA</option>
		
		 <option value="Muslim">Muslim</option>
		 <option value="Jain">Jain</option>
		 <option value="Buddhist">Buddhist</option>
		 <option value="Christian">Christian</option>
		 <option value="Sikh" selected>Sikh</option>
		 <option value="Parsi">Parsi</option>
		 <?php
		 }
		 else if($mg=="Parsi")
		 {
		?>
		 <option value="NA">NA</option>
		
		 <option value="Muslim">Muslim</option>
		 <option value="Jain">Jain</option>
		 <option value="Buddhist">Buddhist</option>
		 <option value="Christian">Christian</option>
		 <option value="Sikh">Sikh</option>
		 <option value="Parsi" selected>Parsi</option>
		 <?php
		 }
		 ?>
		 
		 </select>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="bpl" style="font-size:1.2em">Whether BPL beneficiary?</label>
		 <div class="form-check inline">
		 <?php 
		 $bpl=$row['bpl'];
		 if($bpl=="Yes")
		 {
			 ?>
		 <input type="radio" name="bpl" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="bpl" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else if($bpl=="No")
		 {
		 ?>
		 <input type="radio" name="bpl" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="bpl" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 ?>
		 </div>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="aay" style="font-size:1.2em">Whether Antyodaya Anna Yojana(AAY) Beneficiary?</label>
		 <div class="form-check inline">
		 <?php 
		 $aay=$row['aay'];
		 if($aay=="Yes")
		 {
		 ?>
		 
		 <input type="radio" name="aay" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="aay" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else if($aay=="No")
		 {
			 ?>
			  <input type="radio" name="aay" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="aay" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		<?php
		 }
		 ?>
		 </div>
		 </div>
		 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="ews" style="font-size:1.2em">Whether belongs to EWS/ Disadvantaged Group?</label>
		 <div class="form-check inline">
		 <?php 
		 $ews=$row['ews'];
		 if($ews=="Yes")
		 {
			 ?>
		 <input type="radio" name="ews" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="ews" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else if($ews=="No")
		 {
			 ?>
			<input type="radio" name="ews" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="ews" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		  <?php
		 }
		 ?>
		 </div>
		 </div>
		  <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="cwsn" style="font-size:1.2em">Whether CWSN?</label>
		 <div class="form-check inline">
		 <?php
		 $cwsn=$row['cwsn'];
		 if($cwsn=="Yes")
		 {
			 ?>
		
		 <input type="radio" name="cwsn" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="cwsn" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else if($cwsn=="No")
		 {
		?>
		<input type="radio" name="cwsn" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="cwsn" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 ?>
		 </div>
		 </div>
		  <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="cwsn_type" style="font-size:1.2em">If Yes, Type of impairment</label>
		 <select name="cwsn_type" class="mail_text">
		 <?php
		 $cwsn_type=$row['cwsn_type'];
		 if($cwsn_type=="NA")
		 {
		 ?>
		 <option value="NA" selected>Select</option>
		 <option value="Blindness">Blindness</option>
		 <option value="Low Vision">Low Vision</option>
		 <option value="Hearing-impairment">Hearing-impairment</option>
		 <option value="Mental illness">Mental illness</option>
		 <option value="Specific learning Disabilities">Specific learning Disabilities</option>
		 <option value="Autism Spectrum Disorder">Autism Spectrum Disorder</option>
		 <option value="Thalassemia">Thalassemia</option>
		 <option value="Acid Attack Victim">Acid Attack Victim</option>
		 <?php
		 }
		 else if($cwsn_type=="Blindness")
		 {
		 ?>
		 <option value="NA">Select</option>
		 <option value="Blindness" selected>Blindness</option>
		 <option value="Low Vision">Low Vision</option>
		 <option value="Hearing-impairment">Hearing-impairment</option>
		 <option value="Mental illness">Mental illness</option>
		 <option value="Specific learning Disabilities">Specific learning Disabilities</option>
		 <option value="Autism Spectrum Disorder">Autism Spectrum Disorder</option>
		 <option value="Thalassemia">Thalassemia</option>
		 <option value="Acid Attack Victim">Acid Attack Victim</option>
		 <?php
		 }
		 else if($cwsn_type=="Low Vision")
		 {
		 ?>
		 <option value="NA">Select</option>
		 <option value="Blindness">Blindness</option>
		 <option value="Low Vision" selected>Low Vision</option>
		 <option value="Hearing-impairment">Hearing-impairment</option>
		 <option value="Mental illness">Mental illness</option>
		 <option value="Specific learning Disabilities">Specific learning Disabilities</option>
		 <option value="Autism Spectrum Disorder">Autism Spectrum Disorder</option>
		 <option value="Thalassemia">Thalassemia</option>
		 <option value="Acid Attack Victim">Acid Attack Victim</option>
		 <?php
		 }
		 else if($cwsn_type=="Hearing-impairment")
		 {
		 ?>
		 <option value="NA">Select</option>
		 <option value="Blindness">Blindness</option>
		 <option value="Low Vision">Low Vision</option>
		 <option value="Hearing-impairment" selected>Hearing-impairment</option>
		 <option value="Mental illness">Mental illness</option>
		 <option value="Specific learning Disabilities">Specific learning Disabilities</option>
		 <option value="Autism Spectrum Disorder">Autism Spectrum Disorder</option>
		 <option value="Thalassemia">Thalassemia</option>
		 <option value="Acid Attack Victim">Acid Attack Victim</option>
		 <?php
		 }
		 else if($cwsn_type=="Mental illness")
		 {
		 ?>
		 <option value="NA">Select</option>
		 <option value="Blindness">Blindness</option>
		 <option value="Low Vision">Low Vision</option>
		 <option value="Hearing-impairment">Hearing-impairment</option>
		 <option value="Mental illness" selected>Mental illness</option>
		 <option value="Specific learning Disabilities">Specific learning Disabilities</option>
		 <option value="Autism Spectrum Disorder">Autism Spectrum Disorder</option>
		 <option value="Thalassemia">Thalassemia</option>
		 <option value="Acid Attack Victim">Acid Attack Victim</option>
		 <?php
		 }
		 else if($cwsn_type=="Specific learning Disabilities")
		 {
		 ?>
		 <option value="NA">Select</option>
		 <option value="Blindness">Blindness</option>
		 <option value="Low Vision">Low Vision</option>
		 <option value="Hearing-impairment">Hearing-impairment</option>
		 <option value="Mental illness">Mental illness</option>
		 <option value="Specific learning Disabilities" selected>Specific learning Disabilities</option>
		 <option value="Autism Spectrum Disorder">Autism Spectrum Disorder</option>
		 <option value="Thalassemia">Thalassemia</option>
		 <option value="Acid Attack Victim">Acid Attack Victim</option>
		 <?php
		 }
		 else if($cwsn_type=="Autism Spectrum Disorder")
		 {
		 ?>
		 <option value="NA">Select</option>
		 <option value="Blindness">Blindness</option>
		 <option value="Low Vision">Low Vision</option>
		 <option value="Hearing-impairment">Hearing-impairment</option>
		 <option value="Mental illness">Mental illness</option>
		 <option value="Specific learning Disabilities">Specific learning Disabilities</option>
		 <option value="Autism Spectrum Disorder" selected>Autism Spectrum Disorder</option>
		 <option value="Thalassemia">Thalassemia</option>
		 <option value="Acid Attack Victim">Acid Attack Victim</option>
		 <?php
		 }
		 else if($cwsn_type=="Thalassemia")
		 {
		 ?>
		 <option value="NA">Select</option>
		 <option value="Blindness">Blindness</option>
		 <option value="Low Vision">Low Vision</option>
		 <option value="Hearing-impairment">Hearing-impairment</option>
		 <option value="Mental illness">Mental illness</option>
		 <option value="Specific learning Disabilities">Specific learning Disabilities</option>
		 <option value="Autism Spectrum Disorder">Autism Spectrum Disorder</option>
		 <option value="Thalassemia" selected>Thalassemia</option>
		 <option value="Acid Attack Victim">Acid Attack Victim</option>
		 <?php
		 }
		 else if($cwsn_type=="Acid Attack Victim")
		 {
		 ?>
		 <option value="NA">Select</option>
		 <option value="Blindness">Blindness</option>
		 <option value="Low Vision">Low Vision</option>
		 <option value="Hearing-impairment">Hearing-impairment</option>
		 <option value="Mental illness">Mental illness</option>
		 <option value="Specific learning Disabilities">Specific learning Disabilities</option>
		 <option value="Autism Spectrum Disorder">Autism Spectrum Disorder</option>
		 <option value="Thalassemia">Thalassemia</option>
		 <option value="Acid Attack Victim" selected>Acid Attack Victim</option>
		 <?php
		 }
		 ?>
		 
		 
		 
		 
		 </select>
		 
		 
		 </div>
		
		 
		 
		 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="innation" style="font-size:1.2em">Whether the Student is Indian National?</label>
		 <div class="form-check inline">
		 <?php
		 $innation=$row['indian_national'];
		 if($innation=="Yes")
		 {
		?>
		 <input type="radio" name="innation" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="innation" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 
		 <?php
		 }
		 else
		 {
		?>
		<input type="radio" name="innation" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 
		 <input type="radio" name="innation" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 ?>
		 </div>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="out" style="font-size:1.2em">Is this Student identified as Out-of-School-Child in current or previous years?</label>
		 <div class="form-check inline">
		 <?php
		 $out=$row['out_of_school'];
		 if($out=="Yes")
		 {
		?>
		
		 <input type="radio" name="out" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="out" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else
		 {
		?>
		 <input type="radio" name="out" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="out" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		<?php
		 }
		 ?>
		 </div>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="mstream" style="font-size:1.2em">When the Student is mainstreamed?</label>
		 <select name="mstream" class="mail_text">
		 <?php
		 $is_main_streamed=$row['is_main_streamed'];
		 if($is_main_streamed=="NA")
		 {
	     ?>
		 
		 <option value="NA" selected>Select</option>
		 <option value="In current academic year">In-current academic year</option>
		 <option value="In earlier academic year">In-earlier academic year</option>
		 <?php
		 }
		 else if($is_main_streamed=="In current academic year")
		 {
		 ?>
		 <option value="NA">Select</option>
		 <option value="In current academic year" selected>In-current academic year</option>
		 <option value="In earlier academic year">In-earlier academic year</option>
		 <?php
		 }
		 else if($is_main_streamed=="In earlier academic year")
		 {
		 ?>
		 <option value="NA">Select</option>
		 <option value="In current academic year">In-current academic year</option>
		 <option value="In earlier academic year" selected>In-earlier academic year</option>
		 <?php
		 }
		 ?>
		 
		 </select>
		 </div>
		 <div class="col-md-12" style="font-size:2em;background-color:whitesmoke">
		 Enrolment Details
		 </div> 
		 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="adnum" style="font-size:1.2em">Admission Number in School</label>
		 <input type="number" class="mail_text" name="adnum" value="<?php print $row['ad_num'];?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="addate" style="font-size:1.2em">Admission Date in Present School</label>
		 <input type="date" class="mail_text" name="addate" value="<?php print $row['ad_Date'];?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="rno" style="font-size:1.2em">Roll Number</label>
		 <input type="number" class="mail_text" name="rno" value="<?php print $row['rollno'];?>">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="status" style="font-size:1.2em">Status of student in Previous Academic Year of Schooling(2022-23)
		 </label>
		 <select name="status" class="mail_text">
		 <?php
		 $status=$row['status_of_prev_year'];
		 if($status=="Studied at Current/ Same School")
		 {
		 ?>
		 <option value="Studied at Current/ Same School" selected>Studied at Current/ Same School</option>
		 <option value="Studied at Other School">Studied at Other School</option>
		 <option value="Anganwadi/ECCE centre">Anganwadi/ECCE centre</option>
		 <?php
		 }
		 else if($status=="Studied at Other School")
		 {
		 ?>
		 <option value="Studied at Current/ Same School">Studied at Current/ Same School</option>
		 <option value="Studied at Other School" selected>Studied at Other School</option>
		 <option value="Anganwadi/ECCE centre">Anganwadi/ECCE centre</option>
		 <?php
		 }
		 else if($status=="Anganwadi/ECCE centre")
		 {
		 ?>
		 <option value="Studied at Current/ Same School">Studied at Current/ Same School</option>
		 <option value="Studied at Other School">Studied at Other School</option>
		 <option value="Anganwadi/ECCE centre" selected>Anganwadi/ECCE centre</option>
		 <?php
		 }
		 
		 
		 ?>
		 </select>
		 
		 </div>
		 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="lyear" style="font-size:1.2em">Class studied in the last academic year
		 </label>
		 <select name="lyear" class="mail_text">
		 <?php
		 $lyear=$row['class_of_last_year'];
		 if($lyear=="")
		 {
		 ?>
		 <option value="" selected>Select</option>
		 <option value="1">1</option>
		 <option value="2">2</option>
		 <option value="3">3</option>
		 <option value="4">4</option>
		 <option value="5">5</option>
		 <option value="6">6</option>
		 <option value="7">7</option>
		 <option value="Anganwadi">Anganwadi</option>
		 <?php
		 }
		 else if($lyear=="1")
		 {
		 ?>
		 <option value="">Select</option>
		 <option value="1" selected>1</option>
		 <option value="2">2</option>
		 <option value="3">3</option>
		 <option value="4">4</option>
		 <option value="5">5</option>
		 <option value="6">6</option>
		 <option value="7">7</option>
		 <option value="Anganwadi">Anganwadi</option>
		 <?php
		 }
		 else if($lyear=="2")
		 {
		 ?>
		 <option value="">Select</option>
		 <option value="1">1</option>
		 <option value="2" selected>2</option>
		 <option value="3">3</option>
		 <option value="4">4</option>
		 <option value="5">5</option>
		 <option value="6">6</option>
		 <option value="7">7</option>
		 <option value="Anganwadi">Anganwadi</option>
		 <?php
		 }
		 else if($lyear=="3")
		 {
		 ?>
		 <option value="">Select</option>
		 <option value="1">1</option>
		 <option value="2">2</option>
		 <option value="3" selected>3</option>
		 <option value="4">4</option>
		 <option value="5">5</option>
		 <option value="6">6</option>
		 <option value="7">7</option>
		 <option value="Anganwadi">Anganwadi</option>
		 <?php
		 }
		 else if($lyear=="4")
		 {
		 ?>
		 <option value="">Select</option>
		 <option value="1">1</option>
		 <option value="2">2</option>
		 <option value="3">3</option>
		 <option value="4" selected>4</option>
		 <option value="5">5</option>
		 <option value="6">6</option>
		 <option value="7">7</option>
		 <option value="Anganwadi">Anganwadi</option>
		 <?php
		 }
		 else if($lyear=="5")
		 {
		 ?>
		 <option value="">Select</option>
		 <option value="1">1</option>
		 <option value="2">2</option>
		 <option value="3">3</option>
		 <option value="4">4</option>
		 <option value="5" selected>5</option>
		 <option value="6">6</option>
		 <option value="7">7</option>
		 <option value="Anganwadi">Anganwadi</option>
		 <?php
		 }
		 else if($lyear=="6")
		 {
		 ?>
		 <option value="">Select</option>
		 <option value="1">1</option>
		 <option value="2">2</option>
		 <option value="3">3</option>
		 <option value="4">4</option>
		 <option value="5">5</option>
		 <option value="6" selected>6</option>
		 <option value="7">7</option>
		 <option value="Anganwadi">Anganwadi</option>
		 <?php
		 }
		 else if($lyear=="7")
		 {
		 ?>
		 <option value="">Select</option>
		 <option value="1">1</option>
		 <option value="2">2</option>
		 <option value="3">3</option>
		 <option value="4">4</option>
		 <option value="5">5</option>
		 <option value="6">6</option>
		 <option value="7" selected>7</option>
		 <option value="Anganwadi">Anganwadi</option>
		 <?php
		 }
		 else if($lyear=="Anganwadi")
		 {
		 ?>
		 <option value="">Select</option>
		 <option value="1">1</option>
		 <option value="2">2</option>
		 <option value="3">3</option>
		 <option value="4">4</option>
		 <option value="5">5</option>
		 <option value="6">6</option>
		 <option value="7">7</option>
		 <option value="Anganwadi" selected>Anganwadi</option>
		 <?php
		 }
		 ?>
		 </select>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="appear_exam" style="font-size:1.2em">
		 In the previous class studied – whether appeared for examinations
		 </label>
		 <select name="appear_exam" class="mail_text">
		 <?php
		 $appear=$row['appeared_for_exam'];
		 if($appear=="Yes")
		 {
		?>
		
		 <option value="Yes" selected>Yes</option>
		 <option value="No">No</option>
		 <?php
		 }
		 else if($appear=="No")
		 {
		?>
		
		 <option value="Yes">Yes</option>
		 <option value="No" selected>No</option>
		 <?php
		 }
		 ?>
		 
		 </select>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="result" style="font-size:1.2em">
		 Result
		 </label>
		 <select name="res" class="mail_text">
		 <?php
		 $result=$row['result'];
		 if($result=="NA")
		 {
	      ?>
		  
		 <option value="NA" selected>Select</option>
		 <option value="Pass">Promoted/ Passed</option>
		 <option value="Grace">Passed with Grace</option>
		 <option value="Fail">Detained/ Failed</option>
		 <?php
		 }
		 else if($result=="Pass")
		 {
	      ?>
		  
		 <option value="NA">Select</option>
		 <option value="Pass" selected>Promoted/ Passed</option>
		 <option value="Grace">Passed with Grace</option>
		 <option value="Fail">Detained/ Failed</option>
		 <?php
		 }
		 else if($result=="Grace")
		 {
	      ?>
		  
		 <option value="NA">Select</option>
		 <option value="Pass">Promoted/ Passed</option>
		 <option value="Grace" selected>Passed with Grace</option>
		 <option value="Fail">Detained/ Failed</option>
		 <?php
		 }
		 else if($result=="Fail")
		 {
	      ?>
		  
		 <option value="NA">Select</option>
		 <option value="Pass">Promoted/ Passed</option>
		 <option value="Grace">Passed with Grace</option>
		 <option value="Fail" selected>Detained/ Failed</option>
		 <?php
		 }
		 ?>
		 </select>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		<label for="mark" style="font-size:1.2em">In the previous class studied – Marks obtained (in Percentage) 
		 </label>
		 <input type="number" class="mail_text" name="mark" value="<?php print $row['marks_per'];?>">
		 </div>
		<div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="attendance" style="font-size:1.2em">No. of days Student attended school (in the previous academic year)
		  
		 </label>
		 <input type="number" class="mail_text" name="attendance" value="<?php print $row['attendence'];?>">
		 </div>
		 </div>
		 <div class="row">
		 <div class="col-md-12" style="font-size:2em;background-color:whitesmoke">
		 Facilities and other Details of the Student
		 </div>
		 <div class="col-lg-6 pRight20" style="border-right:1px solid lightgray;">
		<div class="mb-2 ng-star-inserted">
		 <label for="facility" style="font-size:1.2em">Facilities provided to the Student (for the year of filling data)? 
		  
		 </label>
		 <div class="form-check inline">
		 <?php 
		 $facility=$row['faci_provided'];
		 if($facility=="Yes")
		 {
		?>
		 <input type="radio" name="facility" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="facility" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else if($facility=="No")
		 {
		?>
		 <input type="radio" name="facility" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="facility" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 ?>
		 
		 </div>
		 <?php
		 $faci=$row['faci_detail'];
		 
		 
		 $faci1=(explode(" ",$faci));
		 $c=count($faci1);
		 if($c>1)
		 {
		 ?>
		 <div class="form-check inline">
		 
		 <input type="hidden" name="text" value="">
		 
		 <input type="checkbox" name="text" value="FreeTextbook" <?php if($faci1[0]=="FreeTextbook"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Free Text book</label>&nbsp;
		 <input type="hidden" name="uni" value="">
		 <input type="checkbox" name="uni" value="FreeUniforms" <?php if($faci1[1]=="FreeUniforms"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Free Uniforms</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="tran" value="">
		 <input type="checkbox" name="tran" value="FreeTransportFacility" <?php if($faci1[2]=="FreeTransportFacility"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Free Transport Facility</label>&nbsp;
		 <input type="hidden" name="bi" value="">
		 <input type="checkbox" name="bi" value="BiCycle" <?php if($faci1[3]=="BiCycle"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Bicycle</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="hos" value="">
		 <input type="checkbox" name="hos" value="FreeHostel" <?php if($faci1[4]=="FreeHostel"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Free Hostel</label>&nbsp;
		 <input type="hidden" name="esc" value="">
		 <input type="checkbox" name="esc" value="FreeEscort" <?php if($faci1[5]=="FreeEscort"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Free Escort</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="mob" value="">
		 <input type="checkbox" name="mob" value="FreeMobile/Tablet/Computer" <?php if($faci1[6]=="FreeMobile/Tablet/Computer"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Free Mobile/ Tablet/ Computer</label>
		 </div>
		 <?php
		 }
		 else if($c==1)
		 {
		?>
		<div class="form-check inline">
		 
			<input type="hidden" name="text" value="">
		 
		 <input type="checkbox" name="text" value="FreeTextbook"><label class="form-check-label" style="font-size:1.2em">Free Text book</label>&nbsp;
		 <input type="hidden" name="uni" value="">
		 <input type="checkbox" name="uni" value="FreeUniforms"><label class="form-check-label" style="font-size:1.2em">Free Uniforms</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="tran" value="">
		 <input type="checkbox" name="tran" value="FreeTransportFacility"><label class="form-check-label" style="font-size:1.2em">Free Transport Facility</label>&nbsp;
		 <input type="hidden" name="bi" value="">
		 <input type="checkbox" name="bi" value="BiCycle"><label class="form-check-label" style="font-size:1.2em">Bicycle</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="hos" value="">
		 <input type="checkbox" name="hos" value="FreeHostel"><label class="form-check-label" style="font-size:1.2em">Free Hostel</label>&nbsp;
		 <input type="hidden" name="esc" value="">
		 <input type="checkbox" name="esc" value="FreeEscort"><label class="form-check-label" style="font-size:1.2em">Free Escort</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="mob" value="">
		 <input type="checkbox" name="mob" value="FreeMobile/Tablet/Computer"><label class="form-check-label" style="font-size:1.2em">Free Mobile/ Tablet/ Computer</label>
		 </div>
		  <?php
		 }
		 ?>
		
		
		 </div>
		 <hr class="ng-star-inserted"/>
		 <div class="mb-2 ng-star-inserted">
		 <label for="cscholar" style="font-size:1.2em">Central Scholarship Received by Student (in Previous Academic year)
		  
		 </label>
		 
		 <div class="form-check inline">
		 <?php
		 $cscholar=$row['central_scholarship'];
		 if($cscholar=="Yes")
		 {
		 ?>
		 <input type="radio" name="cscholar" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="cscholar" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else if($cscholar=="No")
		 {
		 ?>
		 <input type="radio" name="cscholar" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="cscholar" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 
		 ?>
		 </div>
		 
		 <label for="sscholar" style="font-size:1.2em">State Scholarship Received by Student (in Previous Academic year)
		  
		 </label>
		 <div class="form-check inline">
		 <?php 
		 $sscholar=$row['state_scholarship'];
		 if($sscholar=="Yes")
		 {
		 ?>
		 <input type="radio" name="sscholar" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="sscholar" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else if($sscholar=="No")
		 {
		 ?>
		 <input type="radio" name="sscholar" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="sscholar" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 ?>
		 </div>
		 <label for="oscholar" style="font-size:1.2em">Other Scholarship Received by Student (in Previous Academic year)
		  
		 </label>
		 <div class="form-check inline">
		 <?php
		 $oscholar=$row['other'];
		 if($oscholar=="Yes")
		 {
		 ?>
		 <input type="radio" name="oscholar" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="oscholar" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else if($oscholar=="No")
		 {
		 ?>
		 <input type="radio" name="oscholar" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="oscholar" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 
		 ?>
		 
		 </div>
		 
		 <label for="amount" style="font-size:1.2em">Total amount
		  
		 </label>
	
		 <input type="number"  name="amount" value="<?php print $row['amount'];?>">
		 
		
		<hr class="ng-star-inserted"/>
		</div>
		<div class="mb-2 ng-star-inserted">
		 <label for="cfacility" style="font-size:1.2em">Facilities provided to Student in case of CWSN (for the year of filling data)? 
		  
		 </label>
		 <div class="form-check inline">
		 <?php
		 $cfacility=$row['cwsn_facility'];
		 if($cfacility=="Yes")
		 {
		 ?>
		 <input type="radio" name="cfacility" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="cfacility" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else if($cfacility=="No")
		 {
		 ?>
		 <input type="radio" name="cfacility" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="cfacility" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 ?>
		 </div>
		 <?php
		 $cfaci=$row['cwsn_faci_detail'];
		 
		 
		 $cfaci1=(explode(" ",$cfaci));
		 $c1=count($cfaci1);
		 if($c1>1)
		 {
		 ?>
		 <div class="form-check inline">
		

		 <input type="hidden" name="bbook" value="">
		 <input type="checkbox" name="bbook" value="BrailleBook" <?php if($cfaci1[0]=="BrailleBook"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Braille Book</label>&nbsp;
		 <input type="hidden" name="bkit" value="">
		 <input type="checkbox" name="bkit" value="BrailleKit" <?php if($cfaci1[1]=="BrailleKit"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Braille Kit</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="braces" value="">
		 <input type="checkbox" name="braces" value="Braces" <?php if($cfaci1[2]=="Braces"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Braces</label>&nbsp;
		 <input type="hidden" name="tcycle" value="">
		 <input type="checkbox" name="tcycle" value="Tri-cycle" <?php if($cfaci1[3]=="Tri-cycle"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Tri-cycle</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="stipend" value="">
		 <input type="checkbox" name="stipend" value="Stipend" <?php if($cfaci1[4]=="Stipend"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Stipend</label>&nbsp;
		 <input type="hidden" name="crutches" value="">
		 <input type="checkbox" name="crutches" value="Crutches" <?php if($cfaci1[5]=="Crutches"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Crutches</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="wchair" value="">
		 <input type="checkbox" name="wchair" value="WheelChair" <?php if($cfaci1[6]=="WheelChair"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Wheel Chair</label>
		 
		</div>
		 <?php
		 }
		 else if($c1==1)
		 {
		?>
		
<div class="form-check inline">
		
			 <input type="hidden" name="bbook" value="">
		 <input type="checkbox" name="bbook" value="BrailleBook"><label class="form-check-label" style="font-size:1.2em">Braille Book</label>&nbsp;
		 <input type="hidden" name="bkit" value="">
		 <input type="checkbox" name="bkit" value="BrailleKit"><label class="form-check-label" style="font-size:1.2em">Braille Kit</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="braces" value="">
		 <input type="checkbox" name="braces" value="Braces"><label class="form-check-label" style="font-size:1.2em">Braces</label>&nbsp;
		 <input type="hidden" name="tcycle" value="">
		 <input type="checkbox" name="tcycle" value="Tri-cycle"><label class="form-check-label" style="font-size:1.2em">Tri-cycle</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="stipend" value="">
		 <input type="checkbox" name="stipend" value="Stipend"><label class="form-check-label" style="font-size:1.2em">Stipend</label>&nbsp;
		 <input type="hidden" name="crutches" value="">
		 <input type="checkbox" name="crutches" value="Crutches"><label class="form-check-label" style="font-size:1.2em">Crutches</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="wchair" value="">
		 <input type="checkbox" name="wchair" value="WheelChair"><label class="form-check-label" style="font-size:1.2em">Wheel Chair</label>
		  </div>
		
		 <?php
		 }
		 ?>
		 
		
		 
		 </div>
		 </div>
		  
		 <div class="col-lg-6 border-start pleft20">
		 <div class="mb-2 ng-star-inserted">
		 <label for="sldt" style="font-size:1.2em">Whether Student has been screened for Specific Learning Disability (SLD)?
		  
		  
		 </label>
		 <div class="form-check inline">
		 <?php
		 $sldt=$row['sld'];
		 if($sldt=="Yes")
		 {
		 ?>
		 <input type="radio" name="sldt" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="sldt" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else
		 {
		?>
		 <input type="radio" name="sldt" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="sldt" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 } 
		 ?>
		 </div>
		 
		 <?php
		 $sldt_value=$row['sld_value'];
		 $sld=(explode(" ",$sldt_value));
		 $c2=count($sld);
		 if($c2>1)
		 {
		 ?>
		 <div class="form-check inline">
		 
		 <input type="hidden" name="dys" value="">
		 <input type="checkbox" name="dys" value="Dysgraphia" <?php if($sld[0]=="Dysgraphia"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Dysgraphia</label>&nbsp;
		 <input type="hidden" name="dysca" value="">
		 <input type="checkbox" name="dysca" value="Dyscalculia" <?php if($sld[1]=="Dyscalculia"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Dyscalculia</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="dyslex" value="">
		 <input type="checkbox" name="dyslex" value="Dyslexia" <?php if($sld[2]=="Dyslexia"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Dyslexia</label>&nbsp;
		 </div>
		 <?php
		 }
		 else if($c2==1)
		 {
			 ?>
			 <div class="form-check inline">
		 
		 <input type="hidden" name="dys" value="">
		 <input type="checkbox" name="dys" value="Dysgraphia"><label class="form-check-label" style="font-size:1.2em">Dysgraphia</label>&nbsp;
		 <input type="hidden" name="dysca" value="">
		 <input type="checkbox" name="dysca" value="Dyscalculia"><label class="form-check-label" style="font-size:1.2em">Dyscalculia</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="dyslex" value="">
		 <input type="checkbox" name="dyslex" value="Dyslexia"><label class="form-check-label" style="font-size:1.2em">Dyslexia</label>&nbsp;
		 </div>
		 <?php
		 }
		 ?>
		 </div>
		 <hr class="ng-star-inserted"/>
		 <div class="mb-2 ng-star-inserted">
		 <label for="asdt" style="font-size:1.2em">Whether Student has been screened for Autism Spectrum Disorder (ASD)? 
		  
		  
		 </label>
		 <div class="form-check inline">
		 <?php
		 $asdt=$row['asd'];
		 if($asdt=="Yes")
		 {
		 ?>
		 <input type="radio" name="asdt" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="asdt" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else
		 {
			 ?>
		 <input type="radio" name="asdt" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="asdt" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 ?>
		 </div>
		 
		 </div>
		 <hr class="ng-star-inserted"/>
		 <div class="mb-2 ng-star-inserted">
		 <label for="ext" style="font-size:1.2em">Is the student involved in any extracurricular activity? 
		  
		  
		 </label>
		 <div class="form-check inline">
		 <?php
		 $ext=$row['extra_curri'];
		 if($ext=="Yes")
		 {
		 ?>
		 <input type="radio" name="ext" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="ext" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else
		 {
		 ?>
		 <input type="radio" name="ext" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="ext" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 ?>
		 </div>
		 
		 </div>
		 <hr class="ng-star-inserted"/>
		 <div class="mb-2 ng-star-inserted">
		 <label for="talent" style="font-size:1.2em">Has the Student been identified as a gifted / talented in following?
		
		  
		  
		 </label>
		 <div class="form-check inline">
		 <?php
		 $talent1=$row['talented'];
		 if($talent1=="Yes")
		 {
		?>
		 <input type="radio" name="talent1" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="talent1" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else
		 {
		?>
		 <input type="radio" name="talent1" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="talent1" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		<?php 
		 }
		 ?>
		 </div>
		 
		 
		 <?php
		 $tvalue=$row['t_value'];
		$tvalue1=(explode(" ",$tvalue));
		 $c3=count($tvalue1);
		 if($c3>1)
		 {
		 
		 ?>
		 <div class="form-check inline">
		 <input type="hidden" name="math" value="">
		 <input type="checkbox" name="math" value="Mathematics" <?php if($tvalue1[0]=="Mathematics"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Mathematics</label>&nbsp;
		 <input type="hidden" name="art" value="">
		 <input type="checkbox" name="art" value="Art" <?php if($tvalue1[1]=="Art"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Art</label>
		 
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="lang" value="">
		 <input type="checkbox" name="lang" value="Language" <?php if($tvalue1[2]=="Language"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Language</label>&nbsp;
		 <input type="hidden" name="sci" value="">
		 <input type="checkbox" name="sci" value="Science" <?php if($tvalue1[3]=="Science"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Science</label>
		 
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="tech" value="">
		 <input type="checkbox" name="tech" value="Technical" <?php if($tvalue1[4]=="Technical"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Technical</label>&nbsp;
		 <input type="hidden" name="sports" value="">
		 <input type="checkbox" name="sports" value="Sports" <?php if($tvalue1[5]=="Sports"){?>checked<?php }else{}?>><label class="form-check-label" style="font-size:1.2em">Sports</label>
		 </div>
		 <?php
		 }
		 else
		 {
		?>
		<div class="form-check inline">
			<input type="hidden" name="math" value="">
		 <input type="checkbox" name="math" value="Mathematics"><label class="form-check-label" style="font-size:1.2em">Mathematics</label>&nbsp;
		 <input type="hidden" name="art" value="">
		 <input type="checkbox" name="art" value="Art"><label class="form-check-label" style="font-size:1.2em">Art</label>
		 
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="lang" value="">
		 <input type="checkbox" name="lang" value="Language"><label class="form-check-label" style="font-size:1.2em">Language</label>&nbsp;
		 <input type="hidden" name="sci" value="">
		 <input type="checkbox" name="sci" value="Science"><label class="form-check-label" style="font-size:1.2em">Science</label>
		 
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="tech" value="">
		 <input type="checkbox" name="tech" value="Technical"><label class="form-check-label" style="font-size:1.2em">Technical</label>&nbsp;
		 <input type="hidden" name="sports" value="">
		 <input type="checkbox" name="sports" value="Sports"><label class="form-check-label" style="font-size:1.2em">Sports</label>
		  </div>
		<?php
		 }
		 ?>
		 
		 <label for="mentors" style="font-size:1.2em">
		Whether provided mentors?
		  
		  
		 </label>
		 
		 <div class="form-check inline">
		 <?php
		 $mentor=$row['mentor'];
		 if($mentor=="Yes")
		 {
		 ?>
		 <input type="radio" name="mentor" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="mentor" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else
		 {
		?>
		 <input type="radio" name="mentor" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="mentor" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php 
		 }
		 ?>
		 </div>
		 <label for="camps" style="font-size:1.2em">
		Whether the student participated in nurturance camps? 
		  
		  
		 </label>
		 
		  <div class="form-check inline">
		  <?php
		  $pincamp=$row['participated_in_camps'];
		  if($pincamp=="Yes")
		  {
		  ?>
		 <input type="radio" name="pincamp" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="pincamp" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		  }
		  else 
		  {
		  ?>
		 <input type="radio" name="pincamp" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="pincamp" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		  }
		  
		  ?>
		 </div>
		 <?php
		 $slevel=$row['state_level_compe'];
		 $slevel1=(explode(" ",$slevel));
		 $c4=count($slevel1);
		 if($c4>1)
		 {
		 ?>
		 <div class="form-check inline">
		 
		 <input type="hidden" name="slevel" value="">
		 <input type="checkbox" name="slevel" value="State-level" <?php if($slevel1[0]=="State-level"){?>checked<?php }?>><label class="form-check-label" style="font-size:1.2em">State level</label>&nbsp;
		 <input type="hidden" name="nlevel" value="">
		 <input type="checkbox" name="nlevel" value="National-level" <?php if($slevel1[1]=="National-level"){?>checked<?php }?>><label class="form-check-label" style="font-size:1.2em">National level</label>
		 </div>
		 <?php
		 }
		 else
		 {
		?>
		<div class="form-check inline">
		 
		<input type="hidden" name="slevel" value="">
		 <input type="checkbox" name="slevel" value="State-level"><label class="form-check-label" style="font-size:1.2em">State level</label>&nbsp;
		 <input type="hidden" name="nlevel" value="">
		 <input type="checkbox" name="nlevel" value="National-level"><label class="form-check-label" style="font-size:1.2em">National level</label>
		 </div>
		 <?php
		 
		 }
		?>
		 
		 
		 
		 
		 
		 </div>
		 
		 
		 <div class="mb-2 ng-star-inserted">
		 <label for="ncc" style="font-size:1.2em">Does the Student participate in NCC/ NSS/ Scouts and Guides?

		  
		 </label>
		 <div class="form-check inline">
		 <?php
		 $ncc=$row['ncc_nss'];
		 if($ncc=="Yes")
		 {
		?>
		 <input type="radio" name="ncc" value="Yes" checked><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="ncc" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }
		 else
		 {
			?>
		 <input type="radio" name="ncc" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="ncc" value="No" checked><label class="form-check-label" style="font-size:1.2em">No</label>
		 <?php
		 }

		 ?>
		 
		 </div>
		 
		 </div>
		 
		 
		</div>
		
		
		 
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 
		 
		 <br>
		 <br>
		 
		 <?php
}
?>

		 <center>
		 <input type="submit" value="Update" class="btn btn-warning" style="font-size:2em">
		 
		</center>
		<br>
		<br>
		<center>
		 <a href="index.php?sid=<?php print $sid;?>"><button type="button" class="btn btn-secondary" style="font-size:1.2em;">Back to School Dashboard</button></a>
		 <a href="class-wise.php?class=<?php print $class;?>&sid=<?php print $sid;?>"><button type="button" class="btn btn-primary" style="font-size:1.2em;">Back to Student Dashboard</button></a>
		 </center>
		 
		 </div>
		 
		 
		 </form>
		 </div>
		
                          

<?php include("sfooter.php");?>