<?php
include '../../includes/dbconn.php';
if (isset($_POST['delete'])) {    
    $roomname1 = $_POST['name'];
    $query = "SELECT * FROM hostel WHERE roomname = '$roomname1'" ;
    $run = mysqli_query($db, $query);
    $row1 = mysqli_fetch_assoc($run);
    $stat = $row1['status'];

    if($stat == 'Reserved'){
        echo '<script>alert("Room is Allocated!, Cannot Delete");</script>';
    }else{
    $delquery = "DELETE FROM hostel WHERE roomname = '$roomname1'";
	    $run1 = mysqli_query($db, $delquery);
}
}

if (isset($_POST['update'])) {    
    $name = $_POST['name'];
    $category = $_POST['category'];
    $roomtype = $_POST['roomtype'];
    $building = $_POST['building'];
    $block = $_POST['block'];
    $status = $_POST['status'];
    if($status == 'Reserved'){
        echo '<script>alert("Room is Reserved, Cannot Update");</script>';
    }else{

    
    $upquery = "UPDATE hostel SET category='$category',
    roomtype='$roomtype',building='$building',block='$block',status='$status' WHERE roomname = '$name'";
	$run2 = mysqli_query($db, $upquery);
    if($run2)
    {
      
    }

    else{
        echo "not ok";
    }
}

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>University Management System</title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../utility/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../../utility/css/adminlte.min.css">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
        rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
</head>

<body id="body-pd">
    <?php include '_hostel/hostelnav.php' ?>
    <?php include '_hostel/hostelmenu.php' ?>
    <?php include '_hostel/hostelcrud.php' ?> </div>


    <div class="form-group">
        <div class="form-group d-flex p-4">
            <label for="" class="fw-bold p-1 ">Search:</label>
            <input type="text" name="search_text" id="search_text" placeholder="Enter Room Name" class="form-control" />
        </div>
    </div>
    <div id="result2"></div>
    <div style="clear:both"></div>
    <div id="result"></div>
    <div style="clear:both"></div>



    </div>


    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>

    <script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "_hostel/updateroom.php",
                method: "post",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result2').html(data);
                }
            });
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "_hostel/addrooms.php",
                method: "post",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            });
        }

        // $('#search_text').keyup(function() {
        //     var search = $(this).val();
        //     if (search != '') {
        //         load_data(search);
        //     } else {
        //         load_data();
        //     }
        // });
    });
    </script>

</body>

</html>