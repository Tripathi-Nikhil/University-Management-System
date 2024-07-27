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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body id="body-pd">
    <?php include '_attendance/attendancenav.php' ?>
    <?php include '_attendance/sidenav.php' ?>
    <?php include '../../includes/dbconn.php' ?>

    <br>
    <div class="p-3">
        <div class="card">

            <div class="card-header">
                Teachers Attendance
            </div>

            <!-- <div class="form-group d-flex p-4">
                <input type="text" name="search_text" id="search_text" placeholder="Search by Students Details"
                    class="form-control border-primary" style="border-radius: 30px;" />
            </div>
            <div id="result" style="height: 500px; overflow-x:auto;"></div>
            <div style="clear:both"></div> -->



            <form action="attsub.php" method="POST">
                <table class="table user-table table-striped">
                    <thead>
                        <tr>
                            <th class="border-top-0">S. No</th>
                            <th class="border-top-0">Image</th>
                            <th class="border-top-0">Registration No.</th>
                            <th class="border-top-0">Name</th>
                            <th class="border-top-0">Father Name</th>
                            <th class="border-top-0">Course</th>
                            <th class="border-top-0">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $i=0;
                        $query = "SELECT * FROM studentdetails";
                        $run = mysqli_query($db, $query);
                      
               while($var=mysqli_fetch_assoc($run))
              
            { $i=$i+1;
            ?>
                        <tr>
                            <td><?=$i?></td>
                            <td><img src="../students/img/<?=$var['image']?>"
                                    class="img-thumbnail rounded-circle img-avtaar" alt=""
                                    style="width:55px;height:55px;"></td>
                            <td><input name='studreg[]' type=text value="<?=$var['regid']?>"
                                    style="border:none;background-color: transparent;"></td>
                            <td><input name='name[]' type=text value="<?=$var['name']?>"
                                    style="border:none;background-color: transparent;"></td>
                            <td><input name='fname[]' type=text value="<?=$var['fathername']?>"
                                    style="border:none;background-color: transparent;"></td>
                            <td><input name='course[]' type=text value="<?=$var['course']?>"
                                    style="border:none;background-color: transparent;"></td>      
                            <input name='date[]' type=hidden value="<?php echo date("d/m/Y"); ?>"
                                style="border:none;background-color: transparent;">
                            <td>
                                <select name=attendance_status[] class="form-control" id=attendance_status>
                                    <option value="">Select</option>
                                    <option value='Present'>Present</option>
                                    <option value='Absent'>Absent</option>
                                </select>
                            </td>
                        </tr>
                        <?php
          }
          
 ?>
                    </tbody>
                </table>
                <center> <input type=submit class="btn btn-success" name="submit" value=Submit></center>


            </form>

        </div>
    </div>

















































    <!-- 























    <?php  
    //  $query = "
    // SELECT * FROM studentdetails";
    // $result = mysqli_query($db, $query);

    ?>
    <script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "_attendance/studentlist.php",
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

        $(document).on("click", ".deny", function(e) {
            e.preventDefault();
            var id = $(this).data("id");
            var element = this;

            $.ajax({
                url: "_attendance/deny.php",
                type: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    load_data();
                    if (data == 1) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'bottom-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'error',
                            title: 'User Denied!'
                        })
                    }
                }
            });
        });

        $(document).on("click", ".present", function(e) {
            e.preventDefault();
            var id = $(this).data("id");
            var element = this;

            $.ajax({
                url: "_attendance/present.php",
                type: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    load_data();
                    if (data == 1) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'bottom-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'success',
                            title: 'Signed in successfully'
                        })
                    }
                }
            });
        });

    });
    </script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>