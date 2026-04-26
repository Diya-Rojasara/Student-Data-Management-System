<?php include("connect.php");

/*general profile*/
$sname=$_POST['sname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$sid=$_POST['sid'];
$mname=$_POST['mname'];
$fname=$_POST['fname'];
$gname=$_POST['gname'];
if($gname=="")
{
	$gname="Not Provided";
}
$anum=$_POST['anum'];
/*end general profile*/
/*contact*/
$addr=$_POST['addr'];
$pin=$_POST['pin'];
$mnum=$_POST['mnum'];
$amnum=$_POST['amnum'];
$email=$_POST['email'];
if($email=="")
{
	$email="Not Provided";
}
/*end contact*/
/*additional details*/
$mtongue=$_POST['mtongue'];
$sc=$_POST['sc'];
$mg=$_POST['mg'];
$bpl=$_POST['bpl'];
$aay=$_POST['aay'];
$ews=$_POST['ews'];
$cwsn=$_POST['cwsn'];
$cwsn_type=$_POST['cwsn_type'];
$innation=$_POST['innation'];
$out=$_POST['out'];
$mstream=$_POST['mstream'];
/*end additional details*/
/*enrolment details*/
$adnum=$_POST['adnum'];
$addate=$_POST['addate'];
$rno=$_POST['rno'];
$status=$_POST['status'];
$lyear=$_POST['lyear'];
if($lyear=="")
{
	$lyear="NA";
}
$class=$_POST['class'];
					
$appear_exam=$_POST['appear_exam'];
$res=$_POST['res'];
$mark=$_POST['mark'];

$attendance=$_POST['attendance'];
/*end enrolment details*/

/*facility*/
$facility=$_POST['facility'];
$text=$_POST['text'];
$uni=$_POST['uni'];
$tran=$_POST['tran'];
$bi=$_POST['bi'];
$hos=$_POST['hos'];
$esc=$_POST['esc'];
$mob=$_POST['mob'];

$faci=array($text,$uni,$tran,$bi,$hos,$esc,$mob);
$facilities="";  

foreach($faci as $facilities1)  
{  
          $facilities .= $facilities1." ";  
		
}
if($faci[0]=="" && $faci[1]=="" && $faci[2]=="" && $faci[3]=="" && $faci[4]=="" && $faci[5]=="" && $faci[6]=="")
{
	$facilities="NA";
}
$cscholar=$_POST['cscholar'];
$sscholar=$_POST['sscholar'];
$oscholar=$_POST['oscholar'];
$amount=$_POST['amount'];
$cfacility=$_POST['cfacility'];
$bbook=$_POST['bbook'];
$bkit=$_POST['bkit'];
$braces=$_POST['braces'];
$tcycle=$_POST['tcycle'];
$stipend=$_POST['stipend'];
$crutches=$_POST['crutches'];
$wchair=$_POST['wchair'];
$cfaci=array($bbook,$bkit,$braces,$tcycle,$stipend,$crutches,$wchair);
$cfacilities="";
foreach($cfaci as $cfacilities1)
{
	$cfacilities.=$cfacilities1." ";
}
if($cfaci[0]=="" && $cfaci[1]=="" && $cfaci[2]=="" && $cfaci[3]=="" && $cfaci[4]=="" && $cfaci[5]=="" && $cfaci[6]=="")
{
	$cfacilities="NA";
}
$sldt=$_POST['sldt'];
$dys=$_POST['dys'];
$dysca=$_POST['dysca'];
$dyslex=$_POST['dyslex'];
$sldt1=array($dys,$dysca,$dyslex);
$sldt12="";
foreach($sldt1 as $sldt123)
{
	$sldt12.=$sldt123." ";
}
if($sldt1[0]=="" && $sldt1[1]=="" && $sldt1[2]=="")
{
	$sldt12="NA";
}

$asdt=$_POST['asdt'];
$ext=$_POST['ext'];
$talent1=$_POST['talent1'];
$math=$_POST['math'];
$art=$_POST['art'];
$lang=$_POST['lang'];
$sci=$_POST['sci'];
$tech=$_POST['tech'];
$sports=$_POST['sports'];
$talent=array($math,$art,$lang,$sci,$tech,$sports);
$talent12="";
foreach($talent as $talent123)
{
	$talent12.=$talent123." ";
}
if($talent[0]=="" && $talent[1]=="" && $talent[2]=="" && $talent[3]=="" && $talent[4]=="" && $talent[5]=="")
{
	$talent12="NA";
}
$mentor=$_POST['mentor'];
$pincamp=$_POST['pincamp'];
$slevel=$_POST['slevel'];
$nlevel=$_POST['nlevel'];
$camps=array($slevel,$nlevel);
$camps1="";
foreach($camps as $camps12)
{
	$camps1.=$camps12." ";
}
if($camps[0]=="" && $camps[1]=="")
{
	$camps1="NA";
}
$ncc=$_POST['ncc'];
/*end facility*/
$sid1=$_POST['sid1'];
$q="insert into general_profile(student_name,gender,dob,sid,mother_name,father_name,guardian_name,aadhar_number,school_id) values('$sname','$gender','$dob',$sid,'$mname','$fname','$gname',$anum,$sid1)";
mysqli_query($cn,$q);

 $s_gp_id= mysqli_insert_id($cn);
 

$q3="insert into contact_details(address,pincode,mobileno,alt_mob_no,e_mail,s_gp_id) values('$addr','$pin','$mnum','$amnum','$email','$s_gp_id')";
mysqli_query($cn,$q3);

$q4="insert into additional_details(m_tongue,social_category,minority_group,bpl,aay,ews,cwsn,cwsn_type,indian_national,out_of_school,is_main_streamed,s_gp_id) values('$mtongue','$sc','$mg','$bpl','$aay','$ews','$cwsn','$cwsn_type','$innation','$out','$mstream','$s_gp_id')";
mysqli_query($cn,$q4);
$q5="insert into enrolmnt_details(ad_num,ad_Date,rollno,status_of_prev_year,class_of_last_year,appeared_for_exam,result,marks_per,attendence,s_gp_id) values('$adnum','$addate','$rno','$status','$lyear','$appear_exam','$res','$mark','$attendance','$s_gp_id')";
mysqli_query($cn,$q5);
$q6="insert into facility(faci_provided,faci_detail,central_scholarship,state_scholarship,other,amount,cwsn_facility,cwsn_faci_detail,sld,sld_value,asd,extra_curri,ncc_nss,talented,t_value,mentor,participated_in_camps,state_level_compe,s_gp_id) 
values('$facility',
'$facilities',  
'$cscholar',
'$sscholar',
'$oscholar',
'$amount',
'$cfacility',
'$cfacilities',
'$sldt',
'$sldt12',
'$asdt',
'$ext',
'$ncc',
'$talent1',
'$talent12',
'$mentor',
'$pincamp',
'$camps1',
'$s_gp_id')";
mysqli_query($cn,$q6);
header('location:class-wise.php?class='.$class.'&sid='.$sid1);
?>