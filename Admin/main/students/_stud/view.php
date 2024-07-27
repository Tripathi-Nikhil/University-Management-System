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
    <link rel="stylesheet" href="../../../utility/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../../../utility/css/adminlte.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body id="body-pd">

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

        include '../../../includes/dbconn.php';
        $updateid = $_GET['id'];
        $show = "SELECT * FROM studentdetails WHERE regid ='$updateid'";
        $showdata= mysqli_query($db , $show);
        $data = mysqli_fetch_array($showdata);
    ?>

    <div id="view" class="container border shadow shadow-sm p-3 card mb-5 border-2">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <button class="btn btn-white" onclick="window.print()"><i
                        class="fas text-danger fa-print">Print</i></button>
            </div>
        </div>
        <div class="row" >
            <div class="col-lg-4 mt-2">
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Student Name: </label>
                    <input type="text" readonly name="name" value="<?= $data['name']?>" class="form-control">
                </div>
                <div class="form-group d-flex text-center p-2">

                    <label for="" class="p-1 fw-bold ">Gender: </label>
                    <input type="text" readonly name="gender" class="form-control" value="<?= $data['gender']?>">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Adhaar Number: </label>
                    <input type="text" readonly name="adhaar" value="<?= $data['adhaar']?>" class="form-control"
                        placeholder="XXXX-XXXX-XXXX">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Father's Name: </label>
                    <input type="text" readonly name="fname" value="<?= $data['fathername']?>" class="form-control">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Mother's Name: </label>
                    <input type="text" readonly name="mname" value="<?= $data['mothername']?>" class="form-control">
                </div>

            </div>

            <div class="col-lg-5 mt-2">

                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Reg. ID: </label>
                    <input type="text" readonly name="regId" class="form-control" readonly=""
                        value="<?= $data['regid']?>" style="width: 200px; height: 35px;">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Date of Birth: </label>
                    <input type="date" name="dob" value="<?= $data['dob']?>" class="form-control" required>
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Student's Contact: </label>
                    <input type="text" readonly maxlength="10" pattern="\d{10}" name="contact"
                        value="<?= $data['studentcontact']?>" class="form-control" placeholder="Student's Contact">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Father's Contact: </label>
                    <input type="text" readonly name="papacontact" maxlength="10" pattern="\d{10}" class="form-control"
                        value="<?= $data['fathercontact']?>" placeholder="Father's Contact">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Mother's Contact: </label>
                    <input type="text" readonly name="mammicontact" maxlength="10" pattern="\d{10}" class="form-control"
                        value="<?= $data['mothercontact']?>" placeholder="Mother's Contact">
                </div>

            </div>

            <div class="col-lg-3">
                <div class="form-group text-center">
                    <img id="img" src="../img/<?= $data['image']?>" class="border border-dark">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Email: </label>
                    <input type="text" readonly name="email" class="form-control" value="<?= $data['email']?>"
                        placeholder="E-mail" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Alternate Email: </label>
                    <input type="text" readonly name="email" class="form-control" value="<?= $data['email']?>"
                        placeholder="E-mail" required>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group d-flex p-2">
                    <label for="" class="p-1 fw-bold">Permanent Address: </label>
                    <textarea name="address" form="myform" readonly class="form-control" value="<?= $data['address']?>"
                        placeholder="Address Here..."></textarea>
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">City: </label>
                    <input type="text" readonly name="city" class="form-control" placeholder="City name"
                        value="<?= $data['city']?>">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Pin: </label>
                    <input type="text" readonly name="pincode" class="form-control" value="<?= $data['pin']?>"
                        placeholder="Enter Pin Code">
                </div>
                <div class="form-group d-flex p-2">
                    <label for="" class="p-1 fw-bold ">State: </label>
                    <input type="text" readonly name="state" class="form-control" placeholder="State Name"
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
                        <td><input type="text" readonly name="hsboard" class="form-control" placeholder="Board"
                                value="<?= $data['hsboard']?>"></td>
                        <td><input type="text" readonly name="hspercent" class="form-control" placeholder="Percentage"
                                value="<?= $data['hspercent']?>"></td>
                        <td><input type="text" readonly name="hsyear" class="form-control" maxlength="4" pattern="\d{4}"
                                placeholder="Year of Passing" value="<?= $data['hspassyear']?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Intermediate</th>
                        <td><input type="text" readonly name="imboard" class="form-control" placeholder="Board"
                                value="<?= $data['imboard']?>"></td>
                        <td><input type="text" readonly name="impercent" class="form-control" placeholder="Percentage"
                                value="<?= $data['impercent']?>"></td>
                        <td><input type="text" readonly name="imyear" class="form-control" maxlength="4" pattern="\d{4}"
                                placeholder="Year of Passing" value="<?= $data['impassyear']?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Graduation</th>
                        <td><input type="text" readonly name="gboard" class="form-control" placeholder="Board"
                                value="<?= $data['gboard']?>"></td>
                        <td><input type="text" readonly name="gpercent" class="form-control" placeholder="Percentage"
                                value="<?= $data['gpercent']?>"></td>
                        <td><input type="text" readonly name="gyear" class="form-control" maxlength="4" pattern="\d{4}"
                                placeholder="Year of Passing" value="<?= $data['gpassyear']?>"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Branch: </label>
                    <input type="text" readonly name="branch" class="form-control" value="<?= $data['branch']?>">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Course: </label>
                    <input type="text" readonly name="course" class="form-control" value="<?= $data['course']?>">
                </div>
            </div>
        </div>
    </div>



    <script src="../../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../utility/js/adminlte.min.js"></script>
</body>

</html>