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
    <?php include '_teacher/teachernav.php' ?>
    <?php include '_teacher/teachermenu.php' ?>
    <?php include '_teacher/teachercrud.php' ?>
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
 $updateid = $_GET['rid'];
 $show = "SELECT * FROM teacherdetails WHERE regid ='$updateid'";
 $showdata= mysqli_query($db , $show);
 $data = mysqli_fetch_array($showdata);
?>
    <form action="_teacher/reupdate.php" id="myform" method="POST" enctype="multipart/form-data">
        <div class="row">

            <div class="col-md-4 mt-1">
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Teacher Name<span class="text-danger">*</span>: </label>
                    <input type="text" name="name" class="form-control" value="<?= $data['teachername']?>">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Date of Birth<span class="text-danger">*</span>: </label>
                    <input type="date" name="dob" class="form-control" value="<?= $data['dob']?>" required>
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Adhaar Number<span class="text-danger">*</span>: </label>
                    <input type="text" name="adhaar" class="form-control" value="<?= $data['adhaaar']?>">
                </div>
                <div class="form-group p-2 text-center d-flex">
                    <label for="" class="p-1 fw-bold ">Contact<span class="text-danger">*</span>:</label>
                    <input type="text" maxlength="10" pattern="\d{10}" name="contact" class="form-control"
                        placeholder="Teacher's Contact" value="<?= $data['contact1']?>">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Father's Name<span class="text-danger">*</span>: </label>
                    <input type="text" name="fname" class="form-control" value="<?= $data['fathername']?>">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Mother's Name<span class="text-danger">*</span>: </label>
                    <input type="text" name="mname" readonly class="form-control">
                </div>
            </div>

            <div class="col-md-5 mt-1">
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Reg. ID<span class="text-danger">*</span>: </label>
                    <input type="text" name="regId" class="form-control" readonly value="<?= $data['regid']?>"
                        placeholder="<?= $data['regid']?>" style="width: 200px; height: 35px;">
                </div>
                <div class="form-group p-2 d-flex text-center">
                    <label for="" class="p-1 fw-bold ">Gender<span class="text-danger">*</span>: </label>
                    <input type="text" name="gender" class="form-control" value="<?= $data['gender']?>"
                        style="width: 200px; height: 35px;">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Email<span class="text-danger">*</span>: </label>
                    <input type="text" name="email" class="form-control" value="<?= $data['email']?>"
                        placeholder="E-mail" style=" height: 35px;" required>
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Alternate Contact<span class="text-danger">*</span>:</label>
                    <input type="text" name="altcontact" maxlength="10" pattern="\d{10}" class="form-control"
                        value="<?= $data['contact2']?>">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Father's Contact<span class="text-danger">*</span>: </label>
                    <input type="text" readonly name="fcontact" class="form-control">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Mother's Contact<span class="text-danger">*</span>: </label>
                    <input type="text" name="mcontact" readonly class="form-control">
                </div>
            </div>

            <div class="col-md-3">
                <?php $pic = $data['image']; ?>
                <img id="img" src="img/<?=$pic?>" class="border border-dark">
                <input type="file" name="file" class="" id="image" onchange="readURL(this);"
                    accept="image/gif, image/jpeg, image/png">
            </div>



            <hr class="mt-2">
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold">Permanent Adress<span class="text-danger">*</span>: </label>
                <textarea name="address" form="myform" class="form-control" placeholder="Address Here..."
                    value="<?= $data['address']?>"></textarea>
            </div>

            <div class="form-group d-flex p-2">
                <label for="" class="p-1 fw-bold">Pin<span class="text-danger">*</span>: </label>
                <input type="text" name="pincode" class="form-control" placeholder="Enter Pin Code"
                    value="<?= $data['pin']?>">
                <label for="" class="p-1 fw-bold">City<span class="text-danger">*</span>: </label>
                <input type="text" name="city" class="form-control" placeholder="City name" value="<?= $data['city']?>">
                <label for="" class="p-1 fw-bold ">State<span class="text-danger">*</span>: </label>
                <input type="text" name="state" class="form-control" placeholder="State Name"
                    value="<?= $data['state']?>">
            </div>
        </div>
        <hr class="text-dark">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Department<span class="text-danger">*</span>: </label>
                    <select class="form-control" id="dep" name="dep" required>
                        <option value=""><?= $data['department']?></option>
                        <?php
                include '../../includes/dbconn.php';
                $query = mysqli_query($db,"SELECT * FROM branchinfo WHERE department != '' AND id != 1 AND id!=2");
                while($row = mysqli_fetch_assoc($query)){
                ?>
                        <option value="<?=$row['department']?>"><?=$row['department']?></option>
                        <?php
                }
                ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Branch<span class="text-danger">*</span>: </label>
                    <select class="form-control" name="branch" id="branch">
                        <option value=""><?= $data['branch']?></option>
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group text-center mt-2 mb-4">
            <input type="submit" value="Update" name="submit" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
    <p class="text-center"><span class="text-danger">*</span>Confirmation<span class="text-danger">!</span> You are
        updating
        details on Teacher's Registeration Id: <?= $data['regid']?>
    </p>


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
        $('#dep').on('change', function() {
            var category_id = this.value;
            $.ajax({
                url: "_teacher/branch.php",
                type: "POST",
                data: {
                    category_id: category_id
                },
                cache: false,
                success: function(result) {
                    $("#branch").html(result);
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