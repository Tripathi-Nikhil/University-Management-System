


<?php
  include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM fine 
	WHERE studid LIKE '%".$search."%'

	";
}
else
{
	$query = "
	SELECT * FROM fine ORDER BY studid";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="" >
    <table class="table table-bordered text-center table-striped table-responsive">
        <tr>
            <th>Student Id</th>
            <th>Ammount</th>
            <th>Pay Fine</th>
        </tr><?php
	while($row = mysqli_fetch_array($result))
	{
		?>
        <tr>
            <td><?=$row["studid"]?></td>
            <td><?=$row["fine"]?></td>
            <td><a onclick="return confirm('Confirm if Fee is Paid?')" href="payfine.php?id=<?php echo $row["studid"]; ?>"><i class="fab fa-cc-amazon-pay text-primary"> Pay Now!</i></a></td>
        </tr>
        <?php
	}
	?></table>
	</div><?php
	echo $output;
}
else
{
	echo '<h4 class="text-center fw-bold">No Fine on this Data.</h4>';
}

?>

