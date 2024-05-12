<?php
$id=$_GET['cdid'];
$con=mysqli_connect("localhost","root","","idesign");

$sql="delete from inquery where id=$id";
if(mysqli_query($con,$sql))
{
	echo"deleted";
}
else
{
	echo"not deleted".mysqli_error($con);
}
?>
