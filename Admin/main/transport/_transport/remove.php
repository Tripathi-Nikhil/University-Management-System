<?php

include '../../../includes/dbconn.php';


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delquery = "DELETE FROM transtudent WHERE studid = '$id'";
	mysqli_query($db, $delquery);
    header('location: ../managestudent.php');
}

?>