<?php include("header.php");?>
<div class="contact_section layout_padding">
    <div class="container">
		<div class="contact_section_2">
            <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
					 <h1 style="font-size:3em"><center><b>Change Password</b></center></h1>
					 <form action="pass_code.php" method="post">
					 <label class="form-check-label" style="font-size:2em">Current Password:</label>
				
					 <input type="password" name="cp" class="mail_text"><br>
					 
					 <label class="form-check-label" style="font-size:2em">New Password:</label>
				
					 <input type="password" name="np" class="mail_text"><br>
					 <label class="form-check-label" style="font-size:2em">Confirm Password:</label>
					 <input type="password" name="cpp" class="mail_text"><br>
					 
					 <br>
					 <br>
					 <br>
					 <br>
					 <br>
					 <br>
					 
                        <div><button type="submit" style="background-color:orange;border:0;width:25%;font-size:2em;" class="btn btn-warning">Update</button>
						<button type="reset" style="background-color:orange;border:0;width:25%;font-size:2em;" class="btn btn-warning">Clear</button>
						
						<a href="index.php"><button type="button" class="btn btn-secondary" style="border:0;width:25%;font-size:2em;">Back</button></a>
					 
						</div>
					</form>	
                     </div>
                  </div>
               </div>
               
                  
               </div>
            </div>
         </div>
 
<?php include("footer.php");?>