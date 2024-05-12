<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
  <!--<link rel="stylesheet" href="style.css">-->
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.div1{
            text-align:center;
             background-color:white;
			 border:solid 2px ##f2ebeb;
            margin:60px 300px 0px 300px;
            padding-bottom:50px;
			box-shadow: 2px 4px 7px #d6d4d4;
            padding-top:20px;

        }
body{
  font-family: 'poppins';
  background-color: #ECEDEF;
  color: #fff;
  line-height: 1.8;
}

a{
  text-decoration: none;
}

#container{
  margin: 30px auto;
  max-width: 430px;
  padding: 20px;
  			box-shadow: 2px 4px 7px #d6d4d4;
}

.form-wrap{
  background-color: #fff;
  padding: 15px 25px;
  color: #333;
  border-top: 4px solid #ec7a0f;
  border-radius: 05px;
}

.form-wrap h1,
.form-wrap p{
  text-align: center;
}

.form-wrap .form-group{
  margin-top: 15px;
}

.form-wrap .form-group label{
  display: block;
  color: #666;
}

.form-wrap .form-group input{
  width: 100%;
  padding: 10px;
  border: #ddd 1px solid;
  border-radius: 5px;
}

.form-wrap button{
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  background-color:#ec7a0f;
  color: #fff;
  cursor: pointer;
  border: 1px solid #ec7a0f;
  font-family: 'poppins';
  font-size: 15px;
  transition: 1s;
}

.form-wrap button:hover{
  background-color:#ec7a0f;
  transition: 1s;
}

.form-wrap .bottom-text{
  font-size: 13px;
  margin-top: 20px;
}

footer {
  text-align: center;
  margin-top: 10px;
  color: #333;
}

footer a {
  color:#ec7a0f
}

#tex{
    font-size: 12px;
    color:brown;
    text-align: left;
}

#head{
    font-size: 15px;
    color:black;
     
}
 
#tit{
    color: #053f31;
    text-align: center;
}
.form-group {
            margin-bottom: 20px;
        }
 </style> 
  <title>Registration Form Using HTML/CSS</title>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","idesign");
session_start();

$name='';
$email='';	
$phone='';	

if(isset($_POST['btn']))
{
	$name=$_POST['name'];
	$userEmail=$_POST['email'];
	$phone=$_POST['phone'];
	$sname=$_POST['sname'];
	$cname=$_POST['cname'];
	$interrior_type=$_POST['interrior_type'];
	
	$email = $_SESSION['email'];
// Selecting the user's UID based on email
$uidQuery = "SELECT id FROM register WHERE email='$email'";
$res = mysqli_query($con, $uidQuery);
$ct = mysqli_fetch_row($res);
$uid = $ct[0];

$sql = "INSERT INTO consultation(uid, name, email, phone, sname, cname ,interrior_type) VALUES ($uid, '$name', '$userEmail', '$phone', '$sname', '$cname','$interrior_type')";	
	if(mysqli_query($con,$sql))
	{
		echo "<script>
			alert('Your response has been recorded');
			window.location.href = 'index.php';
		</script>"; 
	}
	else
	{
			echo "<script>
                    swal('Not Submitted!', 'Your response has not been recorded', 'error');
                    </script>".mysqli_error($con);
					
	}

  session_start();
  if(isset($_SESSION['email'])) {
      $email=$_SESSION['email'];
  
      $namequery="select * from register where email='$email'";
      $res1=mysqli_query($con,$namequery);
      $rw1=mysqli_fetch_row($res1);
      $name=$rw1[1];
      $email=$rw1[2];	
      $phone=$rw1[4];	
  } 
  else {
      $name = '';
      $email = '';
      $phone = '';
  }
  

}

?>

<div class="div1">
    <div id="container">
        <!-- Form Wrap Start -->
        <div class="form-wrap">
          <h2 align="center">Talk to a designer</h2>
          <p id="tit">It's Free and Only takes a minute</p>
          <!-- Form Start -->
          <form action="" method="post">
            <div class="form-group">
              <input type="text" name="name"  value="<?php echo $name ?>" id="first-name" placeholder="Name">
              <p for="first-name" id="tex">Please enter your name</p>
              
            </div>             
            <div class="form-group">
              <input type="email" name="email" value="<?php echo $email ?>" id="email" placeholder="Email ID">
              <p for="email" id="tex">Please enter your email address</p>              
            </div>
            <div class="form-group">              
              <input type="text" name="phone" id="first-name" value="<?php echo $phone ?>" placeholder="Phone number">
              <p for="phone" id="tex">Please enter your mobile number</p>
            </div>
           
            <div class="form-group">              
              <input type="text" name="sname" id="first-name" placeholder="State Name">
              <p for="sname" id="tex">State name</p>
            </div>
			
			<div class="form-group">              
              <input type="text" name="cname" id="first-name" placeholder="City Name">
              <p for="cname" id="tex">City</p>
            </div>
			
			<div class="form-group">
                <label for="project_type">Project Type:</label>
                <select class="form-control" id="project_type" name="interrior_type" required>
                    <option value="Full Home Interrior">Full Home Interrior</option>
                    <option value="Kitchen Interrior">Kitchen interrior</option>
                </select>
            </div>
			
            <button type="submit" name="btn">Book free Consultation</button>
            <p class="bottom-text" id="head">
              By Clicking the Sign Up Button
            </p>
          </form>
          <!-- Form Close -->
        </div>
        <!-- Form Wrap Close -->
        <footer>
          <p id="head">Already Have an Account? <a href="login.php">Login Here</a></p>
        </footer>
    </div>
      <!-- Container Close -->
</div>


</body>
</html>