<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("header.php"); ?>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","idesign");

$per_page=4;
$start=0;
if(isset($_GET['start'])){
    $start=$_GET['start'];
    $start--;
    $start=$start*$per_page;
}

$record=mysqli_num_rows(mysqli_query($con,"select * from categories"));
$page=ceil($record/$per_page);

$sql="select * from categories limit $start,$per_page";
$res=mysqli_query($con,$sql);
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <div class="col-lg-12">
                <div class="card" style="white-space: wrap;">
                    <div class="card-body">
                        <h4 class="card-title text-center">Home interior Details</h4>
                        <a href="../forms/categories_insert.php"><button type="submit" class="btn btn-block btn-lg btn-gradient-primary mt-4 mb-4">+ insert categories</button></a>
                        <table class="table table-striped">
                            <thead class="btn-success">
                            <tr>
                                <th>id</th>
                                <th>image</th>
                                <th>name</th>
                                <th>Description</th>
                                <th>update</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while($rs=mysqli_fetch_row($res))
                            {
                                ?>
                                <tr>
                                    <td><?php echo $rs[0] ?></td>
                                    <td><img src="../forms/img/<?php echo $rs[1]?>"></td>
                                    <td><?php echo $rs[2] ?></td>
                                    <td><?php echo $rs[3] ?></td>
                                    <td><a href="../forms/categories_update.php?duid=<?php echo $rs[0]?>">update</a></td>
                                    <td><a href="../forms/categories_delete.php?ddid=<?php echo $rs[0]?>">delete</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>

                        <div class="col-12 mt-4">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg justify-content-center mb-0">
                                    <li class="page-item <?php if($start <= 0) echo 'disabled'; ?>">
                                        <a class="page-link" href="?start=<?php echo max(1, $start / $per_page); ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <?php for($i=1;$i<=$page;$i++){?>
                                        <li class="page-item <?php if($start == ($i-1) * $per_page) echo 'active'; ?>">
                                            <a class="page-link" href="?start=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        </li>
                                    <?php } ?>
                                    <li class="page-item <?php if($start >= $record - $per_page) echo 'disabled'; ?>">
                                        <a class="page-link" href="?start=<?php echo min($page, ($start / $per_page) + 2); ?>" aria-label="Next">
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
        <?php require("footer.php"); ?>
    </div>
</div>
</body>
</html>
