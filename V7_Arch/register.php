<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
	body{
		background:rgba(212, 211, 211, 0.968);
	}
    </style>
	<link href="css/regi.css" rel="stylesheet">
</head>
<body>
<!--insert start--->
      <?php
			$con=mysqli_connect("localhost","root","","idesign");
			if(isset($_POST['btn']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$address=$_POST['address'];
				$phone=$_POST['phone'];
				
				$sql="insert into register(name,email,address,phone)values('$name','$email','$address',$phone)";
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

<div class="main" id="ma">

    <div class="form1">
	<div class="logo">
			  <h1><img class="me-3" src="image/logo.jpg" height="30px" width="30px" alt="Icon"><font style="color:#ff5c33;"> V7 Ar</font><font style="color:#c2c2a3">ch Studio</font></h1>
      </div>
        <p class="p2">Register form:</p>
	<form method="post">
        <input type="text" placeholder="Username" name="name" class="text1"><br>
        <input type="text" placeholder="Email" name="email" class="text">
        <p class="p3">please enter  address</p>
        <input type="text" placeholder="Address" name="address" class="text1">
        <p class="p3">Enter valid Phone no</p>
        <input type="text" placeholder="Phone no" name="phone" class="text1"><br>
		
      
    <input type="submit" value="SUBMIT" name="btn" class="btn">
	</form>
    
    </div>




</div>


</body>
</html>