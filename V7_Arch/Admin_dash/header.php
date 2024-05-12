<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
	
	
	<!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
    

    </head>
  <body>
      <!-- partial:partials/_navbar.html -->
	  <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 pt-3 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
           <h4><img class="me-3" src="pages/forms/img/logo.jpg" style="height:55px;width:70px;" alt="Icon"><font style="color:#ff5c33;">V7 Ar</font><font style="color:#c2c2a3">ch Studio</font></h4>
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile pt-2">
              <a href="#" class="nav-link">
                
				<?php
				session_start();
$con=mysqli_connect("localhost","root","","idesign");
                           $user=$_SESSION['email'];
                           $namequery="select * from admin_regi where email='$user'";
                           $res1=mysqli_query($con,$namequery);
                           $rs=mysqli_fetch_array($res1);
                           $name=$rs[1];
                           
?>
                
                <div class="nav-profile-text d-flex flex-column mt-5">
                  <span class="font-weight-bold mb-2"><?php echo $name; ?></span>
                 
                </div>
              
              </a>
            </li>
			
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/categories.php">
                <span class="menu-title">interior categories</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
           
		   <li class="nav-item">
              <a class="nav-link" href="pages/tables/sub_categories.php">
                <span class="menu-title">interior sub_categories</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			

			
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/gallary.php">
                <span class="menu-title">Gallary</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/contact.php">
                <span class="menu-title">Contact</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            
             <li class="nav-item">
              <a class="nav-link" href="pages/tables/services.php">
                <span class="menu-title">Services</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="pages/tables/register.php">
                <span class="menu-title">Registration</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="pages/tables/fullhome_cal.php">
                <span class="menu-title">Full Home Interior</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="pages/tables/kitchen_cal.php">
                <span class="menu-title">Kitchen Interior</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="pages/tables/consultation.php">
                <span class="menu-title">Consultation</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="pages/tables/quote.php">
                <span class="menu-title">Quote</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			
          
            </li>
          </ul>
        </nav>
     