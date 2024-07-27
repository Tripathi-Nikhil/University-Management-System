<?php
include '../../../includes/dbconn.php';

if (isset($_POST['alloc'])) {
    $studid = $_POST['studid'];
    $name = $_POST['name'];
    $faname = $_POST['faname'];
    $maname = $_POST['maname'];
    $gender = $_POST['gender'];
    $adhaar = $_POST['adhaar'];
    $laddress = $_POST['laddress'];
    $paddress = $_POST['paddress'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $studphone = $_POST['studphone'];
    $fatherphone = $_POST['faphone'];
    $roomname = $_POST['roomname'];
    $status = $_POST['status'];

    $query3 = mysqli_query($db, "SELECT * FROM hostel WHERE roomname = '$roomname'");
    $fetch = mysqli_fetch_assoc($query3);
    $type = $fetch['roomtype'];
    if($type == 'A.C Room'){
      $fees1 = 6000;
    }elseif($type == 'Basic')
    {
      $fees1 = 4500;
    }
    $fees = $fees1*12;
echo $fees;


    $query = "INSERT INTO roomalloc (studid, name, fathername, mothername, gender, adhaar,
     laddress, paddress, city, state, studentphone, fatherphone, roomname, fees) VALUES 
     ('$studid','$name','$faname','$maname','$gender','$adhaar','$laddress','$paddress',
     '$city','$state','$studphone','$fatherphone','$roomname', '$fees')";

     echo $query;

    $run = mysqli_query($db, $query);

    $query2 = "UPDATE hostel SET status='$status' WHERE roomname = '$roomname'";
    $run2 = mysqli_query($db, $query2);

    if($run)
    {
      echo '<script>alert("Allocation Successfull / Rooms Updated");</script>';
    }

    else{
      echo '<script>alert("Kuchh to gadbad h Daya!");</script>';
    }
}
header('location: ../managestudent.php')


?>