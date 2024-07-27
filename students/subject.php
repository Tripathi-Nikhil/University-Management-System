<?php
include 'partials/dbconn.php';
$var_id = $_GET['id'];
session_start();
if(!isset($_SESSION['studentid']))
{
        header("location: ../index.php");
}else{
    $student_id = $_SESSION['studentid'];
}

$subinfo = "SELECT * FROM subteacher WHERE id = '$var_id'";
$subrun = mysqli_query($db, $subinfo);
$subfetch = mysqli_fetch_assoc($subrun);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UMS - Student Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="partials/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="partials/assets/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'partials/sidenav.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'partials/topnav.php'?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php $fnd = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM studentdetails WHERE regid = '$student_id'"));?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 text-uppercase">Welcome: <span
                                class="fw-bold text-primary"><?=$fnd['name']?></span></h1>
                        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-id-card-alt fa-sm text-white"> </i> <?=$student_id?></a>
                    </div>

                    <div class="row">
                    
                    <?php include 'partials/assignmentmarks.php' ?>
                    <?php include 'partials/assignments.php' ?>
                    </div>

                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; UMS - 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="partials/assets/jquery/jquery.min.js"></script>
    <script src="partials/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="partials/assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="partials/assets/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="partials/assets/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="partials/assetsjs/demo/chart-area-demo.js"></script>
    <script src="partials/assetsjs/demo/chart-pie-demo.js"></script>

</body>

</html>