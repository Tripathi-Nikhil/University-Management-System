<?php
  session_start();
  if(!isset($_SESSION['adminid']))
  {
          header("location: ../index.php");
  }

include 'includes/dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>University Management System</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    


    <link rel="stylesheet" href="utility/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="utility/css/adminlte.min.css">
</head>

<body id="body-pd" onload="startTime()">
    <?php include 'includes/dbconn.php' ?>
    <?php include 'partials/nav.php' ?>
    <?php include 'partials/menu.php' ?>

    <!--Container Main start-->
    <br>
    <?php include 'partials/cardhead.php'?>
    <div class="row">
        <div class="col-md-9">
            <?php include 'partials/students.php'?>
        </div>
        <div class="col-md-3">
            <?php include 'partials/todo.php'?>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="card shadow mt-4" style="height: 535px;">
                <div class="card-header">
                    Calender & Clock
                </div>
                <div class="card-body">
                    <div class="card border-0 text-center">
                        <h4 style="padding-top:30px;padding-bottom:30px;" class="text-center fw-bold  text-primary "
                            id="txt"></h4>
                    </div>

                    <div class="card p-2">
                        <div class="card-header bg-primary ">
                            <h4 class=" mt-2 text-center text-white fw-bold"><?=strtoupper(date("l"))?></h4>
                        </div>
                        <div class="card-body p-3" style="height: 160px;padding-top:30px;padding-bottom:30px;">
                            <h4 class=" mt-2 text-center text-primary fw-bold"><?=strtoupper(date("d"))?><?=date("S")?>
                            </h4>
                            <br>
                            <h4 class=" mt-2 text-center text-primary fw-bold"><?=strtoupper(date("F"))?></h4>
                        </div>
                        <div class="card-footer bg-primary">
                            <h4 class=" mt-2 text-center text-white fw-bold"><?=strtoupper(date("Y"))?></h4>
                        </div>
                    </div>
                </div>
                <div align="right" class="card-footer">
                    Show Time
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <?php include 'partials/teacher.php'?>
        </div>
    </div>



    <!--Container Main end-->
    <script>
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }
    </script>
    <script src="utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="utility/js/adminlte.min.js"></script>
</body>

</html>