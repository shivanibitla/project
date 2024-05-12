<?php
session_start();
include("header.php");
?>

<?php

	$con=mysqli_connect("localhost","root","","idesign");
	$id=$_GET['iid'];
	$sql="select * from interior where id=$id";
	$res=mysqli_query($con,$sql);
	while($rw=mysqli_fetch_row($res))
	{
	?>
    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown"><?php echo $rw[2];?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page"><?php echo $rw[2];?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


<!--gallary start-->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
           
				
                   <h1 class="section-title text-center"><?php echo $rw[2]?></h1>
				    <?php
	}
	?>
    <?php
	$con=mysqli_connect("localhost","root","","idesign");
	$id=$_GET['iid'];
	$sql="select * from home_interior where iid=$id";
	$res=mysqli_query($con,$sql);
	while($rw=mysqli_fetch_row($res))
	{
	?>
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                    <a href="interior_info.php?iid=<?php echo $rw[0]?>">
                     <div class="position-relative">
                            <img class="img-fluid" src="Admin_dash\pages\forms\img\<?php echo $rw[2]?>" alt="" style="width:370px;height:230px;">
                            
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2"><?php echo $rw[3]?></h3>
                            <span><?php echo $rw[4]?></span>
                        </div>
    </a>
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