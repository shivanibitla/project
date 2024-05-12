<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("header.php"); ?>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","idesign");

$per_page = 5;
$start = isset($_GET['start']) ? ($_GET['start'] - 1) * $per_page : 0;

$record = mysqli_num_rows(mysqli_query($con, "SELECT * FROM sub_categories"));
$page = ceil($record / $per_page);

$sql = "SELECT * FROM sub_categories LIMIT $start, $per_page";
$res = mysqli_query($con, $sql);
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <div class="col-lg-12">
                <div class="card" style="white-space: wrap;">
                    <div class="card-body">
                        <h4 class="card-title" >Interior Details</h4>
                        <a href="../forms/sub_categories_insert.php"><button type="submit" class="btn btn-block btn-lg btn-gradient-primary mt-4 mb-4">+ insert </button></a>
                        <table class="table table-striped">
                            <thead class="btn-success">
                                <tr>
                                    <th>id</th>
                                    <th>lid</th>
                                    <th>image</th>
                                    <th>Description</th>
                                    <th>update</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <?php while($rs=mysqli_fetch_row($res)) { ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $rs[0] ?></td>
                                    <td><?php echo $rs[1] ?></td>
                                    <td><img src="../forms/allinterior/<?php echo $rs[2]?>"></td>
                                    <td><?php echo $rs[3] ?></td>
									 <td><a href="../forms/sub_categories_update.php?duid=<?php echo $rs[0]?>">update</a></td>
                                   
                                    <td><a href="../forms/sub_categories_delete.php?ddid=<?php echo $rs[0]?>">delete</a></td>
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                        <div class="col-12 mt-4">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg justify-content-center mb-0">
                                    <li class="page-item <?php if($start <= 0) echo 'disabled'; ?>">
                                        <a class="page-link" href="<?php echo $_SERVER['PHP_SELF'].'?start='.max(1, $start / $per_page); ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <?php for($i=1;$i<=$page;$i++){ ?>
                                    <li class="page-item <?php if($start == ($i-1) * $per_page) echo 'active'; ?>">
                                        <a class="page-link" href="<?php echo $_SERVER['PHP_SELF'].'?start='.$i; ?>"><?php echo $i; ?></a>
                                    </li>
                                    <?php } ?>
                                    <li class="page-item <?php if($start >= $record - $per_page) echo 'disabled'; ?>">
                                        <a class="page-link" href="<?php echo $_SERVER['PHP_SELF'].'?start='.min($page, ($start / $per_page) + 2); ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
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
<?php require("footer.php"); ?>
</body>
</html>
