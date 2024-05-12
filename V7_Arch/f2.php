<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interior Design Package Selection</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    body {
        background-color: #f8f8f8;
        padding-top: 50px;
    }
    .form-container {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 0 auto;
        max-width: 600px;
    }
    h2 {
        text-align: center;
        margin-bottom: 30px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .btn {
        width: 100%;
        background-color:#ff5c33;
    }
    #selectedAreas {
        margin-top: 20px;
        text-align: center;
    }
</style>
</head>
<body>

<?php
$con = mysqli_connect("localhost", "root", "", "idesign");
session_start();
if (isset($_POST['btn'])) {
    $email = $_SESSION['email'];
    $selectedRooms = $_POST['check'];
    $rooms = implode(",", $selectedRooms);

    $con = mysqli_connect("localhost", "root", "", "idesign");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $name = "SELECT id FROM register WHERE email='$email'";
    $res = mysqli_query($con, $name);
    $ct = mysqli_fetch_row($res);
    $id = $ct[0];

    // Initialize the sizes to NULL for all rooms
    $sizes = array(
        'living_size' => 'NULL',
        'bed_size' => 'NULL',
        'bath_size' => 'NULL',
        'kitchen_size' => 'NULL'
    );

    // Update the sizes for the selected rooms
    foreach ($selectedRooms as $room) {
        switch ($room) {
            case 'Living Room':
                $sizes['living_size'] = $_POST['livingroom_size'];
                break;
            case 'Bedroom':
                $sizes['bed_size'] = $_POST['bedroom_size'];
                break;
            case 'Bathroom':
                $sizes['bath_size'] = $_POST['bathroom_size'];
                break;
            case 'Kitchen':
                $sizes['kitchen_size'] = $_POST['kitchen_size'];
                break;
            default:
                // Ignore unknown rooms
                break;
        }
    }

   //Construct the SQL query
$sql = "UPDATE fullhome_cal SET rooms='$rooms'";
foreach ($sizes as $room => $size) {
    if ($size !== 'NULL') {
        $sql .= ", $room=$size";
    }
}
$sql .= " WHERE uid=$id";

if (mysqli_query($con, $sql)) {
    echo "<script>alert('Recorded')</script>";
    header('Location: f3.php');
    exit(); // Redirect and exit to prevent further execution
} else {
    echo "Error: " . mysqli_error($con);
}
}
?>

  
<div class="container">
    <div class="form-container">
        <h2>Select the rooms you'd like us to design</h2>
        <form method="post" id="designForm">
            <div class="form-group">
                <label><input type="checkbox" name="check[]" value="Living Room"> Living Room</label>
                <input type="text" name="livingroom_size" class="form-control livingroom-size" placeholder="Enter size in sq ft">
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="check[]" value="Bedroom"> Bedroom</label>
                <input type="text" name="bedroom_size" class="form-control bedroom-size" placeholder="Enter size in sq ft">
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="check[]" value="Bathroom"> Bathroom</label>
                <input type="text" name="bathroom_size" class="form-control bathroom-size" placeholder="Enter size in sq ft">
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="check[]" value="Kitchen"> Kitchen</label>
                <input type="text" name="kitchen_size" class="form-control kitchen-size" placeholder="Enter size in sq ft">
            </div>
            <div id="selectedAreas"></div>
            
            <button type="submit" name="btn" class="btn btn-primary">Next</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('input[type="checkbox"], input[type="text"]').change(function(){
            var selectedAreas = [];
            var totalAmount = 0;

            $('input[type="checkbox"]:checked').each(function(){
                var room = $(this).val();
                var size = $(this).closest('.form-group').find('input[type="text"]').val();
                selectedAreas.push(room + ": " + size);

                if (!isNaN(size) && size != "") {
                    size = parseFloat(size);
                    if (room === "Living Room") {
                        totalAmount += calculateAmount(size, 200, 250, 5000, 250, 350, 6000, 350, 500, 7000);
                    } else if (room === "Bedroom") {
                        totalAmount += calculateAmount(size, 150, 200, 8000, 200, 300, 9000);
                    } else if (room === "Bathroom") {
                        totalAmount += calculateAmount(size, 50, 100, 3000, 100, 150, 4000);
                    } else if (room === "Kitchen") {
                        totalAmount += calculateAmount(size, 70, 100, 2000, 100, 150, 2500);
                    }
                }
            });

            $('#selectedAreas').html('<h3>Selected Areas:</h3><p>' + selectedAreas.join('<br>') + '</p>');
            $('#totalAmount').val('$' + totalAmount);
        });

        function calculateAmount(size, range1Start, range1End, rate1, range2Start, range2End, rate2, range3Start, range3End, rate3) {
            if (size >= range1Start && size <= range1End) {
                return rate1;
            } else if (size >= range2Start && size <= range2End) {
                return rate2;
            } else if (size >= range3Start && size <= range3End) {
                return rate3;
            }
            return 0;
        }
    });
</script>

</body>
</html>
