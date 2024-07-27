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
    .form-group {
        padding: 5px;
    }

    label {
        margin-top: 5px;
        ;
        margin-left: 20px;
        margin-right: 5px;
        text-align: center;
        font-weight: bold;
    }

    .th {
        width: 25%;
    }
    </style>
</head>

<body>
    <?php include '_transport/transportnav.php' ?>
    <?php include '_transport/transportmenu.php' ?>
    <?php include '_transport/transportcrud.php' ?></div>
    <?php
include '../../includes/dbconn.php';
    $vnum = $_GET['id'];
    $result1 = mysqli_query($db, "SELECT * FROM timetransport WHERE vnum = '$vnum'");
    $result2 = mysqli_query($db, "SELECT * FROM transport WHERE vnum = '$vnum'");
    $row1 = mysqli_fetch_assoc($result1);
    $row2 = mysqli_fetch_assoc($result2);
?>
    <div class=" text-center">
        <div class="text-center" style="overflow-x: auto;">
            <table class="table table-striped table-bordered p-2">
                <thead>
                    <tr class="p-2 text-center">
                        <div class="form-group d-flex">
                            <label for="">Vehicle Number:</label>
                            <input type="text" name="vnum" value="<?=$row1['vnum']?>" class="form-control"
                                style="width:40%;" readonly>
                            <label for="">Driver I'd:</label>
                            <input type="text" name="driverid" value="<?=$row1['driverid']?>" class="form-control ml-1"
                                style="width:40%;" readonly>
                        </div>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" style="width: 30%;">Pick Point</th>
                        <th scope="col">Departure</th>
                        <th scope="col">KMs to travel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $pp0 =strtoupper($row1['pp0']);
                    $pp1 =strtoupper($row1['pp1']) ;
                    $pp2 =strtoupper($row1['pp2']);
                    $pp3 =strtoupper($row1['pp3']);
                    $pp4 =strtoupper($row1['pp4']);?>


                    <tr>
                        <th scope="row" class="th">Pick Point -1</th>
                        <td><input type="text" name="pp1" value="<?=$pp0?>" class="form-control" readonly></td>
                        <td><input type="time" name="dt1" value="<?=$row1['pt0']?>" class="form-control" readonly>
                        </td>
                        <td><input type="text" name="km1" value="<?=$row1['k0']?> kms" class="form-control" readonly>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row" class="th">Pick Point -2</th>
                        <td><input type="text" name="pp2" value="<?=$pp1?>" class="form-control" readonly></td>
                        <td><input type="time" name="dt2" value="<?=$row1['pt1']?>" class="form-control" readonly>
                        </td>
                        <td><input type="text" name="km2" value="<?=$row1['k1']?> kms" class="form-control" readonly>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row" class="th">Pick Point -3</th>
                        <td><input type="text" name="pp3" value="<?=$pp2?>" class="form-control" readonly></td>
                        <td><input type="time" name="dt3" value="<?=$row1['pt2']?>" class="form-control" readonly>
                        </td>
                        <td><input type="text" name="km3" value="<?=$row1['k2']?> kms" class="form-control" readonly>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Pick Point -4</th>
                        <td><input type="text" name="pp4" value="<?=$pp3?>" class="form-control" readonly></td>
                        <td><input type="time" name="dt4" value="<?=$row1['pt3']?>" class="form-control" readonly>
                        </td>
                        <td><input type="text" name="km4" value="<?=$row1['k3']?> kms" class="form-control" readonly>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Pick Point -5</th>
                        <td><input type="text" name="pp5" value="<?=$pp4?>" class="form-control" readonly></td>
                        <td><input type="time" name="dt5" value="<?=$row1['pt4']?>" class="form-control" readonly>
                        </td>
                        <td><input type="text" name="km5" value="<?=$row1['k4']?> kms" class="form-control" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <div class=" dis" style="overflow-y:auto; height: 360px;">
        <table class="table table-bordered table-striped">
            <tr class="text-center">
                <th>Vehicle Name</th>
                <th>Vehicle Number</th>
                <th>Driver Name</th>
                <th>Driver Id</th>
                <th>Driver Contact</th>
                <th>Driver Adhaar</th>
                <th>Route</th>
                <th>Via</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Type</th>
                <th>Capacity</th>
            </tr>
            <tr class="text-center">
                <td><?=$row2["vname"]?></td>
                <td><?=$row2["vnum"]?></td>
                <td><?=$row2["dname"]?></td>
                <td><?=$row2["driverid"]?></td>
                <td><?=$row2["dcontact"]?></td>
                <td><?=$row2["dadhar"]?></td>
                <td><?=$row2["route"]?></td>
                <td><?=$row2["via"]?></td>
                <td><?=$row2["stime"]?></td>
                <td><?=$row2["etime"]?></td>
                <td><?=$row2["type"]?></td>
                <td><?=$row2["capacity"]?></td>

            </tr>

        </table>
    </div>






    <?php 
   
    // if
    // else{
    //     echo '<div class="text-center text-danger fw-bolder">Vehicle is not Ready Yet!</div>';
    // }
?>

    </div>


    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>