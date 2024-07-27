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
</head>

<body id="body-pd">
    <?php include 'studentnav.php' ?>
    <?php include 'menustudent.php' ?>
    <?php include 'studentcrud.php' ?>


    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
        rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

    <style>
    #img {
        width: 250px;
        height: 260px;
        flex: auto;
        justify-content: center;
        margin: 10px;
    }

    .form-group input {
        width: 30%;
        flex: auto;
        margin-left: 5px;
        margin-right: 5px;
    }

    .form-group .btn {
        border-radius: 30px;
        width: 20%;
    }
    </style>



    <?php

include '../../includes/dbconn.php';
 $updateid = $_GET['id'];
 $show = "SELECT * FROM studentdetails WHERE regid ='$updateid'";
 $showdata= mysqli_query($db , $show);
 $data = mysqli_fetch_array($showdata);
?>



    <form action="_stud/reupdate.php" id="myform" method="POST" enctype="multipart/form-data">
        <div class="container border shadow shadow-sm p-3 card mb-5 border-2">
            <div class="row">
                <div class="col-lg-4 mt-2">
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold">Student Name: </label>
                        <input type="text" name="name" value="<?= $data['name']?>" class="form-control">
                    </div>
                    <div class="form-group d-flex text-center p-2">

                        <label for="" class="p-1 fw-bold ">Gender: </label>
                        <input type="text" name="gender" class="form-control" value="<?= $data['gender']?>">
                    </div>
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold">Adhaar Number: </label>
                        <input type="text" name="adhaar" value="<?= $data['adhaar']?>" class="form-control"
                            placeholder="XXXX-XXXX-XXXX">
                    </div>
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold">Father's Name: </label>
                        <input type="text" name="fname" value="<?= $data['fathername']?>" class="form-control">
                    </div>
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold ">Mother's Name: </label>
                        <input type="text" name="mname" value="<?= $data['mothername']?>" class="form-control">
                    </div>

                </div>

                <div class="col-lg-5 mt-2">

                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold">Reg. ID: </label>
                        <input type="text" name="regId" class="form-control"="" value="<?= $data['regid']?>"
                            style="width: 200px; height: 35px;">
                    </div>
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold ">Date of Birth: </label>
                        <input type="date" name="dob" value="<?= $data['dob']?>" class="form-control" required>
                    </div>
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold ">Student's Contact: </label>
                        <input type="text" maxlength="10" pattern="\d{10}" name="contact"
                            value="<?= $data['studentcontact']?>" class="form-control" placeholder="Student's Contact">
                    </div>
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold ">Father's Contact: </label>
                        <input type="text" name="papacontact" maxlength="10" pattern="\d{10}" class="form-control"
                            value="<?= $data['fathercontact']?>" placeholder="Father's Contact">
                    </div>
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold ">Mother's Contact: </label>
                        <input type="text" name="mammicontact" maxlength="10" pattern="\d{10}" class="form-control"
                            value="<?= $data['mothercontact']?>" placeholder="Mother's Contact">
                    </div>

                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <img id="img" src="img/<?= $data['image']?>" class="border border-dark">
                        <input type="file" name="file" class="w-100" id="image" onchange="readURL(this);"
                            accept="image/gif, image/jpeg, image/png">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold">Email: </label>
                        <input type="text" name="email" class="form-control" value="<?= $data['email']?>"
                            placeholder="E-mail" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold">Alternate Email: </label>
                        <input type="text" name="email" class="form-control" value="<?= $data['email']?>"
                            placeholder="E-mail" required>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group d-flex p-2">
                        <label for="" class="p-1 fw-bold">Permanent Address: </label>
                        <textarea name="address" form="myform" class="form-control" value="<?= $data['address']?>"
                            placeholder="Address Here..."></textarea>
                    </div>
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold">City: </label>
                        <input type="text" name="city" class="form-control" placeholder="City name"
                            value="<?= $data['city']?>">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold">Pin: </label>
                        <input type="text" name="pincode" class="form-control" value="<?= $data['pin']?>"
                            placeholder="Enter Pin Code">
                    </div>
                    <div class="form-group d-flex p-2">
                        <label for="" class="p-1 fw-bold ">State: </label>
                        <input type="text" name="state" class="form-control" placeholder="State Name"
                            value="<?= $data['state']?>">
                    </div>
                </div>
            </div>

            <div class="row p-3">
                <table class="table border border-dark table-striped">
                    <thead class="">
                        <tr>
                            <th scope="col">Examination</th>
                            <th scope="col">Board</th>
                            <th scope="col">Percentage</th>
                            <th scope="col">Year of Passing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="">High School</th>
                            <td><input type="text" name="hsboard" class="form-control" placeholder="Board"
                                    value="<?= $data['hsboard']?>"></td>
                            <td><input type="text" name="hspercent" class="form-control" placeholder="Percentage"
                                    value="<?= $data['hspercent']?>"></td>
                            <td><select name="hsyear" class="form-control">
                                    <option value="<?=$data['hspassyear']?>"><?=$data['hspassyear']?></option>
                                    <?php
                                         for( $i=2000; $i<=2030; $i++ )
                                         {
                                        ?><option value="<?=$i?>"><?=$i?></option>";<?php
                                         }
                                    ?>
                                </select>
                        </tr>
                        <tr>
                            <th scope="row">Intermediate</th>
                            <td><input type="text" name="imboard" class="form-control" placeholder="Board"
                                    value="<?= $data['imboard']?>"></td>
                            <td><input type="text" name="impercent" class="form-control" placeholder="Percentage"
                                    value="<?= $data['impercent']?>"></td>
                            <td><select name="imyear" class="form-control">
                                    <option value="<?=$data['impassyear']?>"><?=$data['impassyear']?></option>
                                    <?php
                                         for( $i=2000; $i<=2030; $i++ )
                                         {
                                        ?><option value="<?=$i?>"><?=$i?></option>";<?php
                                         }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Graduation</th>
                            <td><input type="text" name="gboard" class="form-control" placeholder="Board"
                                    value="<?= $data['gboard']?>"></td>
                            <td><input type="text" name="gpercent" class="form-control" placeholder="Percentage"
                                    value="<?= $data['gpercent']?>"></td>
                            <td><select name="gyear" class="form-control">
                                    <option value="<?=$data['gpassyear']?>"><?=$data['gpassyear']?></option>
                                    <?php
                                         for( $i=2000; $i<=2030; $i++ )
                                         {
                                        ?><option value="<?=$i?>"><?=$i?></option>";<?php
                                         }
                                    ?>
                                </select></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold ">Branch: </label>
                        <select class="form-control" id="branch" name="branch" required>
                            <option value="<?=$data['branch']?>"><?=$data['branch']?></option>
                            <?php
                                include '../../includes/dbconn.php';
                                $query = mysqli_query($db,"SELECT * FROM branchinfo WHERE branch != ''");
                                while($row = mysqli_fetch_assoc($query)){
                            ?>
                            <option value="<?=$row['branch']?>"><?=$row['branch']?></option>
                            <?php
                }
                ?>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group d-flex text-center p-2">
                        <label for="" class="p-1 fw-bold ">Course: </label>
                        <select class="form-control" name="course" id="course">
                            <option value="<?= $data['course']?>"><?= $data['course']?></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <p class="text-center"><input type="checkbox" name="" id="" required> <span
                class="text-danger">*</span>Confirmation<span class="text-danger">!</span> You are updating
            details on Registeration Id: <?= $data['regid']?></p>
        <div class="form-group text-center mb-4">
            <input type="submit" value="Update" name="submit" class="btn btn-primary ">
            <input type="reset" value="Reset" class="btn btn-danger ">
        </div>
    </form>


    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#img')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
    <script>
            $(document).ready(function() {
                $('#branch').on('change', function() {
                    var category_id = this.value;
                    $.ajax({
                        url: "_stud/course.php",
                        type: "POST",
                        data: {
                            category_id: category_id
                        },
                        cache: false,
                        success: function(result) {
                            $("#course").html(result);
                        }
                    });
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