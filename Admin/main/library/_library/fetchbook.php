<?php
  include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
    
	$query = "
	SELECT * FROM library 
	WHERE bookid LIKE '%".$search."%'
	";
}
else
{

        $query = "
	SELECT * FROM library WHERE bookid ";

	
}
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="card p-2">
    <?php
		?>
    <div class="form-group d-flex  p-2">
        <input type="text" name="bookid" class="form-control" readonly required value="<?= $row['bookid']?>">
        <input type="text" name="bookname" class="form-control" readonly required value="<?=$row['bookname']?>">
        <input type="text" name="edition" class="form-control" readonly required value="<?= $row['edition']?>">
    </div>
    <div class="form-group d-flex  p-2">
        <input type="text" name="author" class="form-control" readonly required value="<?= $row['author']?>">
        <input type="text" name="quantity" class="form-control" readonly required value="<?= $row['quantity']?>">
    </div>
    <?php
	?>
</div><?php
	echo $output;
}
else
{
	echo  '<h5 class="text-danger fw-bold">Fill Book Id</h5>';
}

?>