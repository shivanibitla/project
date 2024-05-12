<?php
session_start();
include("header.php");
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Gallary</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Features</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


<!--gallary start-->
<div class="container-xxl py-3">
        <div class="container-fluid">
            <div class="row g-3">
			
                    <h1 class="section-title text-center">Gallary</h1>
            
    <?php
	$con=mysqli_connect("localhost","root","","idesign");
	$sql="select * from gallery";
	$res=mysqli_query($con,$sql);
	while($rw=mysqli_fetch_row($res))
	{
	?>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div>
					
					<img class="img-fluid" src="Admin_dash/pages/forms/img/<?php echo $rw[1] ?>" alt="" style="margin:40px 0px 60px 40px; height:300px;width:350px">

                    </div>
                </div>
	<?php
	}
	?>
				<!--<div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div>
                        
                        <img class="img-fluid" src="img/about-1.jpg" alt="" style="margin:40px 0px 60px 40px; height:400px;width:350px">

                    </div>
                </div>
				
				<div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div>
                        
                        <img class="img-fluid" src="img/about-1.jpg" alt="" style="margin:40px 0px 60px 40px; height:400px;width:350px">

                    </div>
                </div>-->
				
            </div>
        </div>
    </div>
    <!-- Gallary End -->
        
<?php
include("footer.php");
?>