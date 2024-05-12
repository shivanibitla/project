<?php


include("header.php");

    if(isset($_SESSION['email'])) {
        $email=$_SESSION['email'];
    
        $namequery="select * from register where email='$email'";
        $res1=mysqli_query($con,$namequery);
        $rw1=mysqli_fetch_row($res1);
        $name=$rw1[1];
        $email=$rw1[2];	
    } 
    else {
        $name = '';
        $email = '';
    }

?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
	
	
	<!--insert start--->
      <?php
			$con=mysqli_connect("localhost","root","","idesign");
			if(isset($_POST['btn']))
			{
				$Name=$_POST['name'];
				$Email=$_POST['email'];
				$Subject=$_POST['subject'];
				$Message=$_POST['message'];
				$sql="insert into inquery(Name,Email,Subject,Message)values('$Name','$Email','$Subject','$Message')";
			    if(mysqli_query($con,$sql))
			    {
                    echo "<script>
                    swal('Good job!', 'You clicked the button!', 'success');
                    </script>";
			    }
			    else
			    {
				  echo "not inserted".mysqli_error($con);
			    }
			}
			?>
	<!--insert end--->
			

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Inquery</h4>
                <h1 class="display-5 mb-4">If You Have Any Query, Please Feel Free Contact Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-between h-90">
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Address</p>
                                <h4 class="mb-0">123 Street, New York, USA</h4>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-3 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Call Us Now</p>
                                <h4 class="mb-0">+012 345 6789</h4>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-3">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Mail Us Now</p>
                                <h4 class="mb-0">info@example.com</h4>
                            </div>
                        </div>
                    </div>
                </div>
				
	           <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
				 <!--<div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">-->
                <iframe class="w-100 mb-n2" style="height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
	      
			
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="post">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" value="<?php echo $name?>" placeholder="Your Name" name="name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" value="<?php echo $email ?>" placeholder="Your Email" name="email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start 
    <div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <iframe class="w-100 mb-n2" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    Google Map End -->


<?php
include("footer.php");
?>