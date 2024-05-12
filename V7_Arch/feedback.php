<?php

include('header.php');
$name = '';
$email = '';
$con=mysqli_connect("localhost","root","","idesign");
if(isset($_POST['btn']))
{

    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql="insert into feedback(name,email,message)values('$name','$email','$message')";
    mysqli_query($con,$sql);

   
    session_start();
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
    }
    ?>


    <!-- feedback Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Feedback</h6>
                <h1 class="mb-5">Give Feedback</h1>
            </div>
            
            <div class="col-lg-6 col-md-12 wow fadeInUp " data-wow-delay="0.5s" style="margin-left:330px;">
                <form method="post" enctype="multipart/form-data">
                <div class="bg-light rounded h-100 p-4 " >
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" value="<?php echo $name?>" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" value="<?php echo $email?>" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="btn" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feedback End -->


   <?php
   include('footer.php');
   ?>