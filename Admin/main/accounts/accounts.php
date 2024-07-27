
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
    .list-unstyled ul {
        border-radius: 30px;
        margin-top: 0px;
        background: #fff;
        color: #000;
    }

    .list-unstyled li {
        padding: 12px;
        cursor: pointer;
        color: black;
    }

    li:hover {
        background: whitesmoke;
    }
    </style>
</head>

<body id="body-pd">
    <?php include '_accounts/accountsnav.php' ?>
    <?php include '_accounts/accountsmenu.php' ?>
    <?php include '../../includes/dbconn.php' ?>

    <br>
    <div class="card ">

        <!-- <div class="mt-3 p-3">
            <input type="text" class="form-control" name="search" id="searchid"
                placeholder="Enter Students Registration Id" autocomplete="off">
            <div id="search"></div>
        </div> -->

        <div class="form-group d-flex p-4">
            <input type="text" name="search_text" id="search_text" placeholder="Search by Students Details"
                class="form-control" />
        </div>
        <div id="result" style="height: 500px; overflow-x:auto;"></div>
        <div style="clear:both"></div>

        <?php   $query = "
    SELECT * FROM studentdetails";
    $result = mysqli_query($db, $query);

    ?>



        <!-- <script type="text/javascript">
    $(document).ready(function() {
        $("#searchid").on("keyup", function() {
            var searchid = $(this).val();
            if (searchid !== "") {
                $.ajax({
                    url: "accountsfunc.php",
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
    </script> -->


        <script>
        $(document).ready(function() {
            load_data();

            function load_data(query) {
                $.ajax({
                    url: "_accounts/fetch.php",
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
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
        <script src="../../utility/js/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../utility/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>