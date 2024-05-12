
<?php
			$con=mysqli_connect("localhost","root","","idesign");
			if(isset($_POST['btn']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$phone=$_POST['phone'];
				$address=$_POST['address'];
				
				$sql="insert into admin_regi(name,email,password,contact,address)values('$name','$email','$password',$phone,'$address')";
			    if(mysqli_query($con,$sql))
			    {
                    echo "<script>
                    swal('registered!', 'your response has been recorded', 'success');
                    </script>";
			    }
			    else
			    {
				   echo "<script>
                    swal('not registered!', 'your response not been recorded', 'error');
                    </script>";
					
			    }
			}
			?>
	<!--insert end--->

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
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
                <div class="brand-logo">
                  
           <h4><img class="me-3" src="pages/forms/img/logo.jpg" style="height:55px;width:70px;" alt="Icon"><font style="color:#ff5c33;">V7 Ar</font><font style="color:#c2c2a3">ch Studio</font></h4>
         
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="name" id="exampleInputUsername1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
				  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="phone" id="exampleInputPassword1" placeholder="contact">
                  </div>
				  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="address" id="exampleInputPassword1" placeholder="address">
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  <!--<div class="mt-3">
                    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="btn">Register</a>
                  </div>-->
				   <button type="submit" name="btn" class="btn btn-block btn-lg btn-gradient-primary mt-4">Register</button>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="index.php" class="text-primary">Login</a>
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