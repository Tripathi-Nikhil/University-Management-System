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
    .list-unstyled ul {
        border-radius: 30px;
        margin-top: 0px;
        background: #fff;
        color: #000;
    }

    .list-unstyled li {
        padding: 12px;
        cursor: pointer;
        color: black;
    }

    li:hover {
        background: whitesmoke;
    }
    </style>
</head>

<body id="body-pd">

    <?php include '_attendance/attendancenav.php' ?>
    <?php include '_attendance/sidenav.php' ?>
    <?php include '../../includes/dbconn.php' ?>

    <br>
    <?php 
     $run = mysqli_query($db, "SELECT * FROM teacherdetails");
     ?>

    <div class="card ">
        <form action="attsub.php" method="POST">
            <table class="table user-table">
                <thead>
                    <tr class="p-2">
                        <th class="border-top-0">Img</th>
                        <th class="border-top-0">Registration Id</th>
                        <th class="border-top-0">Name</th>
                        <th class="border-top-0">Department</th>
                        <th class="border-top-0">Gender</th>
                        <th class="border-top-0">Email</th>
                        <th class="border-top-0">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

               while($var=mysqli_fetch_assoc($run))

            {
            ?>
                    <tr class="text-center" style="position:relative;">
                        <td><img src="../teachers/img/<?=$var['image']?>" alt=""
                                class=" border rounded-circle img-thumbnail" style="width:50px; height:50px"></td>
                        <td><input name='regid[]' type=text value="<?= $var['regid'] ?>"
                                style="border:none;background-color: transparent;"></td>
                        <td><input name='name[]' type=text value="<?= $var['teachername'] ?>"
                                style="border:none;background-color: transparent;"></td>
                        <td><input name='s_name[]' type=text value="<?= $var['department'] ?>"
                                style="border:none;background-color: transparent;"></td>
                        <td><input name='gender[]' type=text value="<?= $var['gender'] ?>"
                                style="border:none;background-color: transparent;"></td>
                        <td><input name='email[]' type=text value="<?= $var['email'] ?>"
                                style="border:none;background-color: transparent;"></td>
                        <input name='date[]' type=hidden value="<?= date("d/m/Y"); ?>"
                            style="border:none;background-color: transparent;">
                        <td>
                            <select name=attendance_status[] class="form-control" id=attendance_status>
                                <option value="" disabled>Select</option>
                                <option value='Present' selected>Present</option>
                                <option value='Absent'>Absent</option>
                            </select>
                        </td>
                    </tr>
                    <?php
          }
          
 ?>
                </tbody>
            </table>
            <center> <input type=submit class="btn btn-success" name="submit" value=Submit></center>


        </form>
        <!-- <div class="mt-3 p-3">
            <input type="text" class="form-control" name="search" id="searchid"
                placeholder="Enter Students Registration Id" autocomplete="off">
            <div id="search"></div>
        </div> -->

        <div class="form-group d-flex p-4">
            <input type="text" name="search_text" id="search_text" placeholder="Search by Students Details"
                class="form-control" />
        </div>
        <div id="result" style="height: 500px; overflow-x:auto;"></div>
        <div style="clear:both"></div>

        <?php   $query = "
    SELECT * FROM studentdetails";
    $result = mysqli_query($db, $query);

    ?>


        <?php   

include('../../conn/conn.php');

if(isset($_POST['submit']))
{

     $regid=$_POST["regid"];
    $ids    = $_POST["name"];
    $s_name=$_POST["s_name"];
    $gender=$_POST["gender"];
    $date=$_POST['date'];
    $status = $_POST["attendance_status"];

    $sql = "insert into attendance(regid,adm_no,s_name,gender,date,status) values";

    foreach ($ids as $key => $value) {
        $sql .= "('$regid[$key]','$ids[$key]','$s_name[$key]','$gender[$key]','$date[$key]','$status[$key]'),";
    }

    $sql = rtrim($sql, ',');

    $qry=mysqli_query($conn,$sql);

    if($qry)
    {
       ?>
        <script>
        alert("Today Attendance Successfully Submitted !! ");
        window.location.href = 'attendence.php';
        </script>
        <?php
    }

    else
    {
       ?>
        <script>
        alert("Something Error !! ");
        window.location.href = 'attendence.php';
        </script>
        <?php
    }


}

 ?>

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
        <script src="../../utility/js/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../utility/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>