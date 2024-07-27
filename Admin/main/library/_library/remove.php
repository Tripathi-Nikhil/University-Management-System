<?php

include '../../../includes/dbconn.php';


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delquery = "DELETE FROM library WHERE bookid = '$id'";
	mysqli_query($db, $delquery);
    header('location: ../removebook.php');
}

?>