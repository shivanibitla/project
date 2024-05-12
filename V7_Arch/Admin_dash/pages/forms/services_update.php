
<?php
    include("header.php");
                      $con=mysqli_connect("localhost","root","","idesign");
					  $id=$_GET['suid'];
                      if(isset($_POST['btn']))
                      {
						
                        $name=$_POST['name'];
						$description=$_POST['description'];

                        $logoname=$_FILES['image1']['name'];
                            $logosize=$_FILES['image1']['size'];
                            $filetempname=$_FILES['image1']['tmp_name'];
                            $logotype=$_FILES['image1']['type'];
                              $filestore="img/".$logoname;
							  
							$imgname=$_FILES['image2']['name'];
                            $imgsize=$_FILES['image2']['size'];
                            $filetempname=$_FILES['image2']['tmp_name'];
                            $imgtype=$_FILES['image2']['type'];
                              $filestore="img/".$imgname;
                      
                      
                              if(move_uploaded_file($filetempname,$filestore))
                              {
                          $sql="update services set name='$name',image1='$logoname',image2='$imgname',description='$description' where id=$id";
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
                        
<?php
$sql="select * from services where id=$id";
$res=mysqli_query($con,$sql);
$rw=mysqli_fetch_row($res);
?>						
            <div class="col-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                        <p class="card-description"> interior services</p>
                                
                        <form method="post" enctype="multipart/form-data">                             <div class="form-group">
                              <label for="exampleInputUsername1">name</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="name" value="<?php echo $rw[1]?>">
                              </div>
                              <div class="form-group">
                                <label>upload logo image</label>
                                   <input type="file" name="image1" class="file-upload-default" value="<?php echo $rw[2]?>">
                                     <div class="input-group col-xs-12">
                                       <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                        </span>
                                     </div>
                               </div>
							   <div class="form-group">
                                <label>File back image</label>
                                   <input type="file" name="image2" class="file-upload-default" value="<?php echo $rw[3]?>">
                                     <div class="input-group col-xs-12">
                                       <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                        </span>
                                     </div>
                               </div>


                            <div class="form-group">
                              <label for="exampleInputUsername1">description</label>
                              <textarea class="form-control" id="summernote" placeholder="Description" name="description" value="<?php echo $rw[4]?>"></textarea>
                            </div>
                      
                                            
                                            <button type="submit" name="btn" class="btn btn-gradient-primary me-2">Submit</button>
                                          </form>
                                
                                        </div>
                                      </div>
                                    </div>
                                                 
                             <?php
                           include("footer.php");
                           ?>