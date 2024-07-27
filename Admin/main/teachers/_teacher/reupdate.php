<?php
$db = mysqli_connect("localhost", "root", "", "ums");

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $file = strtoupper(substr($username, 0,4)).$_FILES['file']['name'];
                                                    $file_loc = $_FILES['file']['tmp_name'];
                                                    $tempname= $_FILES["file"]["tmp_name"];

                                                 $folder="../img/".$file;
                                                 
                                                 move_uploaded_file($file_loc,$folder);

    $fname = $_POST['fname'];
    $adhar = $_POST['adhaar'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $altcontact = $_POST['altcontact'];
    $email = $_POST['email'];
    $reg = strtoupper(substr($username, 0,4)).$_POST['regId'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $dep = $_POST['dep'];
    $branch = $_POST['branch'];
    $upid = $_POST['regId'];
    

    $query = "update teacherdetails set teachername='$username', fathername='$fname', adhaaar='$adhar', dob='$dob', contact1='$contact',
    contact2='$altcontact',email='$email', gender='$gender', address='$address', pin='$pincode', city='$city', state='$state', 
    department='$dep', branch='$branch', image='$file' WHERE regid ='$upid' ";
    $run = mysqli_query($db, $query);
    echo $run;

    if($run)
    {
        echo '<script type="text/javascript">alert("Registration Successful")</script>';
    }

    else{
        echo "not ok";
    }
    header('location: ../update.php?rid='.$upid);
}
?>