<?php session_start();
  if(!isset($_SESSION['adminid']))
  {
          header("location: /university/index.php");
  }
  ?>
  <?php
include '../../../includes/dbconn.php';
date_default_timezone_set("Asia/Calcutta"); 
if (isset($_POST['submit'])) {
    
    $stud = $_POST['studentid'];
    $total = $_POST['total'];
    $amt_left = $_POST['amt_left'];
    $cfee = $_POST['cfee'];
    $hfee = $_POST['hfee'];
    $tfee = $_POST['tfee'];
    $lfee = $_POST['lfee'];
    $pay_method = $_POST['pay_method'];
    $currenttime = date("Y-m-d h:i:sa");
    $feetotal = $cfee + $hfee + $tfee + $lfee;


  $p = 'Rs. '.$feetotal.' on '.$currenttime.' by '.$pay_method;




    $qquery = "SELECT * FROM accounts WHERE studid = '$stud'";
    $run = mysqli_query($db,$qquery);
    $row = mysqli_fetch_assoc($run);
    $newstud = $row['studid'];
    if($stud == $newstud){
        echo 'Present Hai';  
        echo $qquery;
        $total_due = $row['total_due'];
        $course = $cfee+$row['course'];
        $hostel = $hfee+$row['hostel'];
        $transport = $tfee+$row['transport'];
        $library = $lfee+$row['library'];
        $totalpaid = $feetotal+$row['totalpaid'];
        $pay1 = $row['pay1'];
        $pay2 = $row['pay2'];
        $pay3 = $row['pay3'];
        $pay4 = $row['pay4'];
        $pay5 = $row['pay5'];
        if($pay1 == ""){ 
            $paynum = "UPDATE accounts SET pay1='$p' WHERE studid = '$stud'";
            $payrun = mysqli_query($db, $paynum);
            $fill = mysqli_query($db, $paynum);
        }elseif($pay2 == ""){ 
            $paynum = "UPDATE accounts SET pay2='$p' WHERE studid = '$stud'";
            $payrun = mysqli_query($db, $paynum);
            $fill = mysqli_query($db, $paynum);
        }elseif($pay3 == ""){ 
            $paynum = "UPDATE accounts SET pay3='$p' WHERE studid = '$stud'";
            $payrun = mysqli_query($db, $paynum);
            $fill = mysqli_query($db, $paynum);
        }elseif($pay4 == ""){ 
            $paynum = "UPDATE accounts SET pay4='$p' WHERE studid = '$stud'";
            $payrun = mysqli_query($db, $paynum);
            $fill = mysqli_query($db, $paynum);
        }elseif($pay5 == ""){ 
            $paynum = "UPDATE accounts SET pay5='$p' WHERE studid = '$stud'";
            $payrun = mysqli_query($db, $paynum);
            $fill = mysqli_query($db, $paynum);
        }else{ 
            echo '<script type="text/javascript">alert("No installment left!")</script>';
            $paynum = "UPDATE accounts SET pay6='$p' WHERE studid = '$stud'";
            $payrun = mysqli_query($db, $paynum);
            $fill = mysqli_query($db, $paynum);
        }
       
    $upquerry = "UPDATE accounts SET total_due='$total',course='$course',
    hostel='$hostel',transport='$transport',library='$library',totalpaid='$totalpaid' WHERE studid = '$stud'";
    $uprun = mysqli_query($db,$upquerry);
    }else{
        $query = "INSERT INTO accounts (studid, total_due, course, hostel, transport, library, 
            totalpaid, pay1) VALUES ('$stud','$total','$cfee',
            '$hfee','$tfee','$lfee','$feetotal','$p')";
            $runn = mysqli_query($db, $query);

            if($runn)
            {
                
                echo '<script type="text/javascript">alert("Registration Successful")</script>';
            }
        
            else{
                
                echo "not ok";
            }

        }
?>
<script>
window.location.href = "../invoice.php?id=<?php echo $stud ?>";
</script>
<script>

</script>

<?php
}



?>