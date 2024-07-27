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
    <?php include '_library/librarynav.php' ?>
    <?php include '_library/librarymenu.php' ?>
    <style>
    img {
        width: 100%;
        height: 100%;
    }

    .form-group input {
        margin: 3px;
    }

    .form-group .btn {
        border-radius: 30px;
        width: 20%;
        flex: auto;

    }

    .col-md-6 {
        display: flex;
        justify-content: center;
        text-align: center;
    }
    </style>

    <div class="row">
        <div class="col-md-6">
            <img src="img/1bg.jpg" alt="" class="rounded shadow">
        </div>
        <div class="col-md-6 card">
            <form action="_library/bookissue.php" method="POST">
                <div class="form-group d-flex">
                    <input type="text" name="search_text" id="search_text" placeholder="Enter Book Id"
                        class="form-control" required />
                    <input type="text" name="search_book" id="search_book" placeholder="Enter Student Id"
                        class="form-control" required />
                </div>
                <div id="result" class="p-1"></div>
                <div id="Sresult" class="p-1"></div>
                <div style="clear:both"></div>

                <div class="form-group">
                    <input type="submit" name="submit" value="Submit" class="form-control btn-primary btn">
                    <input type="reset" value="Reset" class="form-control btn btn-danger ">
                </div>
            </form>
        </div>
    </div>


    </div>
    </div>


    <script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "_library/fetchbook.php",
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



    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "_library/fetchstudent.php",
                method: "post",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#Sresult').html(data);
                }
            });
        }

        $('#search_book').keyup(function() {
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