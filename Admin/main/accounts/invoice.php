<?php session_start();
  if(!isset($_SESSION['adminid']))
  {
          header("location: /university/index.php");
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <style>
    body {
        padding: 0;
        margin: 0;
        font-family: "Times New Roman", Times, serif;
    }

    .page {
        /* width: 21cm;
        min-height: 29.7cm; */
        padding: 10px;
        align-items: center;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    @page {
        size: A4;
        margin: 0;
    }

    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
    </style>
</head>

<body onload="function()">
    <div class="" style="display: none;">
        <?php include '../../includes/dbconn.php';

        $stud = $_GET['id'];
        
    date_default_timezone_set("Asia/Calcutta");

    $run = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM accounts WHERE studid = '$stud'"));
    $total_due = $run['total_due'];
    $totalpaid = $run['totalpaid'];
    $coursefee = $run['course'];
    $hostelfee = $run['hostel'];
    $transportfee = $run['transport'];
    $libraryfee = $run['library'];

    $pay1 = $run['pay1'];
    $pay2 = $run['pay2'];
    $pay3 = $run['pay3'];
    $pay4 = $run['pay4'];
    $pay5 = $run['pay5'];
    


    $stat = $total_due - $totalpaid;
    if(($stat)==0){
        $status = '<span class="rounded p-1 text-success">Payment Done!</span>';
    } 
    if((($stat)>0)&&($stat< $total_due)){
        $status = '<span class="rounded p-1 fw-bold text-warning">Pending...!</span>';
    }
    else{
        $status = '<span class="rounded p-1 text-danger">Not Paid Yet!</span>';
    }
    
    $C_Fee = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM studentdetails WHERE regid ='$stud'"));
    $H_Fee = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM roomalloc WHERE studid ='$stud'"));
    $T_Fee = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM transtudent WHERE studid ='$stud'"));
    $L_Fine = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM fine WHERE studid ='$stud'"));
    if(($C_Fee['fees'])>0){
    $course = $C_Fee['fees'];
}else{
    $course = 0;
}
if(($L_Fine['fine'])>0){
    $library =  $L_Fine['fine'];
}else{
    $library = 0;
}
if(($H_Fee['fees'])>0){
    $hostel = $H_Fee['fees'];
}else{
    $hostel = 0;
}
if(($T_Fee['fees'])>0){
    $transport =  $T_Fee['fees'];
}else{
    $transport = 0;
}    
    ?>

    </div>

    <div class=" mt-4 p-3">
        <div class="page">
            <div class="" id="download">
                <div class="page-header">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="fw-bold">Invoice No.<?=rand(1000,9999)?></h4>
                            <small>
                                <p class="fw-bold">Student Id: <span class="text-secondary"><?=$stud?></span></p>
                                <p style="margin-top: -15px;" class="fw-bold">Issue Date: <span
                                        class="text-secondary"><?=date("D-M-Y")?></span></p>
                                <p style="margin-top: -15px;" class="fw-bold d-flex">Status: <span
                                        class=""><?=$status?></span></p>
                            </small>
                        </div>

                        <div class="col-2 text-center">
                            <img src="_accounts/logo.gif" height="100" width="100" alt="">
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class=" border col fw-bold">Fee From</div>
                        <div class=" border col fw-bold">Fee Ammount</div>
                        <div class=" border col fw-bold">Fee Paid</div>
                        <div class=" border col fw-bold">Ammount Left</div>
                    </div>
                    <div class="row">
                        <div class=" border col fw-bold">Course</div>
                        <div class="col border ">Rs. <?=$course?></div>
                        <div class="col border ">Rs. <?=$coursefee?></div>
                        <div class="col border ">Rs. <?=$a=$course-$coursefee?></div>
                    </div>

                    <div class="row">
                        <div class=" border col fw-bold">Hostel</div>
                        <div class="col border ">Rs. <?=$hostel?></div>
                        <div class="col border ">Rs. <?=$hostelfee?></div>
                        <div class="col border ">Rs. <?=$b=$hostel-$hostelfee?></div>
                    </div>
                    <div class="row">
                        <div class=" border col fw-bold">Transport</div>
                        <div class="col border ">Rs. <?=$transport?></div>
                        <div class="col border ">Rs. <?=$transportfee?></div>
                        <div class="col border ">Rs. <?=$c=$transport-$transportfee?></div>
                    </div>
                    <div class="row">
                        <div class=" border col fw-bold">Library</div>
                        <div class="col border ">Rs. <?=$library?></div>
                        <div class="col border ">Rs. <?=$libraryfee?></div>
                        <div class="col border ">Rs. <?=$d=$library-$libraryfee?></div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col fw-bold " align="right">Total: </div>
                        <div class="col border bg-secondary text-white">Rs.
                            <?=$coursefee+$hostelfee+$transportfee+$libraryfee?></div>
                        <div class="col border bg-secondary text-white">Rs. <?=$a+$b+$c+$d?></div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <p class="fw-bold" align="left">Payment Date:= <?=date("d/m/y")?></p>
                            <div class="card">
                                <div class="card-header p-0">
                                    Payment Details
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 border fw-bold">Payment 1:</div>
                                        <div class="col-7 border"><?=$pay1?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5 border fw-bold">Payment 2:</div>
                                        <div class="col-7 border"><?=$pay2?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5 border fw-bold">Payment 3:</div>
                                        <div class="col-7 border"><?=$pay3?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5 border fw-bold">Payment 4:</div>
                                        <div class="col-7 border"><?=$pay4?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5 border fw-bold">Payment 5:</div>
                                        <div class="col-7 border"><?=$pay5?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
    <script>
    window.onload = function() {
        const invoice = this.document.getElementById("download");
        console.log(invoice);
        console.log(window);
        var opt = {
            margin: 8,
            filename: 'FeeReciept.pdf'
        };
        html2pdf().from(invoice).set(opt).save();
    }
    </script>
    <script>
    setTimeout(function() {
        window.location.href = 'accounts.php';
    }, 1000);
    </script>
</body>

</html>