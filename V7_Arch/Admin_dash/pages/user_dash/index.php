<?php
session_start();
$con=mysqli_connect("localhost","root","","idesign");
$email=$_SESSION['email'];
$namequery="select * from register where email='$email'";
$res1=mysqli_query($con,$namequery);
$rw1=mysqli_fetch_row($res1);
$name=$rw1[1];
include("header.php");
?>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
         
    <div class="page-header">
        <?php

          $con=mysqli_connect("localhost","root","","idesign");
          //$email=$_SESSION['email'];
          $namequery="select id from register where email='$email'";
          $res=mysqli_query($con,$namequery);
          $ct=mysqli_fetch_row($res);
      $id=$ct[0];


        $a="select * from register where id=$id" ;
        $res1=mysqli_query($con,$a);
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
                                <th>image</th>
                            </tr>
                        </thead>
                        <?php
                        while($rs=mysqli_fetch_row($res1))
                        {
                        ?>
                        <tbody>
                            <tr>

                                <td><?php echo $rs[0] ?></td>
                                <td><?php echo $rs[1] ?></td>
                                <td><?php echo $rs[2] ?></td>
                                <td><?php echo $rs[3] ?></td>
                                <td><?php echo $rs[4] ?></td>
                                <td><img src="<?php echo $rs[4] ?>"></td>
                            </tr>


                        </tbody>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
<div class="page-header">
        <?php
        $a="select * from fullhome_cal where uid=$id" ;
        $res1=mysqli_query($con,$a);
        ?>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" >Full Home Calculation</h4>
                    <table class="table table-striped">
                        <thead class="btn-success">
                            <tr>
                                <th>user id</th>
                                <th>BHK type</th>
                                <th>Rooms</th>
                                <th>Pack</th>
                            </tr>
                        </thead>
                        <?php
                        while($rs=mysqli_fetch_row($res1))
                        {
                        ?>
                        <tbody>
                            <tr>

                                <td><?php echo $rs[1] ?></td>
                                <td><?php echo $rs[2] ?></td>
                                <td><?php echo $rs[3] ?></td>
                                <td><?php echo $rs[4] ?></td>
                                
                            </tr>


                        </tbody>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="page-header">
        <?php
        $a="select * from kitchen_cal where uid=$id" ;
        $res1=mysqli_query($con,$a);
        ?>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" >kitchen Calculation</h4>
                    <table class="table table-striped">
                        <thead class="btn-success">
                            <tr>
                                <th>user id</th>
                                <th>kitchen size</th>
                                <th>pack</th>
                                
                            </tr>
                        </thead>
                        <?php
                        while($rs=mysqli_fetch_row($res1))
                        {
                        ?>
                        <tbody>
                            <tr>

                                <td><?php echo $rs[1] ?></td>
                                <td><?php echo $rs[2] ?></td>
                                <td><?php echo $rs[3] ?></td>
                               
                                
                            </tr>


                        </tbody>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
                      </div>

</div>



                </div>

              
    <?php
    require("footer.php");
    ?>
</body>
</html>
