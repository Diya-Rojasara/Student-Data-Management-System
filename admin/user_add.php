<?php include("header.php");?>

<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Add School User</h2>
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
					 <form action="user_add_code.php" method="post">
					 <label for="sname" style="font-size:2em">Enter School Name:</label>
                        <input type="text" class="mail_text" placeholder="School Name" name="sname"><br>
						<label for="stype" style="font-size:2em">Enter School Type:</label>
						<input type="text" class="mail_text" placeholder="School Type" name="stype"><br>
						
                        <label for="sdate" style="font-size:2em">Enter School Start Date:</label>
						<input type="date" class="mail_text" placeholder="Start Date" name="sdate"><br>
						<label for="edate" style="font-size:2em">Enter School End Date:</label>
                     
                        <input type="date" class="mail_text" placeholder="End Date" name="edate"><br>
						<label for="class" style="font-size:2em">Enter Classes:</label>
						<input type="text" class="mail_text" placeholder="Classes" name="classes"><br>
						<label for="class" style="font-size:2em">Enter School Code:</label>
						<input type="number" class="mail_text" placeholder="scode" name="scode"><br>
						<label for="class" style="font-size:2em">Enter Password:</label>
						<input type="password" class="mail_text" placeholder="Password" name="password"><br>
						<br>
					 <br>
					 <br>
					 <br>
						
                        
                        <div><center><input type="submit" value="submit" style="font-size:2em;" class="btn btn-warning">
						<a href="view_users.php"><button type="button" class="btn btn-secondary" style="font-size:2em;">Back</button></a><br>
					 
						</center>
						
						</div>
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
