<?php
include '../../../includes/dbconn.php';

if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $category = $_POST['category'];
    $roomtype = $_POST['roomtype'];
    $building = $_POST['building'];
    $block = $_POST['block'];
    $status = $_POST['status'];

    $query = "INSERT INTO hostel(roomname, category, roomtype, building, block, status)
     VALUES ('$name','$category','$roomtype','$building','$block', '$status')";
    $run = mysqli_query($db, $query);
    if($run)
    {
        echo '<script type="text/javascript">alert("Add Successful")</script>';
    }

    else{
        echo "not ok";
    }
    header('location: ../hostel.php');
}



?>





<?php

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM hostel 
	WHERE regid LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM hostel ORDER BY id";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="" style="height: 350px; overflow-x:auto;">
    <table class="table table-bordered table-striped table-responsive">
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Room Type</th>
            <th>Building</th>
            <th>Block</th>
            <th>Status</th>
        </tr><?php
	while($row = mysqli_fetch_array($result))
	{
		?>
        <tr>
            <td><?=$row["roomname"]?></td>
            <td><?=$row["category"]?></td>
            <td><?=$row["roomtype"]?></td>
            <td><?=$row["building"]?></td>
            <td><?=$row["block"]?></td>
            <td><?=$row["status"]?></td>
        </tr>
        <?php
	}
	?>
    </table>
</div><?php
	echo $output;
}
else
{
	echo 'No Data!';
}

?>