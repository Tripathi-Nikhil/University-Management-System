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
    .th {
        float: left;
        margin-top: 2px;
    }

    .btn {
        border-radius: 30px;
        margin-left: 18px;

    }

    .borderless td,
    .borderless th {
        border: none;
    }
    </style>
</head>

<body id="body-pd">
    <?php include '_transport/transportnav.php' ?>
    <?php include '_transport/transportmenu.php' ?>
    <?php include '_transport/transportcrud.php' ?></div>
    <div class="form-group">
        <div class="form-group d-flex p-4">
            <label for="" class="fw-bold p-1 ">Search:</label>
            <input type="text" name="search_text" id="search_text" placeholder="Enter Any (Vehicle Name/Number Route/Via Driver Name) "
                class="form-control" />
        </div>
    </div>
    <form action="_transport/managetransport.php" method="post">
        <div id="result"></div>
        <div style="clear:both"></div>
    </form>


    <?php
include '../../includes/dbconn.php';

$query = mysqli_query($db, "SELECT * FROM transport");
?>
<div class=" dis" style="overflow-y:auto; height: 360px;">
    <table class="table table-bordered table-striped">
        <tr class="text-center">
            <th>Vehicle Name</th>
            <th>Vehicle Number</th> 
            <th>Driver Name</th>
            <th>Driver Id</th>
            <th>Driver Contact</th>
            <th>Driver Adhaar</th>
            <th>Route</th>
            <th>Via</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Type</th>
            <th>Capacity</th>
        </tr><?php
	while($row = mysqli_fetch_array($query))
	{
		?>
        <tr class="text-center">
            <td><?=$row["vname"]?></td>
            <td><?=$row["vnum"]?></td>
            <td><?=$row["dname"]?></td>
            <td><?=$row["driverid"]?></td>
            <td><?=$row["dcontact"]?></td>
            <td><?=$row["dadhar"]?></td>
            <td><?=$row["route"]?></td>
            <td><?=$row["via"]?></td>
            <td><?=$row["stime"]?></td>
            <td><?=$row["etime"]?></td>
            <td><?=$row["type"]?></td>
            <td><?=$row["capacity"]?></td>
           
        </tr>
        <?php
	}
	?>
    </table></div>

    <script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "_transport/managetransport.php",
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




    </div>
    </div>


    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>