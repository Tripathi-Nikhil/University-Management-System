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
    <style>
    .th {
        float: left;
        margin-top: 2px;
    }

    .btn {
        border-radius: 30px;
        width: 60%;

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
    <?php include '_hostel/hostelcrud.php' ?> </div>

    <div class="container">
        <div class="" id="result"></div>
        <hr>

        <form action="_hostel/allocstud.php" method="post">
            <div class="row">


                <div class="col-md-6">
                    <table class="table borderless">
                        <tbody>
                            <tr>
                                <th ̥scope="row" class="th">Student's Id:</th>
                                <td><input type="text" id="searchid" name="studid" class="form-control" required>
                                    <div id="search"></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="th">Father's Name:</th>
                                <td><input type="text" name="faname" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th">Gender:</th>
                                <td><select class="form-select" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th">Local Address:</th>
                                <td><textarea name="laddress" class="form-control"></textarea></td>
                            </tr>

                            <tr>
                                <th scope="row" class="th">City:</th>
                                <td><input type="text" name="city" class="form-control" required></td>
                            </tr>

                            <tr>
                                <th scope="row" class="th">Student Phone:</th>
                                <td><input type="text" name="studphone" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th">Room Name:</th>
                                <td>
                                    <input type="text" name="roomname" class="form-control"
                                        placeholder="Name Should Match as in above Table" required>
                                </td>

                            </tr>


                        </tbody>
                    </table>
                </div>

                <div class="col-md-6">
                    <table class="table borderless">
                        <tbody>
                            <tr>
                                <th scope="row" class="th">Name:</th>
                                <td><input type="text" name="name" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th">Mother's Name:</th>
                                <td><input type="text" name="maname" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th"> Student's Adhaar:</th>
                                <td><input type="text" name="adhaar" class="form-control" required></td>
                            </tr>

                            <tr>
                                <th scope="row" class="th">Permanent Address:</th>
                                <td><textarea name="paddress" class="form-control"></textarea></td>
                            </tr>

                            <tr>
                                <th scope="row" class="th">State:</th>
                                <td><input type="text" name="state" class="form-control" required></td>
                            </tr>

                            <tr class="">
                                <th scope="row" class="th">Father's Phone:</th>
                                <td><input type="text" name="faphone" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th scope="row" class="th">Status:</th>
                                <td><select class="form-select" name="status">
                                        <option value="Reserved">Reserved</option>
                                    </select></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="form-group d-flex p-2">
                    <input type="submit" name="alloc" value="Allot Room" class="btn btn-primary form-control">&nbsp;
                    <input type="reset" name="reset" value="Clear" class="btn btn-danger form-control">
                </div>

            </div>
        </form>
    </div>

    </div>


    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "_hostel/managestudent.php",
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
    <script type="text/javascript">
    $(document).ready(function() {
        $("#searchid").on("keyup", function() {
            var searchid = $(this).val();
            if (searchid !== "") {
                $.ajax({
                    url: "_hostel/regid.php",
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>