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
        float: left;
        margin-top: 2px;
    }

    .btn {
        border-radius: 30px;
        margin-left: 18px;

    }

    .borderless td,
    .borderless th {
        border: none;
    }
    </style>
</head>

<body id="body-pd">
    <?php include '_transport/transportnav.php' ?>
    <?php include '_transport/transportmenu.php' ?>
    <?php include '_transport/transportcrud.php' ?></div>


    <form action="transport.php" method="post">
        <div class="row p-3">
            <div class="col-md-6">
                <table class="table borderless">
                    <tbody>
                        <tr>
                            <th scope="row" class="th">Vehicle Name:</th>
                            <td><input type="text" name="vname" class="form-control"required></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Driver Name:</th>
                            <td><input type="text" name="dname" class="form-control"required></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Driver Contact:</th>
                            <td><input type="text" name="dcont" class="form-control"required></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Route:</th>
                            <td><input type="text" name="route1" class="form-control"required></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Start Time:</th>
                            <td><input type="time" name="stime" class="form-control"required></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Type:</th>
                            <td><select class="form-select" name="type">
                                    <option value="bus">Bus</option>
                                    <option value="minibus">Mini Bus</option>
                                    <option value="van">Van</option>
                                    <option value="other">Other</option>
                                    <option value="Reserved">Reserved</option>
                                </select></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6">
                <table class="table borderless">
                    <tbody>
                        <tr>
                            <th scope="row" class="th">Vehicle Number:</th>
                            <td><input type="text" name="vnum" class="form-control"required></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Driver Id:</th>
                            <td><input type="text" name="driverid" value="<?=rand(1001,9999)?>" readonly  class="form-control"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Driver Adhaar:</th>
                            <td><input type="text" name="dadhar" class="form-control"required></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Via:</th>
                            <td><input type="text" name="route2" class="form-control" placeholder="Enter Stops Seperated With Comma" required></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">End Time:</th>
                            <td><input type="time" name="etime" class="form-control"required></td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Seating Capacity:</th>
                            <td><input type="number" name="capacity" class="form-control"required></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center d-flex"><input type="reset" name="reset" value="Clear"
                    class="form-control btn btn-danger">
                <input type="submit" name="add" value="Add" class="form-control btn btn-primary">
            </div>
        </div>
    </form>

    <?php
    include '../../includes/dbconn.php';

    if (isset($_POST['add'])) {
        
        $vname = $_POST['vname'];
        $dname = $_POST['dname'];
        $dcont = $_POST['dcont'];
        $route1 = $_POST['route1'];
        $stime = $_POST['stime'];
        $type = $_POST['type'];
        
        $vnum = $_POST['vnum'];
        $driverid = strtoupper(substr($dname, 0,4)).$_POST['driverid'];
        $dadhar = $_POST['dadhar'];
        $route2 = $_POST['route2'];
        $etime = $_POST['etime'];
        $capacity = $_POST['capacity'];
    
        $query = "INSERT INTO transport( vname, vnum, dname, driverid, dcontact, 
        dadhar, route, via, stime, etime, type, capacity) VALUES (
        '$vname','$vnum','$dname','$driverid','$dcont','$dadhar','$route1',
        '$route2','$stime','$etime','$type','$capacity')";
        $run = mysqli_query($db, $query);
        if($run)
        {
            echo '<script type="text/javascript">alert("Vehicle Added Successfully")</script>';
        }
    
        else{
            echo "not ok";
        }
        // header('location: transport.php');
    }
    
    ?>


    </div>
    </div>


    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>