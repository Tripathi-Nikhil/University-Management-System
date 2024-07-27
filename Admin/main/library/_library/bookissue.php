<?php
include '../../../includes/dbconn.php';
if (isset($_POST['submit'])) {
    
    $bookid = $_POST['bookid'];
    $bookname = $_POST['bookname'];
    $bookedition =$_POST['edition'];
    $author = $_POST['author'];
    $studid = $_POST['regid'];
    $name = $_POST['name'];
    $dob= $_POST['dob'];
    $adhar = $_POST['adhaar'];
    $contact = $_POST['contact'];
    $quantity = $_POST['quantity'];

    $query = "INSERT INTO issuebook(studid, studname, bookid, author, adhaar, contact)
     VALUES ('$studid','$name','$bookid','$author','$adhar','$contact')";
    $run = mysqli_query($db, $query);

   


    if($run)
    {
        echo '<script type="text/javascript">alert("Added Successful")</script>';
        $page= $quantity-1; echo $page;
        $quant = "UPDATE library SET quantity=$page WHERE bookid ='$bookid'";
        $run2 = mysqli_query($db, $quant);
    }

    else{
        echo "not ok";
    }
}

header('location: ../issuebook.php');
?>