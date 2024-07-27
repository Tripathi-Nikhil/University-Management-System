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
    <link rel="stylesheet" href="../../../utility/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../../../utility/css/adminlte.min.css">
</head>

<body id="body-pd">

    <style>
    .form-group {
        display: flex;

    }

    .form-group input {
        width: 80%;

    }

    .form-group label {
        width: 20%;
        font-weight: bold;
        margin-top: 5px;

    }
    </style>
    <?php
include '../../../includes/dbconn.php';
$id = $_GET['id'];
$query = "SELECT * FROM transtudent WHERE studid = '$id'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
$name = $row['studentname'];
$studid = $row['studid'];
$gender = $row['gender'];
$vnum = $row['vnum'];
$contact = $row['contact'];
$hcontact = $row['homecontact'];
$from = $row['fromm'];



?>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="form-group p-2">
                        <label for="" class="">Student Name:</label>
                        <input type="text" value="<?=$name?>" class="form-control" name="name">
                    </div>
                    <div class="form-group p-2">
                        <label for="" class="">Student Id:</label>
                        <input type="text" value="<?=$studid?>" class="form-control" name="studid">
                    </div>
                    <div class="form-group p-2">
                        <label for="" class="">Gender:</label>
                        <input type="text" value="<?=$gender?>" class="form-control" name="gender">
                    </div>
                    <div class="form-group p-2">
                        <label for="" class="">Vehicle Number:</label>
                        <input type="text" value="<?=$vnum?>" class="form-control" name="vnum">
                    </div>
                    <div class="form-group p-2">
                        <label for="" class="">From:</label>
                        <input type="text" name="fromm" class="form-control" value="<?=$from?>" readonly>
                        <!-- <select name="fromm" id="" class="form-control" style="width: 80%;">
                            <option class="text-primary fw-bold" value="<?=$from?>"><?=$from?></option>
                            <?php
                        // $result2 = mysqli_query($db, "SELECT * FROM timetransport WHERE vnum = '$vnum'");
                        // $row2 = mysqli_fetch_assoc($result2);
                        // echo $row2['vnum'];
                        ?>
                            <option value="<?=$row2['pp0']?>"><?=$row2['pp0']?></option>
                            <option value="<?=$row2['pp1']?>"><?=$row2['pp1']?></option>
                            <option value="<?=$row2['pp2']?>"><?=$row2['pp2']?></option>
                            <option value="<?=$row2['pp3']?>"><?=$row2['pp3']?></option>
                            <option value="<?=$row2['pp4']?>"><?=$row2['pp4']?></option>
                        </select> -->
                    </div>
                    <div class="form-group p-2">
                        <label for="" class="">Contact:</label>
                        <input type="text" value="<?=$contact?>" class="form-control" name="contact">
                    </div>
                    <div class="form-group p-2">
                        <label for="" class="">Home Contact:</label>
                        <input type="text" value="<?=$hcontact?>" class="form-control" name="hcontact">
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Update" name="update" class="btn-primary btn mt-2 mb-3"
                            style="border-radius: 30px; width:40%;">
                        <a onclick="goBack()" class="btn btn-danger mt-2 mb-3" style="border-radius: 30px; width:40%;">Back</a>
                    </div>
                </div>
            </div>

            <div class="col-md3"></div>
        </div>

    </form>
    <?php
    if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $studid = $_POST['studid'];
    $gender = $_POST['gender'];
    $vnum = $_POST['vnum'];
    $contact = $_POST['contact'];
    $hcontact = $_POST['hcontact'];
    $from = $_POST['fromm'];


    // date_default_timezone_set("Asia/Calcutta"); 

    // $q1 ="SELECT * FROM transtudent WHERE studid = '$studid'";
    // $r1 = mysqli_query($db, $q1);
    // $row1 = mysqli_fetch_assoc($r1);
    // $p_time = date("Y-m-d h:i:sa");
    // $s_time = $row1["stime"];
    // $fe = $row1['fees'];
    // if($fe>0){
    // $diff = strtotime($p_time) - strtotime($s_time);
    // $int= round($diff / (60 * 60 * 24));
    // $fees1 = ($fe/360)*$int;
    // }else{
    //     $fees1 = 0;
    // }
    
    
    
    // $feequery = "SELECT * FROM timetransport WHERE vnum = '$vnum'";
    // $run = mysqli_query($db, $feequery);
    // $roww = mysqli_fetch_assoc($run);
    // $pp0 = $roww['pp0'];
    // $pp1 = $roww['pp1'];
    // $pp2 = $roww['pp2'];
    // $pp3 = $roww['pp3'];
    // $pp4 = $roww['pp4'];
    // $k0 = number_format($roww['k0']);
    // $k1 = number_format($roww['k1']);
    // $k2 = number_format($roww['k2']);
    // $k3 = number_format($roww['k3']);
    // $k4 = number_format($roww['k4']);

    // if(mysqli_num_rows($run)>0){
    // $fees = 1;
    // if($from == $pp0){
    //     $fees = $k0*15*12;
    
    // }
    // elseif($from == $pp1){
    //     $fees = $k1*15*12;
    
    // }
    // elseif($from == $pp2){
    //     $fees = $k2*15*12;
    
    // }
    // elseif($from == $pp3){
    //     $fees = $k3*15*12;
    // }
    // elseif($from == $pp4){
    //     $fees = $k4*15*12;
    // }
    // } 
    // $newfee = $fees1+$fees;
    
   
     

    $query = "UPDATE transtudent SET studentname='$name',contact='$contact',
    homecontact='$hcontact',gender='$gender',vnum='$vnum',fromm='$from' WHERE studid = '$studid'";
    $run = mysqli_query($db, $query);

    if($run)
    {
    // echo ("<script LANGUAGE='JavaScript'>
    // window.alert('Succesfully Updated');
    // window.location.href='../managestudent.php';
    // </script>");

    }

    else{
    echo "not ok";
    }
    // header('location: ../managetransport.php');
    }


?>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    <script src="../../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../utility/js/adminlte.min.js"></script>
</body>

</html>