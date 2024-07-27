


<?php
$db = mysqli_connect("localhost", "root", "", "ums");
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
	?>    <hr class="bolder text-dark"> 
	<div class=""style="overflow-x:scroll" >
    <table class="table table-bordered table-striped">
        <tr class="text-center">
            <th>Reg. ID</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Email</th>
            <th>Branch</th>
            <th>Course</th>
            <th>View</th>
        </tr><?php
	while($row = mysqli_fetch_array($result))
	{
		?>
        <tr class="text-center">
            <td><?=$row["regid"]?></td>
            <td><?=$row["name"]?></td>
            <td><?=$row["fathername"]?></td>
            <td><?=$row["email"]?></td>
            <td><?=$row["branch"]?></td>
            <td><?=$row["course"]?></td>
            <td><a href="_stud/view.php?id=<?php echo $row["regid"]; ?>" target=""><i class="fas fa-eye text-primary"></i></a></td>
        </tr>
        <?php
	}
	?></table>
	</div><?php
	echo $output;
}
else
{
	echo '<div class="text-center fw-bold text-danger border-0">Data Not Found!</div>';
}

?>

