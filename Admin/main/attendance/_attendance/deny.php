<?php
include '../../../includes/dbconn.php';

$addwork = $_POST["id"];
$sql = "UPDATE attendance_teacher SET status='denied' WHERE id = {$addwork}";
$result = mysqli_query($db, $sql);
if($result){
    echo 1;
}
?>