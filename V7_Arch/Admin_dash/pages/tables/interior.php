<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    require("header.php");
    ?>
</head>
<body>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <?php
              $con=mysqli_connect("localhost","root","","idesign");
              $sql="select * from interior";
              $res=mysqli_query($con,$sql);
              ?>
              <div class="col-lg-12">
                <div class="card">
               
                  <div class="card-body">
                 
                    <h4 class="card-title" >Contact Details</h4>
                    <a href="../forms/interior_insert.php"><button type="submit" class="btn btn-block btn-lg btn-gradient-primary mt-4" >+ Add a image</button></a>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>name</th>
                          <th>Images</th>
                          <th>Update</th>
						  <th>Delete</th>
                    
                        </tr>
                      </thead>
                      <?php
                      while($rs=mysqli_fetch_array($res))
                      {
                      ?>
                      <tbody>
                        <tr>
                          
                          <td><?php echo $rs['id'] ?></td>
                          <td><?php echo $rs['name'] ?></td>
                          <td><img src="../forms/img/<?php echo $rs['image']?>"></td>
                          <td><a href="../forms/interior_update.php?iuid=<?php echo $rs[0]?>">update</a></td>
                          <td><a href="../forms/interior_delete.php?idid=<?php echo $rs[0]?>">delete</a></td>
                          
                        
                        </tr>
                        
                         
                      </tbody>
                      <?php
                      }
                      ?>
                    </table>
                  </div>
                </div>
              </div>
              
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   <?php
   require("footer.php");
   ?>
  </body>
</html>