<?php
include '../includes/dbconn.php';

$addwork = $_POST["id"];
echo $addwork;
$sql = "DELETE FROM todo WHERE id = {$addwork}";
$result = mysqli_query($db, $sql);
if($result){
    echo 1;
}
?>