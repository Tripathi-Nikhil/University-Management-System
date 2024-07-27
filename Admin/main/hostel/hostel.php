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
    }

    .borderless td,
    .borderless th {
        border: none;
    }
    </style>
</head>

<body id="body-pd">
    <?php include '_hostel/hostelnav.php' ?>
    <?php include '_hostel/hostelmenu.php' ?>
    <?php include '_hostel/hostelcrud.php' ?></div>

    <div class="container" style="width: 700px;">
        <form action="_hostel/addrooms.php" method="post">
            <table class="table borderless">
                <tbody>
                    <tr>
                        <th scope="row" class="th">Name:</th>
                        <td><input type="text" name="name" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Category:</th>
                        <td><select class="form-select" name="category" aria-label="Default select example">
                                <option value="">Choose any One.. </option>
                                <option value="Boys">Boys</option>
                                <option value="Girls">Girls</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Room Type:</th>
                        <td><select class="form-select" name="roomtype" aria-label="Default select example">
                                <option value="">Choose any One.. </option>
                                <option value="Basic">Standand</option>
                                <option value="A.C Room">A.C Room</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Building:</th>
                        <td><select class="form-select" name="building" aria-label="Default select example">
                                <option value="">Choose any One.. </option>
                                <option value="Building 1">Building 1</option>
                                <option value="Building 2">Building 2</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Block:</th>
                        <td><select class="form-select" name="block" aria-label="Default select example">
                                <option value="">Choose any One.. </option>
                                <option value="Block 2">Block 1</option>
                                <option value="Block 1">Block 2</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Status:</th>
                        <td><select class="form-select" name="status" aria-label="Default select example">
                                <option value="">Choose any One.. </option>
                                <option value="Open">Open</option>
                                <option value="Not Ready">Not Ready</option>
                                <option value="Reserved">Reserved</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Add Room" class="btn btn-primary form-control">
                        </td>
                        <td><input type="reset" name="reset" value="Clear" class="btn btn-danger form-control"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>


    <div id="result"></div>
    <div style="clear:both"></div>


    </div>
    </div>

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