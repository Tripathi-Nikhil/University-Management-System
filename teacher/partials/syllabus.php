<?php
include 'dbconn.php';
session_start();
if(!isset($_SESSION['teacherid']))
{
        // header("location: ../index.php");
}else{
    $teacher_id = $_SESSION['teacherid'];
}

$sub = $_POST["sub"];
$syl_year = $_POST["syl_year"];
$syl_percent = $_POST["syl_percent"];
$scourse = $_POST["scourse"];

$sql = "UPDATE subteacher SET syllabus='$syl_percent' WHERE teacherid = '$teacher_id' AND subject1 = '$sub' AND year = '$syl_year'";
$result = mysqli_query($db, $sql);
if($result){
    echo 1;
}
?>