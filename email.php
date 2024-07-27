<?php 
if(isset($_POST['submit'])){
    $to = "nikhiltripathi101@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fulladress = $_POST['full_address'];
    $city = $_POST['city'];
    $select_cource = $_POST['select_cource'];
    $last_qualified_exam = $_POST['last_qualified_exam'];
    $marks = $_POST['marks'];
    $remark = $_POST['remark'];
    $status = $_POST['status'];


    $subject = "CHeck Message";
    $message = $fname . "<br>". $lname . "<br>". $fulladress . "<br>". $city . "<br>". $select_cource . " 
    ". $last_qualified_exam . "<br>". $marks . "<br>". $remark . " 
    ". $status . "<br>". $phone . "<br>". $email . " wrote the following:" . "\n\n";
    $message2 = "Here is a copy of your message " . $fname ."<br>". $lname . "\n\n" . $remark;

    echo $message .'____________', $message2;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$message2); // sends a copy of the message to the sender
    if(mail($to,$subject,$message,$headers)){
    echo "Mail Sent. Thank you " . $fname . "Check Yor Mail";
}else{
    echo "Mail not Sent";
    
}    // ('Location: index.php');
        // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }


    
?>

<!--anshu0003@gmail.com-->



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <form action="" method="post" class="text-center">
        <input class="form-control mb-1 mt-1" type="text" name="fname" placeholder="Enter Your First Name"
            class="input">
        <input class="form-control mb-1 mt-1" type="text" name="lname" placeholder="Enter Your Last Name"
            class="input">
        <input class="form-control mb-1 mt-1" type="text" name="email" placeholder="Enter Your E-mail" class="input">
        <input class="form-control mb-1 mt-1" type="phone" name="phone" placeholder="Enter Your Number" class="input">
        <input class="form-control mb-1 mt-1" type="text" name="full_address" placeholder="Enter Your adddress"
            class="input">
        <input class="form-control mb-1 mt-1" type="text" name="city" placeholder="Enter Your city" class="input">
        <input class="form-control mb-1 mt-1" type="text" name="select_cource" placeholder="Enter Your course"
            class="input">
        <input class="form-control mb-1 mt-1" type="text" name="last_qualified_exam"
            placeholder="Enter Your last_qualified Exam" class="input">
        <input class="form-control mb-1 mt-1" type="text" name="marks" placeholder="Enter Your marks" class="input">
        <input class="form-control mb-1 mt-1" type="text" name="remark" placeholder="Enter Your remark" class="input">
        <input class="form-control mb-1 mt-1" type="text" name="status" placeholder="Enter Your Status" class="input">


        <!-- itmgkp020@gmail.com
    itmgkp020@gmail.com -->

        <button style="background-color: lime; border-radius: 28px;" type="submit" name="submit"
            class="text-white btn btn-lg btn-lime mb-1 mt-1">Send Message</button>
        </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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