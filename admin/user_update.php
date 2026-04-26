<?php include("header.php");

include ("../connect.php");?>
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Update School User</h2>
                           </div>
                        </div>
                     </div>
				
<div class="col-md-12">
                  <div class="contact_section layout_padding">
         
            
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
					 <form action="user_update_code.php" method="post">
					 <?php
						$sid=$_GET['sid'];
					   
						$q_it="select * from school_login where school_id=$sid";
						$res_it=mysqli_query($cn,$q_it);
						
						if($row_it=mysqli_fetch_array($res_it))
						{
			        ?>
					<input type="hidden" name="sid" value="<?php $sid=$row_it['school_id'];print $sid;?>">
					 <label for="sname" style="font-size:2em">School Name:</label>
                        <input type="text" class="mail_text" name="sname" value="<?php print $row_it['school_name'];?>">
						
					
						<br>
						<label for="stype" style="font-size:2em">Enter School Type:</label>
						<input type="text" class="mail_text" name="stype"value="<?php $stype=$row_it['school_type']; print $stype;?>">
						<br>
						
                        <label for="sdate" style="font-size:2em">Enter School Start Date:</label>
						<input type="date" class="mail_text" name="sdate"value="<?php $sdate=$row_it['start_date']; print $sdate;?>">
						<br>
						<label for="edate" style="font-size:2em">Enter School End Date:</label>
                     
                        <input type="date" class="mail_text" name="edate"value="<?php $edate=$row_it['end_date']; print $edate;?>">
						<br>
						
						<label for="class" style="font-size:2em">Enter Classes:</label>
						<input type="text" class="mail_text" name="classes"value="<?php $class=$row_it['classes']; print $class;?>">
						<br>
						
						<label for="class" style="font-size:2em">Enter School Code:</label>
						<input type="number" class="mail_text" name="scode"value="<?php $code=$row_it['school_code']; print $code;?>">
						<br>
						
						<label for="class" style="font-size:2em">Enter Password:</label>
						<input type="password" class="mail_text" name="password" value="<?php $pass=$row_it['password']; print $pass;?>">
						<br>
						<br>
					 <br>
					 <br>
					<br>
					<br>
						
                        
                        <div><center><input type="submit" value="submit" style="font-size:2em;" class="btn btn-warning">
						<a href="view_users.php"><button type="button" style="font-size:2em;" class="btn btn-secondary">Back</button></a>
						</center></div>
						<?php
				}
				?>
						</form>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
					
                     
						
<?php include("footer.php");?>