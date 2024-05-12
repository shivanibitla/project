<?php
$id=$_GET['gdid'];
$con=mysqli_connect("localhost","root","","idesign");
		$sql="delete from gallery where id=$id";
		if(mysqli_query($con,$sql))
		{
			echo"delete" ;
		}
		else
		{
			echo"not delete".mysqli_error($con);
		}
	
?>
        
           