<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />

     <!-- Summernote CSS - CDN Link -->
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 pt-3 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
           <h4><img class="me-3" src="../forms/img/logo.jpg" style="height:55px;width:70px;" alt="Icon"><font style="color:#ff5c33;">V7 Ar</font><font style="color:#c2c2a3">ch Studio</font></h4>
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <?php
          $con=mysqli_connect("localhost","root","","idesign");
                           $user=$_SESSION['email'];
                           $namequery="select * from register where email='$user'";
                           $res1=mysqli_query($con,$namequery);
                           $rs=mysqli_fetch_array($res1);
                           $name=$rs[1];
                           //$profile=$rw1[7];
                         ?>

              
</ul>
            
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           <!-- <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../../assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                change to offline or busy as needed
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>-->
            <li class="nav-item mt-3">
              <a href="#" class="nav-link">
                
            <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $name?></span>
                  <span class="text-secondary text-small">User Profile</span>
                </div>
</a>
</li>


            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Registration</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Full Home Interior</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Kitchen Interior</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            
       <!--<li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                
              </span>-->
            </li>
          </ul>
        </nav>
     