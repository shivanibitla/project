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
            margin:40px 160px 0px 160px;
            padding:20px 0px 20px 20px;
            box-shadow: 2px 4px 7px #d6d4d4;
        }
        .div4 i{
            color:green;
            padding:10px 10px 10px 10px;
            margin-left:0px;
            font-size:17px;
        }
        img{
            height:220px;
            width:370px;
            border-radius:6px;
            margin-bottom:20px;
        }
        p{
            padding-left:30px;
            text-align:left;
        }
		.btn{
			width:150px;
			margin-left:450px;
			background-color:#ff5c33;
		}
    </style>
    
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


   <?php
    $con = mysqli_connect("localhost", "root", "", "idesign");
    session_start();
    if (isset($_POST['btn'])) {
        $email = $_SESSION['email'];
        $design = $_POST['c2'];

        $con = mysqli_connect("localhost", "root", "", "idesign");
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $name = "SELECT id FROM register WHERE email='$email'";
        $res = mysqli_query($con, $name);
        $ct = mysqli_fetch_row($res);
        $id = $ct[0];

     
       	
			
    $sql = "UPDATE kitchen_cal SET design='$design' WHERE uid=$id";
            if (mysqli_query($con, $sql)) {
                echo "<script>alert('Recorded')</script>";
                header('Location: Consultation.php');
                exit(); // Redirect and exit to prevent further execution
            } else {
                echo "Error: " . mysqli_error($con);
            }


        mysqli_close($con);
    }
?>


<div class="div1">
    <h2>Pick your package</h2>
	<form method="post">
	
	<div class="form-group">
		<div class="div2">
			<input type="radio" name="c2" value="Essential" style="margin-right:10px;"> Essential(##)
        <p>a range of essential home interior solutions that's perfect for all your needs.</p>
        
        <div class="div3">
            <img src="image/kitchen/pk1.jpg">
        </div>

        <div class="div4">
            <i class="fa fa-check"></i> Affordable pricing<br>
            <i class="fa fa-check"></i> convenient Design<br>
        </div>
		</div>
	</div>
	
	<div class="form-group">
	<div class="div2">
        <input type="radio" name="c2" value="Premium" style="margin-right:10px;"> Premium(##)
        <p>An exquisite offering with sleek fixtures, hardware, cabinets and fittings for an elegant kitchen design.</p>
        
        <div class="div3">
            <img src="image/kitchen/pk2.jpg">
        </div>

        <div class="div4">
            <i class="fa fa-check"></i>Mid-range pricing<br>
            <i class="fa fa-check"></i>Premium designs<br>
			 <i class="fa fa-check"></i>wide range of accessories<br>
        </div>
    </div>
	</div>
	
	<div class="form-group">
	
	<div class="div2">
        <input type="radio" name="c2" value="Luxe" style="margin-right:10px;">Luxe(##)
        <p>A swanky kitchen package that's a fine blend of aesthetics and high functionality with chic-looking units and accessories.</p>
        
        <div class="div3">
            <img src="image/kitchen/pk3.jpg">
        </div>

        <div class="div4">
            <i class="fa fa-check"></i>Elite princing<br>
            <i class="fa fa-check"></i>Lavish designs<br> 
			  <i class="fa fa-check"></i>Extensive range of accessories<br>
        </div>
		</div>
    </div>
	
	
	<nav class="navbar navbar-default navbar-fixed-bottom " style="width:750px;align:center; margin:60px 300px 0px 300px;box-shadow: 2px 4px 7px #d6d4d4;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="interior_info.php" style="color:blue;margin-left:10px;">Back </a>

    </div>
	 <a href="k2.php"><input type="submit" name="btn" class="btn navbar-btn">
  </div>
</nav>

</form>

</div>

</body>
</html>