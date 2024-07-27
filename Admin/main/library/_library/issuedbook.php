<?php
  include '../../../includes/dbconn.php';
  include '../../../includes/functions.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
    
	$query = "
	SELECT * FROM issuebook 
	WHERE studid LIKE '%".$search."%'
	";
}
else
{

        $query = "
	SELECT * FROM issuebook WHERE studid ";

	
}
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="card p-2">
    <?php
    $d = strtotime($row['date']);
    $date1 = date("d-m-Y", $d);
    $date2 = date("d-m-Y");
    $n= countdays($date1, $date2);
    $fine =countfine($n);
    

		?>
    <div class="form-group d-flex  p-2">
        <input type="text" name="studid" class="form-control" readonly required value="<?= $row['studid']?>">
        <input type="text" name="studname" class="form-control" readonly required value="<?= $row['studname']?>">
    </div>
    <div class="form-group d-flex p-2">
        <input type="text" name="bookid" class="form-control" readonly required value="<?=$row['bookid']?>">
        <input type="text" name="author" class="form-control" readonly required value="<?= $row['author']?>">
    </div>
    <div class="form-group d-flex  p-2">
        <input type="text" name="adhaar" class="form-control" readonly required value="<?= $row['adhaar']?>">
        <input type="text" name="contact" class="form-control" readonly required value="<?= $row['contact']?>">
    </div>

    <div class="form-group d-flex  p-2">
        <input type="text" name="date" class="form-control" readonly required value="<?= $date1 ."(".$n."Days".")"?>">
        <input type="text" name="fine" class="form-control" readonly required value="<?= "Rs. ".$fine?>">
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Return" class="form-control btn-primary btn">
        <input type="reset" value="Reset" class="form-control btn btn-danger ">
    </div>



</div><?php
	echo $output;
}
else
{
	echo  '<h5 class="text-danger fw-bold">Enter Student Id</h5>';
}

?>