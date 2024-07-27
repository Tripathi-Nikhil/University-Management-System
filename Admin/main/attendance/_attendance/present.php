<?php
include '../../../includes/dbconn.php';

$addwork = $_POST["id"];
$sql = "UPDATE attendance_teacher SET status='1' WHERE id = {$addwork}";
$result = mysqli_query($db, $sql);
if($result){
    echo 1;
}
?>