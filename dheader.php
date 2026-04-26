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
      <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="admin/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="admin/style.css" />
	  <link rel="stylesheet" type="text/css" href="css/style.css">
      
      <!-- responsive css -->
      <link rel="stylesheet" href="admin/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="admin/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="admin/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="admin/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="admin/css/custom.css" />
	  <!-- calendar file css -->
      <link rel="stylesheet" href="admin/js/semantic.min.css" />
      <!-- fancy box js -->
      <link rel="stylesheet" href="admin/css/jquery.fancybox.css" />
     
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
	  <?php
	 session_start();
	  if(isset($_SESSION["dname"]))
	  {
		  $dname=$_SESSION["dname"];
		 
	  }
	  else
	  {
		  header('location:demo.php');
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
                        <a href="dindex.php"><img class="logo_icon img-responsive" src="admin/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        
                        <div class="user_info">
                           <h6 style="font-size:2em">DPEO</h6>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  
                  <ul class="list-unstyled components">
				  <li class="active">
				  <a href="dindex.php" aria-expanded="false"><i class="fa fa-dashboard yellow_color"></i> <span style="font-size:1.2em">DPEO Dashboard</span></a>
				  </li>
				  <li><a href="all2.php"><i class="fa fa-clone yellow_color"></i> <span style="font-size:1.2em">List of all Students</span></a></li>
					  
                     
                     
                     <li><a href="dlogout.php" onclick="return confirm('Are you sure want to leave?');"><i class="fa fa-sign-out"></i><span style="font-size:1.2em">Logout</span></a></li>
                     
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
                           <a href="dindex.php"><img class="img-responsive" src="images/logo-udise1.png" alt="#" /></a>
                        </div>
                        </div>
                  </nav>
               </div>
            
               <!-- end topbar -->
