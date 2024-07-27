<?php

include '../../includes/dbconn.php';

if (isset($_POST['submit'])) {
    
    $vnum = $_POST['vnum'];
    $driverid = $_POST['driverid'];
    $pp1 = $_POST['pp1'];
    $dt1 = $_POST['dt1'];
    $km1 = $_POST['km1'];
    $pp2 = $_POST['pp2'];
    $dt2 = $_POST['dt2'];
    $km2 = $_POST['km2'];
    $pp3 = $_POST['pp3'];
    $dt3 = $_POST['dt3'];
    $km3 = $_POST['km3'];
    $pp4 = $_POST['pp4'];
    $dt4 = $_POST['dt4'];
    $km4 = $_POST['km4'];
    $pp5 = $_POST['pp5'];
    $dt5 = $_POST['dt5'];
    $km5 = $_POST['km5'];
    
    $quer = "SELECT * FROM transport WHERE vnum = '$vnum' OR driverid = '$driverid' ";
    $runn = mysqli_query($db, $quer);
    if($runn){
        echo '<script type="text/javascript">alert("Vehicle Found! Adding data...")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Vehicle Not Found! Please Add it Later Adding data...")</script>';
     } 

    $query = "INSERT INTO timetransport(vnum, driverid, pp0, pp1, pp2, pp3, pp4, pt0, pt1, pt2, pt3, pt4, k0, k1, k2, k3, k4) 
    VALUES ('$vnum','$driverid','$pp1','$pp2','$pp3','$pp4','$pp5','$dt1',
    '$dt2','$dt3','$dt4','$dt5','$km1','$km2','$km3','$km4','$km5')";
    $run = mysqli_query($db, $query);
    if($run)
    {
        echo '<script type="text/javascript">alert("Vehicle Data Added Successfully")</script>';
    }

    else{
        echo "not ok";
    }
            
}


if (isset($_POST['update'])) {
    
    $vnum = $_POST['vnum'];
    $driverid = $_POST['driverid'];
    $pp1 = $_POST['pp1'];
    $dt1 = $_POST['dt1'];
    $km1 = $_POST['km1'];
    $pp2 = $_POST['pp2'];
    $dt2 = $_POST['dt2'];
    $km2 = $_POST['km2'];
    $pp3 = $_POST['pp3'];
    $dt3 = $_POST['dt3'];
    $km3 = $_POST['km3'];
    $pp4 = $_POST['pp4'];
    $dt4 = $_POST['dt4'];
    $km4 = $_POST['km4'];
    $pp5 = $_POST['pp5'];
    $dt5 = $_POST['dt5'];
    $km5 = $_POST['km5'];
    
    $quer = "SELECT * FROM transport WHERE vnum = '$vnum' OR driverid = '$driverid' ";
    $runn = mysqli_query($db, $quer);


  
    if(mysqli_num_rows($runn) > 0){
        echo '<script type="text/javascript">alert("Vehicle Found! Updating data...")</script>';
        $query = "UPDATE timetransport SET driverid='$driverid',pp0='$pp1',pp1='$pp2'
        ,pp2='$pp3',pp3='$pp4',pp4='$pp5',pt0='$dt1',pt1='$dt2',
        pt2='$dt3',pt3='$dt4',pt4='$dt5',k0='$km1',k1='$km2',k2='$km3',
        k3='$km4',k4='$km5' WHERE vnum = '$vnum'";
        echo $query;
    $run = mysqli_query($db, $query);
    if($run)
    {
        echo '<script type="text/javascript">alert("Vehicle Data Updated Successfully")</script>';
    }

    else{
        echo "not ok";
    }
    
    
    }
    else{
        echo '<script type="text/javascript">alert("Vehicle Not Found! Add it first to Update")</script>';

       echo "<script>location='managetransport.php'</script>";
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
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
        rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

    <style>
    .th {
        padding-top: 15px !important;
        margin-top: 4px;
    }

    label {
        margin-top: 5px;
        margin-left: 8px;
        margin-right: 5px;
        font-weight: bold;
    }

    .btn {
        border-radius: 30px;
        margin-left: 18px;

    }
    </style>
</head>

<body id="body-pd">
    <?php include '_transport/transportnav.php' ?>
    <?php include '_transport/transportmenu.php' ?>
    <?php include '_transport/transportcrud.php' ?></div>
    <div class="form-group">
        <div class="form-group d-flex p-4">
            <label for="" class="fw-bold p-1 ">Update/View:   </label>
            <input type="text" name="search_text" id="search_text" placeholder="Enter Vehicle Name or Number to Update"
                class="form-control" />
        </div>
    </div>

    <form action="" method="post">
        <div id="result"></div>
        <div style="clear:both"></div>
    </form>
    <form action="" method="post">
        <div class="text-center dis">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex p-2 text-center">
                        <label for="">Vehicle_Number:</label>
                        <select name="vnum" id="" class="form-control" required>
                            <?php
                            $querry = mysqli_query($db, "SELECT * FROM transport");
                            if(mysqli_num_rows($querry)>0){
                                while($row = mysqli_fetch_assoc($querry)){
                                    ?>
                            <option value="<?=$row['vnum']?>"><?=$row['vname']?><span
                                    class="text-danger fw-bolder">/</span><?=$row['vnum']?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group d-flex p-2">
                        <label for="">Driver_I'd:</label>
                        <input type="text" name="driverid" class="form-control ml-1" placeholder="Driver Id"
                           >
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Pick Point</th>
                        <th scope="col">Departure</th>
                        <th scope="col">KMs to travel</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row" class="th">Pick Point -1</th>
                        <td><input type="text" name="pp1" class="form-control" placeholder="Pick Point-1"></td>
                        <td><input type="time" name="dt1" class="form-control" placeholder="Departure Time"></td>
                        <td><input type="number" name="km1" class="form-control" placeholder="Kms to Travelled"></td>
                    </tr>

                    <tr>
                        <th scope="row" class="th">Pick Point -2</th>
                        <td><input type="text" name="pp2" class="form-control" placeholder="Pick Point-2"></td>
                        <td><input type="time" name="dt2" class="form-control" placeholder="Departure Time"></td>
                        <td><input type="number" name="km2" class="form-control" placeholder="Kms to Travelled"></td>
                    </tr>

                    <tr>
                        <th scope="row" class="th">Pick Point -3</th>
                        <td><input type="text" name="pp3" class="form-control" placeholder="Pick Point-3"></td>
                        <td><input type="time" name="dt3" class="form-control" placeholder="Departure Time"></td>
                        <td><input type="number" name="km3" class="form-control" placeholder="Kms to Travelled"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Pick Point -4</th>
                        <td><input type="text" name="pp4" class="form-control" placeholder="Pick Point-4"></td>
                        <td><input type="time" name="dt4" class="form-control" placeholder="Departure Time"></td>
                        <td><input type="number" name="km4" class="form-control" placeholder="Kms to Travelled"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Pick Point -5</th>
                        <td><input type="text" name="pp5" class="form-control" placeholder="Pick Point-5"></td>
                        <td><input type="time" name="dt5" class="form-control" placeholder="Departure Time"></td>
                        <td><input type="number" name="km5" class="form-control" placeholder="Kms to Travelled"></td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group d-flex mb-5">
                <input type="submit" name="submit" value="Submit" class="form-control btn btn-primary">
                <input type="reset" name="reset" value="Clear" class="form-control btn btn-danger">
            </div>
        </div>
    </form>


    <script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "_transport/timeroute.php",
                method: "post",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
    </script>




    </div>
    </div>


    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>