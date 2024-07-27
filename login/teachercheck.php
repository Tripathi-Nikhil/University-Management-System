<?php
include '../Admin/includes/dbconn.php';

if (isset($_POST['teacherlogin'])) {
$teacherid = strtoupper($_POST["teacherid"]);
$teacherkey = $_POST["teacherkey"];

date_default_timezone_set('Asia/Kolkata');
$timestamp = date("d-m-Y");

$query = mysqli_query($db, "SELECT * FROM teacherdetails WHERE regid ='$teacherid'");
$row  = mysqli_fetch_assoc($query);
if(($teacherid == $row['regid']) && ($teacherkey == $row['passwords'])){
    $atend = "SELECT * FROM attendance_teacher WHERE teacherid = '$teacherid' AND filter_date = '$timestamp'";
    $var = mysqli_query($db, $atend);
    if($numvar = mysqli_num_rows($var)>0){
        echo $numvar;
    }else{
        $name = $row['teachername'];
        $dep = $row['department'];
        $gender = $row['gender']; 

        $mark = mysqli_query($db, "INSERT INTO attendance_teacher(teacherid, teachername, department, gender,filter_date, status) 
        VALUES ('$teacherid','$name','$dep','$gender','$timestamp','0')");
    }

    if(isset($_POST['teacherrem'])){
        setcookie('userid',$teacherid, time()+60*60*7);
        setcookie('password',$teacherkey, time()+60*60*7);
    }
        session_start();
        $_SESSION['teacherid']=$teacherid;
        $_SESSION['teacherkey']=$teacherkey;
        header('location: ../teacher/index.php');
}
else{
    header('location: ../index.php');
}
}
else{
    header('location: ../index.php');
}

?>