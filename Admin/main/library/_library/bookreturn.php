<?php
include '../../../includes/dbconn.php';
if (isset($_POST['submit'])) {
    
    $studid = $_POST['studid'];
    $studname = $_POST['studname'];
    $bookid =$_POST['bookid'];
    $author = $_POST['author'];
    $adhar = $_POST['adhaar'];
    $contact = $_POST['contact'];
    $fine1 = $_POST['fine']; 
    $fine = (int)substr($fine1, 3,);
//    echo $fine;
$fetchdata = "SELECT * FROM fine WHERE studid = '$studid'";
$fetchres = mysqli_query($db, $fetchdata);
$fetchrun = mysqli_fetch_array($fetchres);

$got = $fetchrun['studid']; 
$got1 = 0;

    if($got1<$fine)
    {

        if(strcmp($got, $studid)){   //comparing string M2: this can be done by if Exists( ---- )else ----
            $finequery = "INSERT INTO fine(studid, fine) VALUES ('$studid',$fine)";
            $resfine = mysqli_query($db, $finequery);
        }
        else{
            $f = $fetchrun['fine'];
            $ff = $f + $fine;
            echo $ff;
            $update = "UPDATE fine SET fine= $ff WHERE studid ='$studid'";
            $runupdate = mysqli_query($db, $update);
          
        }
       
    }
    


    $query = "DELETE FROM issuebook WHERE studid = '$studid'";
    $run = mysqli_query($db, $query);



    if($run)
    {
        echo '<script type="text/javascript">alert("Book Returned Succesfully")</script>';
        $fetchdata1 = "SELECT * FROM library WHERE bookid = '$bookid'";
            $fetchres1 = mysqli_query($db, $fetchdata1);
            $fetchrun1 = mysqli_fetch_array($fetchres1);
        $quantity = $fetchrun1['quantity'];
        echo $quantity;
        $book= $quantity+1;
        $quant = "UPDATE library SET quantity=$book WHERE bookid ='$bookid'";
        $run2 = mysqli_query($db, $quant);


    }

    else{
        echo "not ok";
    }
}

header('location: ../returnbook.php');
?>