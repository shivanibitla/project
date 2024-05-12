
<?php
    include("header.php");
                      $con=mysqli_connect("localhost","root","","idesign");
                      if(isset($_POST['btn']))
                      {
						$iid=$_POST['iid'];
                        
						$description=$_POST['description'];

                        $filenm=$_FILES['image']['name'];
                            $filesize=$_FILES['image']['size'];
                            $filetempname=$_FILES['image']['tmp_name'];
                            $filetype=$_FILES['image']['type'];
                              $filestore="allinterior/".$filenm;
                      
                              if(move_uploaded_file($filetempname,$filestore))
                              {
                          $sql="insert into sub_categories(lid,image,description)values('$iid','$filenm','$description')";
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
                        <p class="card-description"> home interior </p>
                                
                        <form method="post" enctype="multipart/form-data">
                                           
					 <div class="form-group">
                        <label for="exampleSelectGender">interior</label>
                        <select class="form-control" id="exampleSelectGender" name='iid'>
                      <option>select interior</option>
                      <?php
                      $con=mysqli_connect("localhost","root","","idesign");
                      $sql="select * from categories";
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
                                <label>File upload</label>
                                   <input type="file" name="image" class="file-upload-default">
                                     <div class="input-group col-xs-12">
                                       <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                        </span>
                                     </div>
                               </div>

                            <div class="form-group">
                              <label for="exampleInputUsername1">description</label>
                              <textarea class="form-control" id="summernote" placeholder="Description" name="description"></textarea>
                            </div>
                      
                                            
                                            <button type="submit" name="btn" class="btn btn-gradient-primary me-2">Submit</button>
                                          </form>
                                
                                        </div>
                                      </div>
                                    </div>
                                                 
                             <?php
                           include("footer.php");
                           ?>