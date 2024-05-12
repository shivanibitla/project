<html>
    <head>
        <title>package</title>
        <link href="css/regi.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
	
        .div1{
            text-align:center;
             
			 border:solid 2px ##f2ebeb;
            margin:60px 300px 0px 300px;
            padding-bottom:50px;
			box-shadow: 2px 4px 7px #d6d4d4;
            padding-top:20px;

        }
        .div2{
            text-align:left;
            border:solid 2px ##f2ebeb;
            margin:40px 0px 0px 20px;
			height:200px;
            width:200px;
            padding:20px 0px 20px 15px;
            box-shadow: 2px 4px 7px #d6d4d4;
        }
        
        img{
            height:150px;
            width:170px;
            border-radius:6px;
            margin-bottom:20px;
        }
        
		.btn{
			width:150px;
			margin-left:450px;
			background-color:#ff5c33;
		}
    </style>
    
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 <script>
        function validateForm() {
            var radios = document.getElementsByName("c1");
            var formValid = false;

            for (var i = 0; i < radios.length; i++) {
                if (radios[i].checked) {
                    formValid = true;
                    break;
                }
            }

            if (!formValid) {
                alert("Please select an option.");
                return false;
            }
            return true;
        }
    </script>

</head>
<body>



<?php
    
   $con = mysqli_connect("localhost", "root", "", "idesign");
    session_start();
    if (isset($_POST['btn'])) {
        $email = $_SESSION['email'];
        $ksize = $_POST['c1'];

        $name = "SELECT id FROM register WHERE email='$email'";
        $res = mysqli_query($con, $name);
        $ct = mysqli_fetch_row($res);
        $id = $ct[0];

        $a = "SELECT COUNT(id) FROM kitchen_cal WHERE uid=$id";
        $res1 = mysqli_query($con, $a);
        $count = mysqli_fetch_row($res1);

        if ($count[0] == '1') {
            echo "<script>alert('recorde is alredy submitted')</script>";
			
        } else {
            $sql = "INSERT INTO kitchen_cal(uid, ksize) VALUES ($id, '$ksize')";
            if (mysqli_query($con, $sql)) {
                echo "<script>alert('Recorded')</script>";
                header('Location: k2.php');
                exit(); 
            } else {
                echo "Error: " . mysqli_error($con);
            }
        }
    }
?>




	
<div class="div1">
            <h2>Pick your package</h2>
	<form method="post" onsubmit="return validateForm()">
        <div class="row g-3 ">
                <div class="col-lg-4 col-md-6">
				<div class="form-group">
						<div class="div2">
                        <div class="position-relative">
						<input type="radio" name="c1" value="L-shaped" style="margin-right:10px;">L-shaped
                            <img class="img-fluid" src="image/kitchen/k1.jpg">
                        </div>
                        </div>
                </div>
				</div>
				
				<div class="col-lg-4 col-md-6">
				<div class="form-group">
				<div class="div2">
                        <div class="position-relative">
						<input type="radio" name="c1" value="Straight" style="margin-right:10px;">Straight
                            <img class="img-fluid"  src="image/kitchen/k2.jpg" alt="">
                        </div>
					    </div>
						</div>
                </div>
				
				<div class="col-lg-4 col-md-6">
				<div class="form-group">
				<div class="div2">
                        <div class="position-relative">
						<input type="radio" name="c1" value="U-shaped" style="margin-right:10px;">U-shaped
                            <img class="img-fluid"  src="image/kitchen/k3.jpg" alt="">
                        </div>
						</div>
						</div>
                </div>
				
			<div class="col-lg-4 col-md-6">
				<div class="form-group">
					<div class="div2">
                        <div class="position-relative">
							<input type="radio" name="c1" value="Parallel" style="margin-right:10px;">Parallel
                            <img class="img-fluid"  src="image/kitchen/k4.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
				
				
		</div>
	
	
	<div style="margin-top:70px;">
	
	<nav class="navbar navbar-default navbar-fixed-bottom " style="width:750px;align:center; margin:60px 300px 0px 300px;box-shadow: 2px 4px 7px #d6d4d4;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="interior_info.php" style="color:blue;margin-left:10px;"> Back </a>

    </div>
	

    <a href="k2.php"><input type="submit" name="btn" class="btn navbar-btn"></a>
  
  
  </div>
  
  
</nav>

</div>
</form>

</div>

</body>

</html>