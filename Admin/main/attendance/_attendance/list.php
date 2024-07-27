<?php
include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM attendance_teacher 
	WHERE teacherid LIKE '%".$search."%'
	OR teachername LIKE '%".$search."%' 
	OR filter_date LIKE '%".$search."%'
    OR department LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM attendance_teacher";
}
$result = mysqli_query($db, $query);
if($result){
if(mysqli_num_rows($result) > 0)
{
	?> <div class="table-responsive">
    <table class="table text-center table-hover mt-2 table-dark">
        <tr class="bg-light sticky-top">
            <th>Id</th>
            <th>Image</th>
            <th>Reg. Id</th>
            <th>Name</th>
            <th>Department</th>
            <th>Punch In</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        $i=0;
	while($row = mysqli_fetch_array($result))
	{  
        $teacher = $row['teacherid'];
        $img = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM teacherdetails WHERE regid = '$teacher'"));
            $i=$i+1;
		?>
        <tr class="">
            <td class=""><?=$i?></td>
            <td><img src="../teachers/img/<?=$img["image"]?>" class="img-thumbnail rounded-circle img-avtaar" alt=""style="width:55px;height:55px;"></td>
            <td style="vertical-align: middle;"><?=$row["teacherid"]?></td>
            <td style="vertical-align: middle;"><?=$row["teachername"]?></td>
            <td style="vertical-align: middle;"><?=$row["department"]?></td>
            <td style="vertical-align: middle;"><?=$row["date"]?></td>
            <td style="vertical-align: middle;"><?=$row["filter_date"]?></td>
            <td style="vertical-align: middle;"><?php
            if($row['status']==0){
                echo '<div class="text-warning text-center">Pending!</div>';
            }elseif($row['status']==1){
                echo '<div class="text-success text-center">Present!</div>';
            }else{
                echo '<div class="text-danger text-center">Not Taken!</div>';
            }
            ?></td>
            <td style="vertical-align: middle;"><button class="present btn-sm border-0 btn-transition btn btn-outline-success" data-id="<?=$row['id']?>"
                style="border-radius:30px"><i class=" fa fa-check"></i></button>
                <button class="deny btn-sm border-0 btn-transition btn btn-outline-danger" data-id="<?=$row['id']?>"
                style="border-radius:30px"><i class=" fa fa-times"></i></button></td>
        </tr>
        <?php
	}
	?>
    </table>
</div><?php
	echo $output;
}
}
else
{
	echo '<div class="text-danger text-center mb-3 fw-bold">Data Not Found!</div>';
}

?>