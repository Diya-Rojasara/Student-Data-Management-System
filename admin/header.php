<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>UDISE+</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../images/favicon.ico" type="image/x-icon" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
	  <link rel="stylesheet" type="text/css" href="../css/style.css">
      
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
	  <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!-- fancy box js -->
      <link rel="stylesheet" href="css/jquery.fancybox.css" />
     
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
	  <?php
	 
	 session_start();
	  	 
	  if(isset($_SESSION["aname"]))
	  {
		 
		 
	  }
	  else
	  {
		  header('location:../demo.php');
	  }
	  
	  ?>
	   
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.php"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        
                        <div class="user_info">
                           <h6 style="font-size:2em">ADMIN</h6>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <ul class="list-unstyled components">
				  <li class="active">
				  <a href="index.php" aria-expanded="false"><i class="fa fa-dashboard yellow_color"></i> <span style="font-size:1.2em">Home</span></a>
				  </li>
                     <li>
					  
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-briefcase blue1_color"></i> <span style="font-size:1.2em">Manage Users</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
								<a href="view_users.php">> <span style="font-size:1.2em">School Users</span></a>
                           </li>
                           <li>
                              <a href="view_dpeo.php">><span style="font-size:1.2em">DPEO User</span></a>
						  </li>
                        </ul>
                     </li>
                     <li><a href="manage_students.php"><i class="fa fa-briefcase blue1_color"></i><span style="font-size:1.2em">Manage Students</span></a></li>
					 <li><a href="all.php"><i class="fa fa-clone yellow_color"></i> <span style="font-size:1.2em">List of all Students</span></a></li>
					
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span style="font-size:1.2em">Utility</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="pass.php" target="_blank">> <span style="font-size:1.2em">Change Password</span></a></li>
                           </ul>
                     </li>
					 
                     
                     <li><a href="logout.php" onclick="return confirm('Are you sure want to leave?')"><i class="fa fa-sign-out"></i><span style="font-size:1.2em">Logout</span></a></li>
                     
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
			<div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.php"><img class="img-responsive" src="../images/logo-udise1.png" alt="#" /></a>
                        </div>
                        </div>
                  </nav>
               </div>
            
               <!-- end topbar -->
