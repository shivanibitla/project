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
            margin:20px 160px 0px 160px;
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
        $BHK_type = $_POST['c1'];

        $name = "SELECT id FROM register WHERE email='$email'";
        $res = mysqli_query($con, $name);
        $ct = mysqli_fetch_row($res);
        $id = $ct[0];

        $a = "SELECT COUNT(id) FROM fullhome_cal WHERE uid=$id";
        $res1 = mysqli_query($con, $a);
        $count = mysqli_fetch_row($res1);

       
            $sql = "INSERT INTO fullhome_cal(uid, BHK_type) VALUES ($id, '$BHK_type')";
            if (mysqli_query($con, $sql)) {
                echo "<script>alert('Recorded')</script>";
                header('Location: f2.php');
                exit(); 
            } else {
                echo "Error: " . mysqli_error($con);
        }
    }
?>
<form method="post">
<div class="div1">
    <h2>Select your BHK type</h2>
	<p style="margin:0px 50px 0px 200px;">To know more about this, click here</p>
    <div class="div2">
        <input type="radio" name="c1" value="1 BHK" style="margin-right:10px;" required> 1 BHK
    </div>
	
	<div class="div2">
        <input type="radio" name="c1" value="2 BHK" style="margin-right:10px;" required> 2 BHK
    </div>
	
	<div class="div2">
        <input type="radio" name="c1" value="3 BHK" style="margin-right:10px;" required> 3 BHK		
    </div>
	
	<div class="div2">
        <input type="radio" name="c1" value="4 BHK" style="margin-right:10px;" required> 4 BHK
    </div>
	
	<div class="div2">
        <input type="radio" name="c1" value="5 BHK" style="margin-right:10px;" required> 5 BHK+		
    </div>
	
	<div class="nav" style="margin-top:70px;">
	<nav class="navbar navbar-default navbar-fixed-bottom " style="width:750px;align:center; margin:60px 300px 0px 300px;box-shadow: 2px 4px 7px #d6d4d4;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="interior_info.php" style="color:blue;margin-left:10px;">Back </a>

    </div>
    <button type="submit" name="btn" class="btn navbar-btn">Next</button>
  </div>
</nav>
</div>



</div>
</form>
</body>
</html>