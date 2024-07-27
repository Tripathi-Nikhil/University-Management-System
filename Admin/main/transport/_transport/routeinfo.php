

<?php
include '../../../includes/dbconn.php ';
$output = '';
if(isset($_POST["queryy"]))
{
	$search = mysqli_real_escape_string($db, $_POST["queryy"]);
	$queryy = "
	SELECT * FROM transport WHERE vname LIKE '%".$search."%'
	OR route LIKE '%".$search."%'
    OR via LIKE '%".$search."%' 
	";
}
else
{
	$queryy = "
	SELECT * FROM transport ORDER BY id";
}
$result = mysqli_query($db, $queryy);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="" >
    <select class="form-select" name="spoint"><?php
	while($row = mysqli_fetch_array($result))
	{
		?>
         <option value="<?=$row['route']?>" id="search_text1" ><?=$row['route']?></option>
        <?php
	}
	?></select>
	</div><?php
	echo $output;
}
else
{
	echo '<div class="text-center p-2 fw-bold text-danger">Enter Nearest Location</div>';
}

?>