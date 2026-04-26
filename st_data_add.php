<?php include("sheader.php");
include("connect.php");
$class=$_GET['class'];
$classs=$class;
					if($classs=="1")
					{
						$classs="Anganwadi";
					}
					else if($classs=="2")
					{
						$classs="1";
					}
					else if($classs=="3")
					{
						$classs="2";
					}
					else if($classs=="4")
					{
						$classs="3";
					}
					else if($classs=="5")
					{
						$classs="4";
					}
					else if($classs=="6")
					{
						$classs="5";
					}
					else if($classs=="7")
					{
						$classs="6";
					}
					
					else if($classs=="8")
					{
						$classs="7";
					}
					
$sid=$_GET['sid'];
$q="select sid from general_profile";
$res=mysqli_query($cn,$q);
$s=array();
$i=0;
while($row=mysqli_fetch_array($res))
{
	$s[$i]=$row['sid'];
	$i=$i+1;

}
$q1="select aadhar_number from general_profile";
$res1=mysqli_query($cn,$q1);
$a=array();
$i1=0;
while($row=mysqli_fetch_array($res1))
{
	$a[$i1]=$row['aadhar_number'];
	$i1=$i1+1;
}
$q2="select ad_num from enrolmnt_details INNER JOIN general_profile ON general_profile.s_gp_id=enrolmnt_details.s_gp_id INNER JOIN school_login ON general_profile.school_id=school_login.school_id where school_login.school_id=$sid";
$res2=mysqli_query($cn,$q2);
$ad=array();
$i2=0;
while($row=mysqli_fetch_array($res2))
{
	$ad[$i2]=$row['ad_num'];
	$i2=$i2+1;
}
$q3="select rollno from enrolmnt_details INNER JOIN general_profile ON general_profile.s_gp_id=enrolmnt_details.s_gp_id INNER JOIN school_login ON general_profile.school_id=school_login.school_id where school_login.school_id=$sid AND class_of_last_year='$classs'";
$res3=mysqli_query($cn,$q3);
$rnn=array();
$i3=0;
while($row=mysqli_fetch_array($res3))
{
	$rnn[$i3]=$row['rollno'];
	$i3=$i3+1;
}
echo "<script>var cla='$classs';</script>";
	  
?>
<script>
var array=<?php echo json_encode($s); ?>;
var array2=<?php echo json_encode($a);?>;
var array3=<?php echo json_encode($ad);?>;
var array4=<?php echo json_encode($rnn);?>;


</script>
	
<style>
label{
	color:black;
}
</style>
<div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Add Student Data</h1>
               </div>
            </div>
         </div>
         <div class="card-body">
		 <form method="post" action="st_data_add_code.php" name="myForm" id="form">
		 <input type="hidden" id="refresh" value="no">
    
		 <div class="row">
		 <div class="col-md-12" style="font-size:2em;background-color:whitesmoke">
		 General Profile
		 </div> 
		 
		 <input type="hidden" value="<?php print $sid;?>" name="sid1">
		<div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="sname" style="font-size:1.2em">Student's Name(as per School Record)</label>
		 <input type="text" class="mail_text" id="sname" name="sname" autocomplete="off">
		 <span style="display:block" id="sname1"></span>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="sname" style="font-size:1.2em">Gender</label>
		 <select name="gender" class="mail_text" id="gender">
		 <option value="Male">Male</option>
		 <option value="Female">Female</option>
		 <option value="Transgender">Transgender</option>
		 </select>
		 <span style="display:block" id="gender1"></span>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="dob" style="font-size:1.2em">Date of Birth</label>
		 <input type="date" class="mail_text" name="dob" id="dob">
		 <span style="display:block" id="dob1"></span>
		 
		 </div>
		 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="sid" style="font-size:1.2em">Student Code/Id</label>
		 <input type="number" class="mail_text" name="sid" id="sid">
		 
		 <span style="display:block" id="sid1"></span>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="mname" style="font-size:1.2em">Mother's Name</label>
		 <input type="text" class="mail_text" name="mname" id="mname">
		 <span style="display:block" id="mname1"></span>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="fname" style="font-size:1.2em">Father's Name</label>
		 <input type="text" class="mail_text" name="fname" id="fname">
		 <span style="display:block" id="fname1"></span>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="gname" style="font-size:1.2em">Guardian's Name</label>
		 <input type="text" class="mail_text" name="gname" id="gname">
		 <span style="display:block" id="gname1"></span>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="anum" style="font-size:1.2em">Aadhaar Number of Student</label>
		 <input type="number" class="mail_text" name="anum" id="anum">
		 <span style="display:block" id="anum1"></span>
		 
		 </div>
		 <div class="col-md-12" style="font-size:2em;background-color:whitesmoke">
		 Contact Details
		 </div> 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="addr" style="font-size:1.2em">Address</label>
		 <input type="text" class="mail_text" name="addr" id="addr">
		 <span style="display:block" id="addr1"></span>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="pin" style="font-size:1.2em">Pincode</label>
		 <input type="number" class="mail_text" name="pin" id="pin">
		 <span style="display:block" id="pin1">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="mnum" style="font-size:1.2em">Mobile Number (of Student/ Parent/ Guardian)</label>
		 <input type="number" class="mail_text" name="mnum" id="mnum">
		 <span style="display:block" id="mnum1">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="amnum" style="font-size:1.2em">Alternate Mobile Number(of Student/ Parent/ Guardian)</label>
		 <input type="number" class="mail_text" name="amnum" id="amnum">
		 <span style="display:block" id="amnum1">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="email" style="font-size:1.2em">Contact E-mail id (of Student/ Parent/ Guardian)</label>
		 <input type="email" class="mail_text" name="email" id="email">
		 <span style="display:block" id="email1">
		 </div>
		 
		 <div class="col-md-12" style="font-size:2em;background-color:whitesmoke">
		 Additional Details
		 </div> 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="amnum" style="font-size:1.2em">Mother Tongue of the Student</label>
		 <select class="mail_text" name="mtongue" id="mtongue">
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
		 <option value="Urdu">Urdu</option>
		 </select>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="sc" style="font-size:1.2em">Social Category</label>
		 <select name="sc" class="mail_text" id="sc">
		 <option value="GENERAL">GENERAL</option>
		 <option value="OBC">OBC</option>
		 <option value="SC">SC</option>
		 <option value="ST">ST</option>
		 
		 </select>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="mg" style="font-size:1.2em">Minority Group</label>
		 <select name="mg" class="mail_text" id="mg">
		 <option value="NA">NA</option>
		
		 <option value="Muslim">Muslim</option>
		 <option value="Jain">Jain</option>
		 <option value="Buddhist">Buddhist</option>
		 <option value="Christian">Christian</option>
		 <option value="Sikh">Sikh</option>
		 <option value="Parsi">Parsi</option>
		 
		 
		 </select>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="bpl" style="font-size:1.2em">Whether BPL beneficiary?</label>
		 <div class="form-check inline">
		 <input type="radio" name="bpl" value="Yes" required><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="bpl" value="No" required><label class="form-check-label" style="font-size:1.2em">No</label>
		 
		 </div>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="aay" style="font-size:1.2em">Whether Antyodaya Anna Yojana(AAY) Beneficiary?</label>
		 <div class="form-check inline">
		 <input type="radio" name="aay" value="Yes" required><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="aay" value="No" required><label class="form-check-label" style="font-size:1.2em">No</label>
		 
		 </div>
		 </div>
		 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="ews" style="font-size:1.2em">Whether belongs to EWS/ Disadvantaged Group?</label>
		 <div class="form-check inline">
		 <input type="radio" name="ews" value="Yes" required><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="ews" value="No" required><label class="form-check-label" style="font-size:1.2em">No</label>
		 
		 </div>
		 </div>
		  <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="cwsn" style="font-size:1.2em">Whether CWSN?</label>
		 <div class="form-check inline">
		 <input type="radio" name="cwsn" value="Yes" id="Yes" required><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="cwsn" value="No" id="No" required><label class="form-check-label" style="font-size:1.2em">No</label>
		 
		 </div>
		 </div>
		  <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="cwsn_type" style="font-size:1.2em">If Yes, Type of impairment</label>
		 <select name="cwsn_type" class="mail_text" id="cwsn">
		 <option value="NA">Select</option>
		 <option value="Blindness">Blindness</option>
		 <option value="Low Vision">Low Vision</option>
		 <option value="Hearing-impairment">Hearing-impairment</option>
		 <option value="Mental illness">Mental illness</option>
		 <option value="Specific learning Disabilities">Specific learning Disabilities</option>
		 <option value="Autism Spectrum Disorder">Autism Spectrum Disorder</option>
		 <option value="Thalassemia">Thalassemia</option>
		 <option value="Acid Attack Victim">Acid Attack Victim</option>
		 
		 
		 
		 </select>
		 <span id="cwsn1" style="display:block"></span>
		 
		 </div>
		
		 
		 
		 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="innation" style="font-size:1.2em">Whether the Student is Indian National?</label>
		 <div class="form-check inline">
		 <input type="radio" name="innation" value="Yes" required><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="innation" value="No" required><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="out" style="font-size:1.2em">Is this Student identified as Out-of-School-Child in current or previous years?</label>
		 <div class="form-check inline">
		 <input type="radio" name="out" value="Yes" id="oyes" required><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="out" value="No" id="ono" required><label class="form-check-label" style="font-size:1.2em">No</label>
		 
		 </div>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="mstream" style="font-size:1.2em">When the Student is mainstreamed?</label>
		 <select name="mstream" class="mail_text" id="mstream">
		 <option value="NA">Select</option>
		 <option value="In current academic year">In-current academic year</option>
		 <option value="In earlier academic year">In-earlier academic year</option>
		 
		 
		 </select>
		 <span id="mstream1" style="display:block"></span>
		 </div>
		 <div class="col-md-12" style="font-size:2em;background-color:whitesmoke">
		 Enrolment Details
		 </div> 
		 
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="adnum" style="font-size:1.2em">Admission Number in School</label>
		 <input type="number" class="mail_text" name="adnum" id="adnum">
		 <span style="display:block" id="adnum1">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="addate" style="font-size:1.2em">Admission Date in Present School</label>
		 <input type="date" class="mail_text" name="addate" id="addate">
		 <span style="display:block" id="addate1">
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="rno" style="font-size:1.2em">Roll Number</label>
		 <input type="number" class="mail_text" name="rno" id="rno">
		 <span id="rno1" style="display:block"></span>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="status" style="font-size:1.2em">Status of student in Previous Academic Year of Schooling(2022-23)
		 </label>
		 <select name="status" class="mail_text" id="status">
		 <option value="Studied at Current/ Same School">Studied at Current/ Same School</option>
		 <option value="Studied at Other School">Studied at Other School</option>
		 <option value="Anganwadi/ECCE centre">Anganwadi/ECCE centre</option>
		 
		 </select>
		 <span id="status1" style="display:block"></span>
		 </div>
		 <input type="hidden" name="class" value="<?php print $class?>">
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="lyear" style="font-size:1.2em">Class studied in the last academic year
		 </label>
		 <select name="lyear" class="mail_text" id="lyear">
		 <option value="">Select</option>
		 <option value="1" id="1">1</option>
		 <option value="2" id="2">2</option>
		 <option value="3" id="3">3</option>
		 <option value="4" id="4">4</option>
		 <option value="5" id="5">5</option>
		 <option value="6" id="6">6</option>
		 <option value="7" id="7">7</option>
		 <option value="Anganwadi" id="Anganwadi">Anganwadi</option>
		 
		 
		 
		 </select>
		 <span id="lyear1" style="display:block"></span> 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="appear_exam" style="font-size:1.2em">
		 In the previous class studied – whether appeared for examinations
		 </label>
		 <select name="appear_exam" class="mail_text" id="appear_exam">
		 <option value="">Select</option>
		 
		 <option value="Yes">Yes</option>
		 <option value="No">No</option>
		 
		 
		 
		 </select>
		 
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="result" style="font-size:1.2em">
		 Result
		 </label>
		 <select name="res" class="mail_text" id="res">
		 <option value="NA">Select</option>
		 <option value="Pass">Promoted/ Passed</option>
		 <option value="Grace">Passed with Grace</option>
		 <option value="Fail">Detained/ Failed</option>
		 
		 
		 
		 </select>
		 <span id="res1" style="display:block"></span>
		 </div>
		 <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		<label for="mark" style="font-size:1.2em">In the previous class studied – Marks obtained (in Percentage) 
		 </label>
		 <input type="number" class="mail_text" name="mark" id="mark">
		 <span id="mark1" style="display:block"></span>
		 </div>
		<div class="col-lg-3 col-md-6 col-sm-6 mb-2">
		 <label for="attendance" style="font-size:1.2em">No. of days Student attended school (in the previous academic year)
		  
		 </label>
		 <input type="number" class="mail_text" name="attendance" id="attendance">
		 <span id="attendance1" style="display:block"></span>
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
		 <input type="radio" name="facility" value="Yes" id="fyes" required><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="facility" value="No" id="fno" required><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="text" value="">
		 <input type="checkbox" name="text" value="FreeTextbook" id="text"><label class="form-check-label" style="font-size:1.2em">Free Text book</label>&nbsp;
		 <input type="hidden" name="uni" value="">
		 <input type="checkbox" name="uni" value="FreeUniforms" id="uni"><label class="form-check-label" style="font-size:1.2em">Free Uniforms</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="tran" value="">
		 <input type="checkbox" name="tran" value="FreeTransportFacility" id="tran"><label class="form-check-label" style="font-size:1.2em">Free Transport Facility</label>&nbsp;
		 <input type="hidden" name="bi" value="">
		 <input type="checkbox" name="bi" value="BiCycle" id="bi"><label class="form-check-label" style="font-size:1.2em">Bicycle</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="hos" value="">
		 <input type="checkbox" name="hos" value="FreeHostel" id="hos"><label class="form-check-label" style="font-size:1.2em">Free Hostel</label>&nbsp;
		 <input type="hidden" name="esc" value="">
		 <input type="checkbox" name="esc" value="FreeEscort" id="esc"><label class="form-check-label" style="font-size:1.2em">Free Escort</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="mob" value="">
		 <input type="checkbox" name="mob" value="FreeMobile/Tablet/Computer" id="mob"><label class="form-check-label" style="font-size:1.2em">Free Mobile/ Tablet/ Computer</label>
		 <span id="facility" style="display:block"></span>
		 </div>
		
		 </div>
		 <hr class="ng-star-inserted"/>
		 <div class="mb-2 ng-star-inserted">
		 <label for="cscholar" style="font-size:1.2em">Central Scholarship Received by Student (in Previous Academic year)
		  
		 </label>
		 <div class="form-check inline">
		 <input type="radio" name="cscholar" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="cscholar" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 
		 <label for="sscholar" style="font-size:1.2em">State Scholarship Received by Student (in Previous Academic year)
		  
		 </label>
		 <div class="form-check inline">
		 <input type="radio" name="sscholar" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="sscholar" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 <label for="oscholar" style="font-size:1.2em">Other Scholarship Received by Student (in Previous Academic year)
		  
		 </label>
		 <div class="form-check inline">
		 <input type="radio" name="oscholar" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="oscholar" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 
		 <label for="amount" style="font-size:1.2em">Total amount
		  
		 </label>
	
		 <input type="number"  name="amount">
		 
		
		<hr class="ng-star-inserted"/>
		</div>
		<div class="mb-2 ng-star-inserted">
		 <label for="cfacility" style="font-size:1.2em">Facilities provided to Student in case of CWSN (for the year of filling data)? 
		  
		 </label>
		 <div class="form-check inline">
		 <input type="radio" name="cfacility" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="cfacility" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
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
		
		 </div>
		 
		 </div>
		 <div class="col-lg-6 border-start pleft20">
		 <div class="mb-2 ng-star-inserted">
		 <label for="sldt" style="font-size:1.2em">Whether Student has been screened for Specific Learning Disability (SLD)?
		  
		  
		 </label>
		 <div class="form-check inline">
		 <input type="radio" name="sldt" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="sldt" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 
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
		 
		 </div>
		 <hr class="ng-star-inserted"/>
		 <div class="mb-2 ng-star-inserted">
		 <label for="asdt" style="font-size:1.2em">Whether Student has been screened for Autism Spectrum Disorder (ASD)? 
		  
		  
		 </label>
		 <div class="form-check inline">
		 <input type="radio" name="asdt" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="asdt" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 
		 </div>
		 <hr class="ng-star-inserted"/>
		 <div class="mb-2 ng-star-inserted">
		 <label for="ext" style="font-size:1.2em">Is the student involved in any extracurricular activity? 
		  
		  
		 </label>
		 <div class="form-check inline">
		 <input type="radio" name="ext" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="ext" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 
		 </div>
		 <hr class="ng-star-inserted"/>
		 <div class="mb-2 ng-star-inserted">
		 <label for="talent" style="font-size:1.2em">Has the Student been identified as a gifted / talented in following?
		
		  
		  
		 </label>
		 <div class="form-check inline">
		 <input type="radio" name="talent1" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="talent1" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 
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
		 <label for="mentors" style="font-size:1.2em">
		Whether provided mentors?
		  
		  
		 </label>
		 
		 <div class="form-check inline">
		 <input type="radio" name="mentor" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="mentor" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 <label for="camps" style="font-size:1.2em">
		Whether the student participated in nurturance camps? 
		  
		  
		 </label>
		 
		  <div class="form-check inline">
		 <input type="radio" name="pincamp" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="pincamp" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 <div class="form-check inline">
		 <input type="hidden" name="slevel" value="">
		 <input type="checkbox" name="slevel" value="State-level"><label class="form-check-label" style="font-size:1.2em">State level</label>&nbsp;
		 <input type="hidden" name="nlevel" value="">
		 <input type="checkbox" name="nlevel" value="National-level"><label class="form-check-label" style="font-size:1.2em">National level</label>
		 
		
		 
		 </div>
		 
		 
		 </div>
		 <hr class="ng-star-inserted"/>
		 <div class="mb-2 ng-star-inserted">
		 <label for="ncc" style="font-size:1.2em">Does the Student participate in NCC/ NSS/ Scouts and Guides?

		  
		 </label>
		 <div class="form-check inline">
		 <input type="radio" name="ncc" value="Yes"><label class="form-check-label" style="font-size:1.2em">Yes</label>&nbsp;
		 <input type="radio" name="ncc" value="No"><label class="form-check-label" style="font-size:1.2em">No</label>
		 </div>
		 
		 </div>
		 
		 
		</div>
		
		
		 
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 <br>
		 <br>
		 <center>
		 <input type="submit" value="Save" class="btn btn-warning" style="font-size:2em" id="submit-btn">
		 
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