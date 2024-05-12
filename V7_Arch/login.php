<html>
  <head>
    <title>login</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link href="css/log.css" rel="stylesheet">
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","idesign");

session_start();

if(isset($_POST['btn']))
{
    $email=$_POST['email'];
    

	/*$to=$_POST['email'];
	$subject="Login successfully";
	$from="Shivani Bitla";
	$msg="Welcome to V7 Arch Studio";
	$header="From:$from";*/

$sql="select count(id) from register where email='$email'";
$res=mysqli_query($con,$sql);
$count=mysqli_fetch_row($res);

	if( $count[0]=='1')
	{
   mail($to,$subject,$msg,$headers);
    echo"welcome to user";
	
	$_SESSION['email']=$email;
   header('location:index.php');
}
else
{
    echo " <script>
                    swal('not registered!', 'user is not registred', 'error');
            </script>";

}
}
?>


	<div class="div">
		<div class="div1">
      <div class="logo">
			  <h1><img class="me-3" src="image/logo.jpg" height="30px" width="30px" alt="Icon"><font style="color:#ff5c33;"> V7 Ar</font><font style="color:#c2c2a3">ch Studio</font></h1>
      </div>
      <div class="logodiv">
        <img class="me-3 img1"  src="image/wishlist.jpg" height="50px" width="50px" alt="Icon">
        <div class="dis">
         <h3>Create a wishlist</h3>
          <p style="margin-top:-10px;">Beautiful home interiors to seek inspiration from</p>
        </div>
      </div>

      <div class="logodiv">
        <img class="me-3 img1"  src="image/catalogue.jpg" height="50px" width="50px" alt="Icon">
        <div class="dis">
         <h3>Browse catalogue</h3>
          <p style="margin-top:-10px;">Widest range of furniture, decor and modular products</p>
        </div>
      </div>

      <div class="logodiv">
        <img class="me-3 img1"  src="image/q.jpg" height="50px" width="50px" alt="Icon">
        <div class="dis">
         <h3>Get free quote</h3>
          <p style="margin-top:-10px;">Review quotes for your home interiors</p>
        </div>
      </div>

		</div>
		<div class="div2">
		  
        <div class="form">
          <h1>Sign In /Sign Up</h1>
          <form method="post">
            <input type="text" placeholder="Enter Email" name="email" class="text1"><br>
            <input type="submit" value="Continue"  name="btn" class="btn1">
			<h3 style="margin-left:50px;">don't have an account? <a href="register.php">register now</a></h3>
          </form>
        </div>
        <hr>
        <img class="me-3 img2"  src="image/or.jpg" height="50px" width="50px" alt="Icon">
        <h4 style="margin-top:-35px;
        margin-left:360px;">OR</h4>
        <img class="me-3 img3"  src="image/google.jpg" height="70px" width="70px" alt="Icon">
        <p style="text-align:center;margin-top:50px;">By signing up or signing in, you agree to the privacy <br>policy & terms and conditions</p>
		</div>
	</div>
</body>
</html>

