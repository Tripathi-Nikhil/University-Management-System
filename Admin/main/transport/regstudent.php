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

    li:hover {
        background: whitesmoke;
    }
    </style>
</head>

<body id="body-pd">
    <?php include '_transport/transportnav.php' ?>
    <?php include '_transport/transportmenu.php' ?>
    <?php include '_transport/transportcrud.php' ?></div>


    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <table class="table borderless">
                    <tbody>
                        <tr>
                            <th scope="row" class="th">Student Id:</th>
                            <td>
                                <input type="text" name="studid" id="searchid" class="form-control"
                                    placeholder="Student Id" required>
                                <div class="card" id="search">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Student Name:</th>
                            <td><input type="text" name="studentname" class="form-control" placeholder="Student Name"
                                    autocomplete="off" required>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row" class="th">Pickup Point: <i class="text-primary">*</i></th>
                            <td><input type="text" class="form-control border-danger" id="search_text"
                                    placeholder="Enter to Fetch Relevant Data" autocomplete="off" required>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Contact Number:</th>
                            <td> <input type="text" name="contact" class="form-control"
                                    placeholder="Student Contact Number" autocomplete="off" required>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Gender:</th>
                            <td> <select name="gender" class="form-control" id="">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="th">Home Contact:</th>
                            <td> <input type="text" name="hcontact" class="form-control"
                                    placeholder="Home Contact Number" autocomplete="off" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-primary text-center fw-bold">*<span class="text-dark ">Pickup Point Should be a
                        wellknown place in your way towards college.</span></div>
            </div>
            <div class="col-md-6 ">
                <div class="text-center text-primary mt-5 fetch">
                    <h3 class="fw-bold mt-3">Fetching...</h3>
                </div>
                <div class="" id="result"></div>

            </div>
            <div class=" d-flex form-group ad">
                <input type="submit" value="Register" name="add" class="form-control btn btn-primary">
                <input type="reset" value="Clear" name="reset" class="form-control btn btn-danger">
            </div>
        </div>
    </form>




    <script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "_transport/businfo.php",
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

    <script type="text/javascript">
    $(document).ready(function() {
        $("#searchid").on("keyup", function() {
            var searchid = $(this).val();
            if (searchid !== "") {
                $.ajax({
                    url: "_transport/studidfetch.php",
                    type: "POST",
                    cache: false,
                    data: {
                        searchid: searchid
                    },
                    success: function(data) {
                        $("#search").html(data);
                        $("#search").fadeIn();
                    }
                });
            } else {
                $("#search").html("");
                $("#search").fadeOut();
            }
        });

        // click one particular searchid name it's fill in textbox
        $(document).on("click", "li", function() {
            $('#searchid').val($(this).text());
            $('#search').fadeOut("fast");
        });
    });
    </script>






    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
        
        //jbjhcjabckjabscjkbasjckbasjcbjasbcj
$feequery = "SELECT * FROM timetransport WHERE vnum = '$vnum'";
$run = mysqli_query($db, $feequery);
$roww = mysqli_fetch_assoc($run);
$pp0 = $roww['pp0'];
$pp1 = $roww['pp1'];
$pp2 = $roww['pp2'];
$pp3 = $roww['pp3'];
$pp4 = $roww['pp4'];
$k0 = number_format($roww['k0']);
$k1 = number_format($roww['k1']);
$k2 = number_format($roww['k2']);
$k3 = number_format($roww['k3']);
$k4 = number_format($roww['k4']);

if(mysqli_num_rows($run)>0){
    $fees = 1;
    if($from == $pp0){
        $fees = $k0*15*12;

    }
    elseif($from == $pp1){
        $fees = $k1*15*12;

    }
    elseif($from == $pp2){
        $fees = $k2*15*12;

    }
    elseif($from == $pp3){
        $fees = $k3*15*12;
    }
    elseif($from == $pp4){
        $fees = $k4*15*12;
    }
} 


        // bsjjasnk;lhiuxhausxjkqxhuiqhix
        
        if($vnuml!=0){

        $query = "INSERT INTO transtudent(studentname, studid, contact, homecontact, gender, vnum, fromm, fees) 
        VALUES ('$sname','$studid','$contact','$hcontact','$gender','$vnum', '$from', '$fees')";
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