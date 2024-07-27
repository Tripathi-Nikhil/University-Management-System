<?php 

include '../../../includes/dbconn.php';

if (isset($_POST['submit'])) {
    $pick = strlen($_FILES['file']['name']);
    if($pick == 0){
        echo "no_file";
    }else{
    
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
  
                                                    $file_loc = $_FILES['file']['tmp_name'];
                                                    $tempname= $_FILES["file"]["tmp_name"];

                                                   $folder="../img/".$file;       
                                                 
                                                 move_uploaded_file($file_loc,$folder);
                                                 $id= $_POST['regId'];
                                                 echo $id;

                $querry = "UPDATE studentdetails SET image='$file' WHERE regid ='$id'";
                $runs= mysqli_query($db,$querry); 
                echo $querry;
                if($runs){
                    echo ' done';
                }else{
                    echo ' jai shree ram';
                }

    }
    $username = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $adhar = $_POST['adhaar'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $papacontact = $_POST['papacontact'];
    $mammicontact = $_POST['mammicontact'];
    $email = $_POST['email'];
    $reg = strtoupper(substr($username, 0,4)).$_POST['regId'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $hsboard = $_POST['hsboard'];
    $hspercent = $_POST['hspercent'];
    $hsyear = $_POST['hsyear'];
    $imboard = $_POST['imboard'];
    $impercent = $_POST['impercent'];
    $imyear = $_POST['imyear'];
    $gboard = $_POST['gboard'];
    $gpercent = $_POST['gpercent'];
    $gyear = $_POST['gyear'];
    $branch = $_POST['branch'];
    $course = $_POST['course'];

    $feequerry ="SELECT * FROM branchinfo WHERE course = '$course'";
    $fee = mysqli_query($db,$feequerry); 
    $row = mysqli_fetch_assoc($fee);
    
    $fees = $row['Fees'];
    

    $upid = $_POST['regId'];



    // $query = "INSERT INTO studentdetails(name, fathername, mothername, adhaar, dob, gender, studentcontact,
    //  fathercontact, mothercontact,email, regid, address, pin, city, state, hsboard, hspercent, hspassyear,
    //   imboard, impercent, impassyear, gboard, gpercent, gpassyear, branch, course, image)VALUES 
    //   ('$username','$fname','$mname','$adhar','$dob','$gender', '$contact','$papacontact',
    // '$mammicontact','$email','$reg','$address','$pincode','$city','$state','$hsboard','$hspercent','$hsyear','$imboard','$impercent','$imyear',
    // '$gboard','$gpercent','$gyear','$branch','$course','$file')";


$query = " update studentdetails set 
name='$username', 
fathername='$fname',
 mothername='$mname',
 adhaar='$adhar',
 dob='$dob',
 gender='$gender',
 studentcontact='$contact',
 fathercontact='$papacontact',
mothercontact='$mammicontact', 
email='$email', 
 address='$address',
 pin='$pincode',
 city='$city',
  state='$state', 
  hsboard='$hsboard', 
  hspercent='$hspercent',
  hspassyear='$hsyear',
 imboard='$imboard',
  impercent='$impercent', 
  impassyear='$imyear', 
  gboard='$gboard', 
  gpercent='$gpercent',
gpassyear='$gyear',
 branch='$branch',
  course='$course',

   fees = '$fees'
    WHERE regid ='$upid' ";
    

    $run = mysqli_query($db,$query);


    if($run)
    {
        echo "<script>alert('Data Updated!'); window.location.href='../update.php?id='.$upid';</script>";
    }

    else{
        echo "not ok";
        
    }

    header('location: ../update.php?id='.$upid);
}


?>