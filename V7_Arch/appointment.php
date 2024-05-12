<?php
include("header.php");
/*import swal from 'sweetalert';*/

?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Appointment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Appointment</li>
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
				$Mobile=$_POST['mobile'];
                $Date=$_POST['date'];
                $Time=$_POST['time'];
				$Message=$_POST['message'];
				$sql="insert into appointment(name,email,mobile,date,time,message)values('$Name','$Email',$Mobile,'Date','Time','$Message')";
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
	<!--insert end-->

    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Appointment</h4>
                    <h1 class="display-5 mb-4">Make An Appointment To Start Your Dream Project</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Call Us Now</p>
                                    <h3 class="mb-0">+012 345 6789</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Mail Us Now</p>
                                    <h3 class="mb-0">info@example.com</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <form method="post">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Your Name"name="name" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control" placeholder="Your Email" name="email" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-12">
                            <input type="text" class="form-control" placeholder="Your Mobile" name="mobile" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" name="date" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Choose TIme" data-target="#time" data-toggle="datetimepicker" name="time" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit" name="btn">Book Appointment</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
    
	
<?php
include("footer.php");
?>