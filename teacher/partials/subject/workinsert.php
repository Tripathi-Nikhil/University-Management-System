<?php
session_start();
if(!isset($_SESSION['teacherid']))
{
        // header("location: ../index.php");
}else{
    $teacher_id = $_SESSION['teacherid'];
}

include '../dbconn.php';
$studid2 = $_POST["studid"];
$studname2 = $_POST["studname"];
$studcourse2 = $_POST["studcourse"];
$studyear2 = $_POST["studyear"];
$studsub2 = $_POST["studsub"];

$doins = "INSERT INTO studwork(studid, studname, course, year, studsub) VALUES ('$studid2','$studname2','$studcourse2','$studyear2','$studsub2')";
$run = mysqli_query($db, $doins);
if($run){
  echo '1';
}
else{
   echo '0';
}

?>