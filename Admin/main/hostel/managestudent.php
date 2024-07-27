<?php
include '../../includes/dbconn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo '<script>alert("This Data is Deleted! & cannot be undone");</script>';
    
    $upquery = "UPDATE hostel SET status='Open' WHERE roomname = '$id' ";
    $run3 = mysqli_query($db, $upquery);
    $delquery = "DELETE FROM roomalloc WHERE roomname = '$id'";
	$run = mysqli_query($db, $delquery);
    if($run3){
        echo '<script>alert("Room Status Updated!");</script>';
    }
//     header('location: managestudent.php');
}


if(isset($_GET['upid'])){
    echo '<script>alert("This Data is Secured and Cannot be Updated");</script>';
    header('location: managestudent.php');
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>University Management System</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../utility/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../../utility/css/adminlte.min.css">
    <style>

    </style>
</head>

<body id="body-pd">
    <?php include '_hostel/hostelnav.php' ?>
    <?php include '_hostel/hostelmenu.php' ?>
    <?php include '_hostel/hostelcrud.php' ?>
    </div>
    </div>
    <?php
include '../../includes/dbconn.php';

	$query = "
	SELECT * FROM roomalloc ORDER BY id DESC";
$result = mysqli_query($db, $query);
?> <div class=" table-responsive" style="overflow-x:auto;overflow-y:auto;">
        <table class="table table-bordered table-striped" style="width:max-content;">
            <tr class="text-center">
                <th>Student Id</th>
                <th>Name</th>
                <th>Mother's Name</th>
                <th>Father's Name</th>
                <th>Gender</th>
                <th>Adhaar Number</th>
                <th>Local Address</th>
                <th>Permanent Address</th>
                <th>City</th>
                <th>State</th>
                <th>Student's Phone</th>
                <th>Father's Phone</th>
                <th>Room Name</th>
                <th>Fees</th>
                <th>Deallocate</th>
                <th>update</th>
            </tr><?php
if(mysqli_num_rows($result) > 0)
{
	
	while($row = mysqli_fetch_array($result))
	{
		?>
            <tr class="text-center">
                <td><?=$row["studid"]?></td>
                <td><?=$row["name"]?></td>
                <td><?=$row["fathername"]?></td>
                <td><?=$row["mothername"]?></td>
                <td><?=$row["gender"]?></td>
                <td><?=$row["adhaar"]?></td>
                <td><?=$row["laddress"]?></td>
                <td><?=$row["paddress"]?></td>
                <td><?=$row["city"]?></td>
                <td><?=$row["state"]?></td>
                <td><?=$row["studentphone"]?></td>
                <td><?=$row["fatherphone"]?></td>
                <td><?=$row["roomname"]?></td>
                <td><?=$row["fees"]?></td>
                <td><a href="managestudent.php?id=<?=$row["roomname"]?>"
                        onclick="return confirm( '<?=$row['studid']?> will be deleted! Please Confirm');">
                        <i class="fa fa-user-times text-danger "></i></a>
                </td>
                <td><a href="managestudent.php?upid=<?=$row["studid"]?>"
                        onclick="return confirm( '<?=$row['studid']?> Data is Confidential & cannot be Uploaded');">
                        <i class="fa fa-user-edit text-primary "></i></a>
                </td>
            </tr>
            <?php
	}
	?>
        </table>
    </div><?php
}?>



    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>