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

    <style>
    .form-group {
        padding: 5px;
    }

    .borderless {
        border: 1px solid #fff;
    }

    .btn {
        border-radius: 30px;
        flex: auto;
        margin: 18px;
    }
    </style>
</head>

<body id="body-pd">
    <?php include '_transport/transportnav.php' ?>
    <?php include '_transport/transportmenu.php' ?>
    <?php include '_transport/transportcrud.php' ?></div>


    <div class="form-group d-flex p-4">
        <label for="" class="fw-bold p-1 ">Search Details:</label>
        <input type="text" name="search_text" id="search_text" style="width: 90%; margin-left:7px;"
            placeholder="Search by Students Details" class="form-control" />
    </div>
    </div>
    <div id="result"></div>
    <div style="clear:both"></div>



    <script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "_transport/managestud.php",
                method: "post",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
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




    




    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>


<div class="h" style="display: none;">
    <?php
    include '../../includes/dbconn.php';

    if (isset($_POST['add'])) {
        $studid= $sname= $contact= $homecontact=$gender=$vnum=$from= $vnuml="";
        $sname = $_POST['studentname'];
        $studid = $_POST['studid'];
        $contact = $_POST['contact'];
        $hcontact = $_POST['hcontact'];
        $gender = $_POST['gender'];
        $vnum = $_POST['vnum'];
        $from = $_POST['route'];
        $vnuml = strlen($vnum);
        echo $vnuml;
        
        if($vnuml!=0){

        $query = "INSERT INTO transtudent(studentname, studid, contact, homecontact, gender, vnum, fromm) 
        VALUES ('$sname','$studid','$contact','$hcontact','$gender','$vnum', '$from')";
        $run = mysqli_query($db, $query);
        if($run)
        {
            echo "<script>alert('Student Registered!'); window.location.href='regstudent.php';</script>";
        }
    
        else{
            echo "not ok";
        }
                    
    }
        else{
            echo "<script>alert('No Vehicle For your Loaction!'); window.location.href='regstudent.php';</script>";
        }
    }
    
    ?>
</div>