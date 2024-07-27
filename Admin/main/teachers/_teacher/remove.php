<?php
$db = mysqli_connect("localhost", "root", "", "ums");

if(isset($_GET['rid'])){
    $id=$_GET['rid'];
    $delquery = "DELETE FROM teacherdetails WHERE regid = '$id'";
	mysqli_query($db, $delquery);
    header('location: ../removeteacher.php');
}
?>