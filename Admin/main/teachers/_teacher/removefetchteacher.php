


<?php
include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM teacherdetails 
	WHERE regid LIKE '%".$search."%'
	OR teachername LIKE '%".$search."%' 
	OR fathername LIKE '%".$search."%' 
	OR email LIKE '%".$search."%' 
	OR branch LIKE '%".$search."%'
	OR department LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM teacherdetails ORDER BY id";
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
            <th>Department</th>
            <th>Branch</th>
            <th>Remove</th>
        </tr><?php
	while($row = mysqli_fetch_array($result))
	{
		?>
        <tr>
            <td><?=$row["regid"]?></td>
            <td><?=$row["teachername"]?></td>
            <td><?=$row["fathername"]?></td>
            <td><?=$row["email"]?></td>
            <td><?=$row["department"]?></td>
            <td><?=$row["branch"]?></td>
            <td><a href="_teacher/remove.php?rid=<?php echo $row["regid"]; ?>"><i class="fas fa-user-times text-danger"></i></a></td>
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

