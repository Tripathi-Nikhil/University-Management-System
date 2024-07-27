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
    <?php include '_library/librarynav.php' ?>
    <?php include '_library/librarymenu.php' ?>
    <?php include '_library/librarycrud.php' ?>
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

    }
    </style>

    <div class="row">
        <div class="col-md-6">
            <img src="img/1bg.jpg" alt="" class="rounded shadow">
        </div>
        <div class="col-md-6 text-center">
            <section class="p-2">
                <img src="img/2bg.jpg" alt="" class="rounded-circle mt-2 mb-3" style="width: 180px; height: 180px;">
                <?php
include '../../includes/dbconn.php';

$updateid = $_GET['id'];
$show = "SELECT * FROM library WHERE bookid ='$updateid'";
$showdata= mysqli_query($db , $show);
$data = mysqli_fetch_array($showdata);


?>

                <form action="_library/updatebook.php" method="post">
                    <div class="form-group d-flex  p-2">
                        <input type="text" name="bookid" class="form-control" value="<?= $data['bookid']?>" readonly>
                        <select name="bookedition" class="form-control" style="width: 550px;">
                            <option value="<?=$data['edition']?>"><?= $data['edition']?></option>
                            <option value="1st Edition">1st Edition</option>
                            <option value="2nd Edition">2nd Edition</option>
                            <option value="3rd Edition">3rd Edition</option>
                            <option value="4th Edition">4th Edition</option>
                            <option value="5th Edition">5th Edition</option>
                            <option value="6th Edition">6th Edition</option>
                            <option value="7th Edition">7th Edition</option>
                        </select>
                    </div>
                    <div class="form-group  p-2">
                        <input type="text" name="bookname" class="form-control" value="<?= $data['bookname']?>">
                    </div>
                    <div class="form-group  p-2">
                        <input type="text" name="author" class="form-control" value="<?= $data['author']?>">
                    </div>
                    <div class="form-group d-flex p-2">
                        <input type="text" name="pages" class="form-control" value="<?= $data['pages']?>">
                        <input type="text" name="quantity" class="form-control" value="<?= $data['quantity']?>">
                    </div>

                    <div class="form-group  p-2">
                        <input type="text" name="category" class="form-control" value="<?= $data['category']?>">
                    </div>
                    <div class="form-group p-2">
                        <input type="text" name="branch" class="form-control" value="<?= $data['branch']?>">
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" value="Update" name="submit" class="btn btn-primary ">
                        <input type="reset" value="Reset" class="btn btn-danger ">
                    </div>
                </form>
            </section>
        </div>
    </div>


    </div>
    </div>


    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>