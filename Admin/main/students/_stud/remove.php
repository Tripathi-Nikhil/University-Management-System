<?php

include '../../../includes/dbconn.php';


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delquery = "DELETE FROM studentdetails WHERE regid = '$id'";
	$run = mysqli_query($db, $delquery);
    if($run){
        echo '<script type="text/javascript">alert("Data Deleted Successfully")</script>';
}
    else{
        echo '<script type="text/javascript">alert("Error Occured Successfully!!!!!")</script>';
    }
    header('location: ../removestudent.php');
}

?>