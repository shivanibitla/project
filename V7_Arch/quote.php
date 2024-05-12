<!DOCTYPE html>
<html>
<head>
    <title>Get a Quote</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        /* Add your custom styles here */
        .container {
			width:600px;
			 border:solid 2px ##f2ebeb;
            margin:50px 300px 0px 400px;
            padding-bottom:50px;
			box-shadow: 2px 4px 7px #d6d4d4;
            padding-top:20px;

        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-submit {
            background-color: #ff5c33;
            color: white;
        }
    </style>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","idesign");
session_start();
if(isset($_POST['btn']))
{
	$name=$_POST['name'];
	$userEmail=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	$project_type=$_POST['project_type'];
	
	$email = $_SESSION['email'];

	// Selecting the user's UID based on email from register table
	$uidQuery = "SELECT id FROM register WHERE email='$email'";
	$res1 = mysqli_query($con, $uidQuery);
	if(!$res1) {
		die("Error fetching UID: " . mysqli_error($con));
	}
	$ct1 = mysqli_fetch_row($res1);
	$uid = $ct1[0];

	// Selecting the categories_id based on iid from categories table
	$iid=$_GET['cid']; // Assuming you have the $iid value set somewhere in your code
	$categoriesQuery = "SELECT id FROM sub_categories WHERE lid=$iid";
	$res2 = mysqli_query($con, $categoriesQuery);
	if(!$res2) {
		die("Error fetching categories_id: " . mysqli_error($con));
	}
	$ct2 = mysqli_fetch_row($res2);
	$categories_id = $ct2[0];

	$sql = "INSERT INTO quote(uid,categories_id, name, email, phone, project_type, message) VALUES ($uid, $categories_id,'$name','$userEmail','$phone','$project_type','$message')";	
	if(mysqli_query($con, $sql))
	{
		echo "<script>
			alert('Your response has been recorded');
			window.location.href = 'index.php';
		</script>"; 
	}
	else
	{
		echo "<script>
			alert('Not Submitted! Your response has not been recorded');
		</script>".mysqli_error($con);					
	}
}
?>




    <div class="container">
        <h2>Get a Quote</h2>
        <form method="post">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Your Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="project_type">Project Type:</label>
                <select class="form-control" id="project_type" name="project_type" required>
                    <option value="">Select Project Type</option>
                    <option value="Residential">Residential</option>
                    <option value="Commercial">Commercial</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" rows="5" id="message" name="message"></textarea>
            </div>
            <button type="submit" name="btn" class="btn btn-submit">Submit</button>
        </form>
    </div>
</body>
</html>
