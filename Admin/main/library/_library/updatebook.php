<?php
include '../../../includes/dbconn.php';
if (isset($_POST['submit'])) {
    
    $bookedition = $_POST['bookedition'];
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $page = $_POST['pages'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $branch = $_POST['branch'];
    $upid = $_POST['bookid'];


    $query = "UPDATE library SET bookname='$bookname',edition='$bookedition',author='$author',pages='$page',quantity='$quantity',category='$category',
     branch='$branch'WHERE bookid ='$upid'";
    
    $run = mysqli_query($db, $query);
    echo $run;
    if($run)
    {
        echo '<script type="text/javascript">alert("Update Successful")</script>';
    }

    else{
        echo "not ok";
    }
    header('location: ../update.php?id='.$upid);
}

?>