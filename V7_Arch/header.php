<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>V7 Arch Studio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <!--<link href="css/style.css" rel="stylesheet">-->
	<link href="css/style1.css" rel="stylesheet">


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+0123456789"><i class="fa fa-phone-alt text-primary me-2"></i>+012 345 6789</a>
                    <a class="text-body px-2" href="mailto:info@example.com"><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="">Terms</a>
                    <a class="text-body px-2" href="">Privacy</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href="http://www.instagram.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
           <h1 ><img class="me-3" src="image/logo.jpg" height="70" width="70" alt="Icon"><font style="color:#ff5c33;">V7 Ar</font><font style="color:#c2c2a3">ch Studio</font></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
				
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">interior calculation</a>
                        <div class="dropdown-menu border-0 m-0">
                             <a href="fullhome_Cal.php" class="dropdown-item">Full Home Interrior</a>
                             <a href="kitchen_Cal.php" class="dropdown-item">Kitchen</a>
                        </div>
                
                </div>
                <a href="services.php" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="gallary.php" class="dropdown-item">Gallery</a>
                        <a href="project.php" class="dropdown-item">Our Projects</a>
                        <a href="Feedback.php" class="dropdown-item">Feedback</a>
                    </div>
                </div>  
				<a href="contact.php" class="nav-item nav-link">Inquery</a>
                
			</div>
                        
                        <?php
						if(isset($_SESSION['email']) && $_SESSION['email']==true)
						{
							$user=true;
						}
						else
						{
							$user=false;
						}
						if(!$user)
						{
						?>
						<a href="login.php"> <button class="btn btn-primary py-2 px-4  d-none d-lg-block">Login</button></a>
						</div>
						 <?php
						}
                        else
                        {
                           $con=mysqli_connect("localhost","root","","idesign");
                           $user=$_SESSION['email'];
                           $namequery="select * from register where email='$user'";
                           $res1=mysqli_query($con,$namequery);
                           $rs=mysqli_fetch_array($res1);
                           $name=$rs[1];
                           //$profile=$rw1[7];
                         ?>
                         <div class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <!--<img class="rounded-circle me-lg-2" src="" alt="" style="width: 40px; height: 40px;">-->
                            <span class="d-none d-lg-inline-flex text-primary"><?php echo $name?> </span>
                        </a>
                        <div class="nav-item dropdown">
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="../V7_Arch/Admin_dash/pages/user_dash/index.php" class="dropdown-item">View profile</a>
                                    <a href="logout.php" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                           
                        
						<?php
							 }
							 ?>
                  
                       
        </div>
    </nav>
    <!-- Navbar End -->
