<?php
include '../../../includes/dbconn.php';
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
	SELECT * FROM hostel WHERE status = 'Open'";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="" style="height:200px; overflow-x:auto" >
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
	echo '<div class="text-danger fw-bold">Sorry! No Rooms Available</div>';
}

?>
