<div class="">
    <?php
$showAlert = false;
$showError = false;
include '../Admin/includes/dbconn.php';
if (isset($_POST['activate'])) {
    $regid = strtoupper($_POST["actregid"]);
    $role = $_POST["role"];
    $email = $_POST["actemail"];
    $dob = $_POST["actdob"];
    $password = $_POST["actpass"];
    $cpassword = $_POST["actcpass"];

    if($regid == ''){
        $showError = "Registration Number is Empty!";
      
    }
    elseif($role == ''){
        $showError = "Role is Empty!";
       
    }
    elseif($email == ''){
        $showError = "Email is Empty!";
      
    }
    elseif($dob == ''){
        $showError = "Date of Birth is Empty!";
      
    }
    elseif($password == ''){
        $showError = "Password is Empty!";
   
    }
    elseif($cpassword == ''){
        $showError = "Confirm Password is Empty!";
         
    }else{

    if($password == $cpassword){
        if($role == 'Student'){
            $query = "SELECT * FROM studentdetails WHERE regid='$regid'";
            $result = mysqli_query($db, $query);
            $rows = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
       if($count == 0) 
               {
                   $showError = "No Student on $regid";
               }
               else{
                   if((strtotime($dob) == strtotime($rows['dob']))){
                       if($email == $rows['email']){
                        $ins1 = "UPDATE studentdetails SET passwords = '$password' WHERE regid = '$regid'";
                        $ins = mysqli_query($db, $ins1);
                        echo $ins1;
                        if($ins){
                            $names = $rows['name'];
                            $showAlert = true;
                        }
                    }
                    else{
                        $showError = " $email Do Not Match any Records! ";
                    }
                    }else{
                    $showError = "Date of Birth Do Not Match";
                   }
               }
           }
       elseif($role == 'Teacher'){
           $query = "SELECT * FROM teacherdetails WHERE regid = '$regid'";
           $result = mysqli_query($db, $query);
           $count = mysqli_num_rows($result);
           $rows = mysqli_fetch_assoc($result);
      if($count == 0) 
              {
                  $showError = "No Teacher on this Id";
              }

              else{
                if($dob == $rows['dob']){
                    if($email == $rows['email']){
                    $ins = mysqli_query($db,"UPDATE teacherdetails SET passwords = '$password' WHERE regid = '$regid'");
                    if($ins){
                        $names = $rows['name'];
                        $showAlert = true;
                    }
                    }
                    else{
                        $showError = "Email Do Not Match";
                    }
               }else{
                $showError = "Dob Do Not Match";
               }
                  
              }
          }
    }else{
        $showError = "Passwords donot Match!";
    }
}
    
}
    
?>
</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations! '.$names.' </strong> Your account is now Activated and you can login.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    ?>
    <script>
    setTimeout(function() {
    window.location.href = '../index.php';
    }, 1000);
    </script>
    <?php
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    ?>
    <script>
    setTimeout(function() {
        window.location.href = '../index.php';
    }, 1000);
    // </script>
    <?php
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>