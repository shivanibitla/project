<?php
include("header.php");
$con=mysqli_connect("localhost","root","","idesign");
if(isset($_POST['btn']))
{
	$filename=$_FILES['image']['name'];
	    $filesize=$_FILES['image']['size'];
	    $filetempname=$_FILES['image']['tmp_name'];
	    $filetype=$_FILES['image']['type'];
        $filestore="img/".$filename;

        if(move_uploaded_file($filetempname,$filestore))
        {
		$sql="insert into gallery(image)values('$filename')";
		if(mysqli_query($con,$sql))
		{
			echo"inserted" ;
		}
		else
		{
			echo"not inserted".mysqli_error($con);
		}
	}
	
}
?>
        
              <div class="col-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
					
                    <form method="post" enctype="multipart/form-data">
                      <!--<div class="form-group">
                        
						<label>File upload</label>
                        <input type="file" name="image">
					  </div>-->
					  <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      
                      <button type="submit" name="btn" class="btn btn-gradient-primary me-2 mt-3">Submit</button>
                    </form>
					
                  </div>
                </div>
              </div>
                           
       <?php
	   include("footer.php");
	   ?>