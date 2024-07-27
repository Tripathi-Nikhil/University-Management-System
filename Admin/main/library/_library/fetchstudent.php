<?php
  include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
    
	$query = "
	SELECT * FROM studentdetails 
	WHERE regid LIKE '%".$search."%'
	";
}
else
{

        $query = "
	SELECT * FROM studentdetails WHERE regid ";
	
}
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="card p-2">

    <?php
    $query2 = "
    SELECT * FROM fine WHERE studid LIKE '%".$row['regid']."%'";
    $run = mysqli_query($db, $query2);
    if(mysqli_num_rows($run)>0){
    $row2 = mysqli_fetch_array($run);
    $fine = $row2['fine'];}
    else{
      $fine = 0;
    }
		?>
    <div class="form-group d-flex  p-2">
        <input type="text" name="regid" class="form-control" readonly required value="<?=$row['regid']?>">
        <input type="text" name="name" class="form-control" readonly required value="<?=$row['name']?>">
        <input type="text" name="dob" class="form-control" readonly required value="<?= $row['dob']?>">
    </div>
    <div class="form-group d-flex  p-2">
        <input type="text" name="adhaar" class="form-control" readonly value="<?= $row['adhaar']?>"
            placeholder="Adhaar">
        <input type="text" name="fine" class="form-control" readonly value="<?= $fine ?>" placeholder="Fine">
        <input type="text" name="contact" class="form-control" readonly required value="<?= $row['studentcontact']?>"
            placeholder="contact">
    </div>
    <?php
	?>
</div><?php
	echo $output;
}
else
{
	echo  '<h5 class="text-danger fw-bold">Fill Student Id</h5>';
}

?>