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
    <link rel="stylesheet" href="../../../utility/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../../../utility/css/adminlte.min.css">
    <style>
    body {
        margin: 0;
        padding: 0;
    }
    </style>
</head>

<body>





    <div class="" style="display: none;">
        <?php

            include '../../../includes/dbconn.php';
            $updateid = $_GET['id'];

            $C_Fee = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM studentdetails WHERE regid ='$updateid'"));
            $H_Fee = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM roomalloc WHERE studid ='$updateid'"));
            $T_Fee = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM transtudent WHERE studid ='$updateid'"));
            $L_Fine = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM fine WHERE studid ='$updateid'"));
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
        $Total_Fee = $course + $hostel + $library + $transport;

        $feerec = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM accounts WHERE studid ='$updateid'"));
        if(($feerec['course'])>0){
            $crec = $feerec['course'];
        }else{
            $crec = 0;
        }
        if(($feerec['hostel'])>0){
            $hrec = $feerec['hostel'];
        }else{
            $hrec = 0;
        }
        if(($feerec['transport'])>0){
            $trec = $feerec['transport'];
        }else{
            $trec = 0;
        }
        if(($feerec['library'])>0){
            $lrec = $feerec['library'];
        }else{
            $lrec = 0;
        }
        
        ?>

    </div>

    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                Fee Details of <?=$updateid?>
            </div>
            <div class="card-body">
                <div class="card-header">
                    Fees for <?=$updateid?>
                </div>
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">Section</th>
                            <th scope="col">Total Fees</th>
                            <th scope="col">Paid</th>
                            <th scope="col" width="20%">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-secondary">Course Fee</th>
                            <td>Rs. <?=$course?></td>
                            <td><?=$crec?></td>
                            <?php $amt = $course - $crec ?>
                            <td><?=getstatus($amt, $course)?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-secondary">Hostel Fee</th>
                            <td>Rs. <?=$hostel?></td>
                            <td><?=$hrec?></td>
                            <?php $amth = $hostel - $hrec ?>
                            <td><?=getstatus($amth, $hostel)?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-secondary">Transport Fee</th>
                            <td>Rs. <?=$transport?></td>
                            <td><?=$trec?></td>
                            <?php $amtt = $transport - $trec ?>
                            <td><?=getstatus($amtt, $transport)?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-secondary">Library Fine</th>
                            <td>Rs. <?=$library?></td>
                            <td><?=$lrec?></td>
                            <?php $amtl = $library - $lrec ?>
                            <td><?=getstatus($amtl, $library)?></td>
                        </tr>
                    </tbody>
                </table>
            </div>



            <div class="container">
                <div class="card mb-3">
                    <div class="card-header">
                        Payment Details <?=$updateid?>
                        <a href="../invoice.php?id=<?php echo $updateid?>" target="_blank"><i
                                class="fas fa-print text-danger" style="float: right;"></i></a>
                    </div>
                    <div class="" style="display: none;">
                        <?php
                        $payqrun = mysqli_query($db, "SELECT * FROM accounts WHERE studid = '$updateid'");
                    $payq = mysqli_fetch_assoc($payqrun);
                    if(($payq['last_pay'])>0){
                        $last_pay = $payq['fees'];
                    }else{
                        $last_pay = 0;
                    } 
                    if(($payq['totalpaid'])>0){
                        $totalpaid = $payq['totalpaid'];
                    }else{
                        $totalpaid = 0;
                    } 
                    if(($payq['pay5'])>0){
                        $lastpaid = $payq['pay5'];
                    }
                    elseif(($payq['pay4'])>0){
                        $lastpaid = $payq['pay4'];
                    }elseif(($payq['pay3'])>0){
                        $lastpaid = $payq['pay3'];
                    }elseif(($payq['pay2'])>0){
                        $lastpaid = $payq['pay2'];
                    }elseif(($payq['pay1'])>0){
                        $lastpaid = $payq['pay1'];
                    }else{
                        $lastpaid = '';
                    }      
                    
                    $ammountleft= $Total_Fee-$totalpaid;
                    ?>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group p-2">
                                <label for="">Total Ammount in Rs.</label>
                                <input type="text" name="total" class="form-control" value="<?=$Total_Fee?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group p-2">
                                <label for="">Ammount Paid in Rs/time</label>
                                <input type="text" name="paid" class="form-control" value="<?=$totalpaid?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group p-2">
                                <label for="">Last Paid in Rs.</label>
                                <input type="text" name="last_pay" class="form-control" value="<?=$lastpaid?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group p-2">
                                <label for="">Ammount Left in Rs.</label>
                                <input type="text" name="amt_left" class="form-control" value="<?=$ammountleft?>"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <div class=" text-center" style="height: fit-content;">
                        <p class="fw-bold p-2 mt-2">Payment Status:
                            <!-- <td>getstatus($ammountleft, $Total_Fee)</td> -->
                            <?php 
                                if($ammountleft == 0){
                                    echo '<span class="btn btn-success fw-bolder ">Payment Completed!</span>';
                                }elseif(($ammountleft>0)&&($ammountleft<$Total_Fee)){
                                    echo '<span class="btn btn-warning fw-bolder ">Payment Pending...!</span>';
                                }elseif($ammountleft == $Total_Fee){
                                    echo '<span class="btn btn-danger fw-bolder ">Payment Not Done Yet!</span>';
                                }else{
                                    echo 'error';
                                }
                            ?>
                        </p>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="card mb-3">
                    <div class="card-header">
                        Fee Payment : <?=$updateid?>
                    </div>
                    <form action="pay.php" method="post">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group p-2">
                                            <label for="">Total Ammount in Rs.</label>
                                            <input type="text" name="total" class="form-control" value="<?=$Total_Fee?>"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group p-2">
                                            <label for="">Ammount Left in Rs.</label>
                                            <input type="text" name="amt_left" class="form-control"
                                                value="<?=$ammountleft?>" readonly>
                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="form-group p-2">
                                            <label for="inlineFormInputGroup">Course Fee</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Rs. <?=$amt?></div>
                                                </div>
                                                <input type="number" name="cfee" class="form-control"
                                                    placeholder="Ammount to pay" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group p-2">
                                            <label for="inlineFormInputGroup">Hostel Fees</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Rs. <?=$amth?></div>
                                                </div>
                                                <input type="number" name="hfee" class="form-control"
                                                    placeholder="Ammount to pay" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group p-2">
                                            <label for="inlineFormInputGroup">Transport Fee</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Rs. <?=$amtt?></div>
                                                </div>
                                                <input type="number" name="tfee" class="form-control"
                                                    placeholder="Ammount to pay" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group p-2">
                                            <label for="inlineFormInputGroup">Library Fine</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Rs. <?=$amtl?></div>
                                                </div>
                                                <input type="number" name="lfee" class="form-control"
                                                    placeholder="Ammount to pay" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="col ">
                                    <div class="form-group p-2">
                                        <label for="">Payment Method:</label>
                                        <select name="pay_method" class="form-control" id="">
                                            <option value="">Choose One!</option>
                                            <option value="Cash">Cash</option>
                                            <option value="UPI">UPI</option>
                                            <option value="PayTm">PayTm</option>
                                            <option value="PhonePay">PhonePay</option>
                                            <option value="Amazon Pay">Amazon Pay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col mt-2">
                                    <div class="form-group p-2">
                                        <label for="">Submit Fees:</label>
                                        <input type="submit" name="submit"
                                            class="form-control btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" style="display: none;">
                            <input type="text" name="studentid" class="form-control" value="<?=$updateid?>">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <?php

function getstatus($a, $b){
    if($a == 0){
        echo '<div class="btn-success btn btn-sm fw-bold">Payment Done!</div>';
    }elseif(($a>0)&&($a<$b)){
        echo '<div class="btn-warning btn btn-sm fw-bold">Pending...!</div>';
    }elseif($a == $b){
        echo '<div class="btn-danger btn btn-sm fw-bold">Payment Not Done!</div>';
    }
}
?>

    <script src="../../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../utility/js/adminlte.min.js"></script>
</body>

</html>