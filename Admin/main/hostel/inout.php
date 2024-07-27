<?php
  
  date_default_timezone_set("Asia/Calcutta"); 

include '../../includes/dbconn.php';
include '../../includes/functions.php';
if (isset($_POST['out'])) {
  
  $studid = strtoupper($_POST['studid']);
  $out= $_POST['outtime'];
 $outt = out($studid);
   if($outt > 5){
    $query = "INSERT INTO hostelregister(studentid,outtime) VALUES
    ('$studid','$out') " ;
   $run = mysqli_query($db, $query);
   }
   else{
    echo '<script type="text/javascript">alert("Ae chutiya! Bhoot Nikal Rhe Pahile aa jane do")</script>';
}
}

 

if(isset($_POST['in'])){
  $studid = strtoupper($_POST['studid']);
  $out = date("Y-m-d");
  $in= date("Y-m-d h:i:sa");

  $query = "UPDATE hostelregister SET intime='$in' WHERE studentid ='$studid' AND outtime LIKE '%$out%' ORDER BY id DESC";
  $run = mysqli_query($db, $query);
  if($run){
    $query1 = "UPDATE hostelregister SET intime='$in' WHERE studentid ='$studid' ORDER BY id DESC LIMIT 1";
    $run1 = mysqli_query($db, $query1);
        
    }else{
        echo 'done';
    }
 
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>University Management System</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../utility/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../../utility/css/adminlte.min.css">
    <style>
    .btn {
        margin-left: 12px;
        width: 120px;
    }
    </style>
</head>

<body id="body-pd">
    <?php include '_hostel/hostelnav.php' ?>
    <?php include '_hostel/hostelmenu.php' ?>

    <div class="container " style="width: 800px;">
        <form action="" method="post">
            <div class="form-group p-2">
                <input type="text" class="form-control" name="studid" placeholder="Enter Student Id" required>

            </div>
            <div class="form-group d-flex p-2">
                <input type="text" class="form-control" name="outtime" value="<?=date("Y-m-d h:i:sa")?>" required>
                <input type="submit" name="out" value="OUT" class="form-control btn btn-danger">

            </div>
            <div class="form-group d-flex p-2">
                <input type="text" class="form-control" name="intime" value="<?=date("Y-m-d h:i:sa")?>" required>
                <input type="submit" name="in" value="IN" class="form-control btn btn-primary">
            </div>
        </form>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <?php

	$query = "
	SELECT * FROM hostelregister ORDER BY id DESC";

$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="" style="overflow-y: auto; height:450px;">
        <table class="table text-center table-bordered table-striped table-responsive">
            <tr>
                <th>Student Id</th>
                <th>Out Time</th>
                <th>In Time</th>
                <th>Time Spend in Minutes</th>
            </tr><?php
	while($row = mysqli_fetch_array($result))
	{
		?>
            <tr>
                <td><?=$row["studentid"]?></td>
                <td><?=$row["outtime"]?></td>
                <td><?=$row["intime"]?></td>

                <?php
                $in =$row["intime"] ;
                $out =$row["outtime"] ;
                $len= strlen($in);
                $diff = countmin($out, $in);
                if($len > 5){
                ?>
                <td><?=$diff?></td>
                <?php } else { ?><td>waiting...</td><?php } ?>

            </tr>
            <?php
	}
	?>
        </table>
    </div><?php
}

?>


    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>