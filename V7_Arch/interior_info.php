<?php
session_start();
include("header.php");
?>

<?php

	$con=mysqli_connect("localhost","root","","idesign");
	$id=$_GET['cid'];
	$sql="select * from categories where id=$id";
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
           
				
                   <h1 class="section-title text-left"><?php echo $rw[2]?></h1>
                   <p style="margin-top:10px;"><?php echo $rw[3]?></p>
				    <?php
	}
	?>
    <?php
	$con=mysqli_connect("localhost","root","","idesign");
	$id=$_GET['cid'];
	$sql="select * from sub_categories where lid=$id";
	$res=mysqli_query($con,$sql);
	while($rw=mysqli_fetch_row($res))
	{
	?>
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                    <div style="width:370px;">
                        <div class="position-relative">
                            
                            <img src="Admin_dash/pages/forms/allinterior/<?php echo $rw[2]?>" style="height:240px;width:370px;border-radius:20px 20px 0px 0px;">
                        </div>
                        <div class="bg-light text-center p-2" style="border-radius:0px 0px 20px 20px;">
                            <h3 class="mt-1"><?php echo $rw[3]?></h3>
                            <div class=" justify-content-center mb-2">
                            <!--<a href="view_details.php" class="btn btn-sm btn-primary px-3 mx-2" style="border-radius:30px 30px 30px 30px;border-color:#ec7a0f;padding:7px;">View more</a>-->
                                
                                <a href="quote.php?cid=<?php echo $rw[1] ?>" class="btn btn-sm btn-primary px-3" style="border-radius:30px 30px 30px 30px;padding:7px;   ">Get Quote</a>
                            </div>

                    

                        </div>
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