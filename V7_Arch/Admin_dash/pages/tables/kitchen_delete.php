<?php
$id=$_GET['fdid'];
$con=mysqli_connect("localhost","root","","idesign");

$sql="delete from kitchen_cal where id=$id";
if(mysqli_query($con,$sql))
{
	echo"deleted";
}
else
{
	echo"not deleted".mysqli_error($con);
}
?>
