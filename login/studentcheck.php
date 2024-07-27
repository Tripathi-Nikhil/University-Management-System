<?php
include '../Admin/includes/dbconn.php';

if (isset($_POST['studentlogin'])) {
$studentid = $_POST["studentid"];
$studentkey = $_POST["studentkey"];


$query = mysqli_query($db, "SELECT * FROM studentdetails WHERE regid = '$studentid'");
$row  = mysqli_fetch_assoc($query);
if(($studentid == $row['regid']) && ($studentkey == $row['passwords'])){
    if(isset($_POST['studentrem'])){
        setcookie('userid',$studentid, time()+60*60*7);
        setcookie('password',$studentkey, time()+60*60*7);
    }
        session_start();
        $_SESSION['studentid']=$studentid;
        $_SESSION['studentkey']=$studentkey;
        header('location: ../students/index.php');
}
else{
    header('location: ../index.php');
}

}else{
    header('location: ../index.php');
}

?>