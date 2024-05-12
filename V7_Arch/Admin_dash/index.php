<?php
$con=mysqli_connect("localhost","root","","idesign");
session_start();
if(isset($_POST['btn']))
{
    
    $email=$_POST['email'];
	$pass=$_POST['pass'];
	
	
$sql="select count(id) from admin_regi where email='$email' and password='$pass'";
$res=mysqli_query($con,$sql);
$count=mysqli_fetch_row($res);
if($count[0]=='1')
{
    $_SESSION['email']=$email;
    header("Location:index1.php");
}
else
{
  echo "user not registered" ;
}
}
?>
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
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
             <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
			 
				<h2><a class="navbar-brand brand-logo" href="index.php">
		 
        <img class="me-3" src="pages/forms/img/logo.jpg" style="height:55px;width:70px;" alt="Icon"><font style="color:#ff5c33;">V7 Ar</font><font style="color:#c2c2a3">ch Studio</font>
          </a></h2>
                  <!--<img src="../../assets/images/logo.svg">-->
                </div>
                <h4 align="">Log in </h4>
                <h6 class="font-weight-light"></h6>
                <form class="pt-3" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="email" name="email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"  placeholder="Password" name="pass">
                  </div>
                  <div class="mt-3">
				    <button type="submit" class="btn btn-inverse-danger btn-fw" name="btn">SIGN IN</button>
                    <!--<button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="btn">SIGN IN</button>-->
                  </div>
                  
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.html" class="text-primary">Create</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>