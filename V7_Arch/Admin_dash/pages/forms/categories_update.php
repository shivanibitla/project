
<?php
    include("header.php");
                      $con=mysqli_connect("localhost","root","","idesign");
					  $id=$_GET['duid'];
                      if(isset($_POST['btn']))
                      {
						$iid=$_POST['iid'];
                        $name=$_POST['name'];
						$description=$_POST['description'];

                        $filename=$_FILES['image']['name'];
                            $filesize=$_FILES['image']['size'];
                            $filetempname=$_FILES['image']['tmp_name'];
                            $filetype=$_FILES['image']['type'];
                              $filestore="img/".$filename;
                      
                              if(move_uploaded_file($filetempname,$filestore))
                              {
                          $sql="update categories set iid=$iid,image='$filename',name='$name',description='$description' where id=$id";
                          if(mysqli_query($con,$sql))
                          {
                            echo"updated" ;
                          }
                          else
                          {
                            echo"not updated".mysqli_error($con);
                          }
                        }
                        
                      }
                      ?>
					  <?php
$sql="select * from categories where id=$id";
$res=mysqli_query($con,$sql);
$rw=mysqli_fetch_row($res);
?>

                              
            <div class="col-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                        <p class="card-description"> home interior </p>
                                
                        <form method="post" enctype="multipart/form-data">
                                           
					 <div class="form-group">
                        <label for="exampleSelectGender">interior</label>
                        <select class="form-control" id="exampleSelectGender" name='iid' value="<?php echo $rw[1]; ?>">
                      <option>select interior</option>
                      <?php
                      $con=mysqli_connect("localhost","root","","idesign");
                      $sql="select * from interior";
                      $res=mysqli_query($con,$sql);
                      while($rs=mysqli_fetch_row($res))
                      {
                      ?>
                      <option value="<?php echo $rs[0];?>"><?php echo $rs[2];?></option>
                      <?php
                      }
                      ?>
                    </select>
                    </div>
                  
                             <div class="form-group">
                              <label for="exampleInputUsername1">name</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="name" value="<?php echo $rw[3];?>">
                              </div>
                              <div class="form-group">
                                <label>File upload</label>
                                   <input type="file" name="image" value="<?php echo $rw[2];?>" class="file-upload-default">
                                     <div class="input-group col-xs-12">
                                       <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                        </span>
                                     </div>
                               </div>

                            <div class="form-group">
                              <label for="exampleInputUsername1">description</label>
                              <textarea class="form-control" id="summernote" placeholder="Description" name="description" value="<?php echo $rw[4];?>"></textarea>
                            </div>
                      
                                            
                                            <button type="submit" name="btn" class="btn btn-gradient-primary me-2">Submit</button>
                                          </form>
                                
                                        </div>
                                      </div>
                                    </div>
                                                 
                             <?php
                           include("footer.php");
                           ?>