<?php
session_start();
if(!isset($_SESSION['studentid']))
{
        // header("location: ../index.php");
}else{
    $student_id = $_SESSION['studentid'];
}

include 'dbconn.php';
$addwork = $_POST["task"];
if($addwork != ''){
$doins = "INSERT INTO todo(work,userid) VALUES ('$addwork','$student_id')";
$run = mysqli_query($db, $doins);
if($run){
  echo '<div style="height: 20px;" class="small p-1 alert alert-success alert-dismissible fade show" role="alert">
  Work Added! for <?=$student_id?> !<span type="button" class="p-1 small close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">x</span>
</span>
</div>';
}
}else{
   echo '<div style="height: 20px;" class="small p-1 alert alert-danger alert-dismissible fade show" role="alert">
   Please Enter a To-Do Work!<span type="button" class="p-1 small close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true" class="mb-1">x</span>
</span>
 </div>';
}

?>