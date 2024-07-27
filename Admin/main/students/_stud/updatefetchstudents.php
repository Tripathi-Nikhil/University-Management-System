


<?php
include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM studentdetails 
	WHERE regid LIKE '%".$search."%'
	OR name LIKE '%".$search."%' 
	OR fathername LIKE '%".$search."%' 
	OR email LIKE '%".$search."%' 
	OR branch LIKE '%".$search."%'
	OR course LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM studentdetails ORDER BY id";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="" >
    <table class="table table-bordered table-striped table-responsive">
        <tr>
            <th>Reg. ID</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Email</th>
            <th>Branch</th>
            <th>Course</th>
            <th>Update</th>
        </tr><?php
	while($row = mysqli_fetch_array($result))
	{
		?>
        <tr>
            <td><?=$row["regid"]?></td>
            <td><?=$row["name"]?></td>
            <td><?=$row["fathername"]?></td>
            <td><?=$row["email"]?></td>
            <td><?=$row["branch"]?></td>
            <td><?=$row["course"]?></td>
            <td><a href="update.php?id=<?php echo $row["regid"]; ?>"><i class="fas fa-user-edit text-primary"></i></a></td>
        </tr>
        <?php
	}
	?></table>
	</div><?php
	echo $output;
}
else
{
	echo 'Data Not Found';
}

?>

