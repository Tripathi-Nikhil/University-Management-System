<?php
include '../../../includes/dbconn.php';
$db=mysqli_connect('localhost', 'root', '', 'ums')or die("DataBase didn't not Conected!");

if (isset($_POST['Ask'])) {
    
    $ques = $_POST['ques'];
    $exques = $_POST['exques'];
    $Ans = $_POST['Ans'];

    $querry = "INSERT INTO quesans(ques, exques, ans) VALUES ('$ques','$exques','$Ans')";
     echo $querry;
    $run1 = mysqli_query($db, $querry);
    if($run1)
    {
    
    }

    else{
        echo "not ok";
    }
    header('location: ../elibrary.php');
}



?>



<?php
include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM quesans 
	WHERE ques LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM quesans";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="">
    <table class="table table-bordered table-striped table-responsive">
        <tr class="sticky">
            <th>Ques No.</th>
            <th>Question</th>
            <th>See Answer</th>
        </tr>
        <?php
    $i=1;
	while($row = mysqli_fetch_array($result))
	{
        
		?><tr>
        <td>Ques.<?=$i?>: </td>
        <td> <?=$row["ques"]?></td>
        <td><a href="answers.php?id=<?php echo $row["ques"]; ?>"><i class="fa fa-eye text-primary"></i></a></td>
    </tr>
        <?php
    $i=$i+1;
	}
	?>
</div><?php
	echo $output;
}
else
{
	echo '<p class="fw-bold text-center p-5 mt-3">Data Not Found</p>';
}

?>