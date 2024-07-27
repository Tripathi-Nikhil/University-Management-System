<?php
include '../Admin/includes/dbconn.php';
$ad = "nikhil";
$key = "mikhil";
if (isset($_POST['adminlogin'])) {
$adminid = $_POST["adminid"];
$adminkey = $_POST["adminkey"];
echo $adminid, $adminkey;

// $query = mysqli_query($db, "SELECT * FROM adminn");
// $row  = mysqli_fetch_assoc($query);
if(($adminid == $ad) &&($adminkey == $key)){
    if(isset($_POST['adrem'])){
        setcookie('userid',$adminid, time()+60*60*7);
        setcookie('password',$adminkey, time()+60*60*7);
    }
        session_start();
        $_SESSION['adminid']=$adminid;
        $_SESSION['adminkey']=$adminkey;
        header('location: ../Admin/index.php');
}
else{
    header('location: ../index.php');
}
}else{
    header('location: ../index.php');
}

?>