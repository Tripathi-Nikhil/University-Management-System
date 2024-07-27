<?php
include '../includes/dbconn.php';
$addwork = $_POST["task"];
if($addwork != ''){
$doins = "INSERT INTO todo(work) VALUES ('$addwork')";
$run = mysqli_query($db, $doins);
if($run){

}
}else{
   echo '<div style="height: 25px;" class="p-1 alert alert-danger" role="alert">
   Please Enter a To-Do Work!
 </div>';
}

?>
.