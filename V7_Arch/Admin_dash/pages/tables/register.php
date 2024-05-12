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
              $sql="select * from register";
              $res=mysqli_query($con,$sql);
              ?>
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" >Registration Details</h4>
                    <table class="table table-striped">
                      <thead class="btn-success">
                        <tr>
                          <th>id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Phone</th>
						  <th>Delete</th>
                        </tr>
                      </thead>
                      <?php
                      while($rs=mysqli_fetch_row($res))
                      {
                      ?>
                      <tbody>
                        <tr>
                          
                          <td><?php echo $rs[0] ?></td>
                          <td><?php echo $rs[1] ?></td>
                          <td><?php echo $rs[2] ?></td>
                          <td><?php echo $rs[3] ?></td>
                          <td><?php echo $rs[4] ?></td>
                          <td><a href="register_delete.php?rdid=<?php echo $rs[0]?>"><i class="mdi mdi-delete"></a></td>
                        
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