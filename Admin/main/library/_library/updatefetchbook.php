


<?php
  include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM library 
	WHERE bookid LIKE '%".$search."%'
	OR bookname LIKE '%".$search."%' 
	OR edition LIKE '%".$search."%' 
	OR author LIKE '%".$search."%' 
	OR category LIKE '%".$search."%'
	OR branch LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM library ORDER BY bookid";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="" >
    <table class="table table-bordered table-striped table-responsive">
        <tr>
            <th>Book Id</th>
            <th>Book Name</th>
            <th>Edition</th>
            <th>Author</th>
            <th>Category</th>
            <th>Branch</th>
            <th>Update</th>
        </tr><?php
	while($row = mysqli_fetch_array($result))
	{
		?>
        <tr>
            <td><?=$row["bookid"]?></td>
            <td><?=$row["bookname"]?></td>
            <td><?=$row["edition"]?></td>
            <td><?=$row["author"]?></td>
            <td><?=$row["category"]?></td>
            <td><?=$row["branch"]?></td>
            <td><a href="update.php?id=<?php echo $row["bookid"]; ?>"><i class="fa fa-book-reader text-primary"></i></a></td>
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

