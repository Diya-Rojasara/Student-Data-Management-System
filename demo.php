<?php include("header.php");?>
<!-- about section start -->

<div class="about_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="about_taital_main">
                   <h1 class="about_taital" style="color:darksalmon"><b>Welcome to UDISE+</b></h1>
<p class="about_text" style="color:black;font-size:1.2em;">
Student Database Management System is developed to manage 
the records of the students such as student Profile, Enrolment, 
Dropouts, Transfers, Progression / Holdback etc. This helps in 
generating reports at district, block, and school level.<br><br>
This system is used for data storage, updation, manipulation, 
analysis and sharing. This system is user friendly in terms 
of viewing and managing student information. Also, custom 
search features help in tracking of student records.<br><br>
This system covers student information of school education including
Various Boards, School Management, Autonomous Bodies, Vocational and
open school students etc.It also provides the required information to 
Unified District Information for Education plus (UDISE+).
</p>
             
        </div>
    </div>
        <div class="col-md-5 padding_right0">
				  
        <div class="about_img" style="margin-top:60px;"><img src="images/mybg.png" alt="image not found"></div>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->
	  
<!-- choose section start-->
<div class="contact_section layout_padding">
    <div class="container">
		<div class="contact_section_2">
            <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
					 <h1 style="font-size:3em"><center><b>Login</b></center></h1>
					 <form action="demo_code.php" method="post">
					 <label class="form-check-label" style="font-size:2em">User ID</label>
				
					 <input type="text" name="uid" class="mail_text"><br>
					 <label class="form-check-label" style="font-size:2em">Password</label>
					 <input type="password" name="pass" class="mail_text"><br>
					 
					 <label class="form-check-label" style="font-size:2em">Select User</label>
					 <div>
					 <select name="d1" class="mail_text">
					 
					 <option value="School">School</option>
					 <option value="Admin">Admin</option>
					 <option value="DPEO">DPEO</option>
					 </select>
					 </div>
					 <br>
					 <br>
					 <br>
					 <br>
					 <br>
					 <br>
					 
                        <div><center><button type="submit" style="background-color:orange;border:0;width:25%;font-size:2em;" class="btn btn-warning">Go</button></center></div>
					</form>	
                     </div>
                  </div>
               </div>
               
                  
               </div>
            </div>
         </div>
    </div>
	</div>
	
      <!--choose section end -->



<?php include("footer.php");?>