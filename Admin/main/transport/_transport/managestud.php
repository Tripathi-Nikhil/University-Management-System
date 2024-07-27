<?php
$db = mysqli_connect("localhost", "root", "", "ums");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM transtudent 
	WHERE studid LIKE '%".$search."%'
	OR studentname LIKE '%".$search."%' 
	OR vnum LIKE '%".$search."%' 
	OR fromm LIKE '%".$search."%' 
	OR gender LIKE '%".$search."%'
	OR contact LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM transtudent ";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="" style="overflow-x:auto; height: 345px;">
    <table class="table table-bordered table-striped">
        <tr class="text-center sticky-top bg-dark text-white">
            <th>Student Name</th>
            <th>Student Id</th>
            <th>Contact</th>
            <th>Home Contact</th>
            <th>Gender</th>
            <th>Vehicle Number</th>
            <th>From</th>
            <th>Update</th>
            <th>Remove</th>

        </tr><?php
	while($row = mysqli_fetch_array($result))
	{
		?>
        <tr class="text-center">
            <td><?=$row["studentname"]?></td>
            <td><?=$row["studid"]?></td>
            <td><?=$row["contact"]?></td>
            <td><?=$row["homecontact"]?></td>
            <td><?=$row["gender"]?></td>
            <td><?=$row["vnum"]?></td>
            <td><?=$row["fromm"]?></td>
            <td><a href="_transport/update.php?id=<?php echo $row["studid"]; ?>"><i
                        class="fas fa-user-edit text-primary"></i></a></td>
            <td><a href="_transport/remove.php?id=<?php echo $row["studid"]; ?>"><i
                        class="fas fa-user-times text-danger"></i></a></td>
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
	echo '<div class="text-danger fw-bold p-2 text-center">Data Not Found!</div>';
}

?>