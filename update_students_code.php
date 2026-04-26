<?php
include("connect.php");

/*general profile*/
$sname=$_POST['sname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$sid=$_POST['sid'];
$mname=$_POST['mname'];
$fname=$_POST['fname'];
$gname=$_POST['gname'];
if($gname==" ")
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
if($lyear==" ")
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
$s_gp_id=$_POST['s_gp_id'];
$q="update general_profile set student_name='$sname',gender='$gender',dob='$dob',sid=$sid,mother_name='$mname',father_name='$fname',guardian_name='$gname',aadhar_number=$anum where s_gp_id=$s_gp_id";
mysqli_query($cn,$q);
$q1="update contact_details set address='$addr',pincode='$pin',mobileno='$mnum',alt_mob_no='$amnum',e_mail='$email' where s_gp_id=$s_gp_id";
mysqli_query($cn,$q1);
$q2="update additional_details set m_tongue='$mtongue',social_category='$sc',minority_group='$mg',bpl='$bpl',aay='$aay',ews='$ews',cwsn='$cwsn',cwsn_type='$cwsn_type',indian_national='$innation',out_of_school='$out',is_main_streamed='$mstream' where s_gp_id=$s_gp_id";
mysqli_query($cn,$q2);

$q3="update enrolmnt_details set ad_num='$adnum',ad_Date='$addate',rollno='$rno',status_of_prev_year='$status',class_of_last_year='$lyear',appeared_for_exam='$appear_exam',result='$res',marks_per='$mark',attendence='$attendance' where s_gp_id=$s_gp_id";
mysqli_query($cn,$q3);
$q4="update facility set faci_provided='$facility',faci_detail='$facilities',central_scholarship='$cscholar',
state_scholarship='$sscholar',other='$oscholar',amount='$amount',
cwsn_facility='$cfacility',cwsn_faci_detail='$cfacilities',
sld='$sldt',sld_value='$sldt12',asd='$asdt',extra_curri='$ext'
,ncc_nss='$ncc',talented='$talent1',t_value='$talent12',
mentor='$mentor',participated_in_camps='$pincamp',state_level_compe='$camps1' where s_gp_id=$s_gp_id";
mysqli_query($cn,$q4);
header('location:class-wise.php?class='.$class.'&sid='.$sid1);







?>