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
    <?php include '_hostel/hostelnav.php' ?>
    <?php include '_hostel/hostelmenu.php' ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 card">
                <h3 class="text-center fw-bold text-primary p-2">Weekly Menu</h3>
                <div class="" style="overflow-y: auto; overflow-x: auto;">
                    <div class=" text-center" style="width: 100%;">
                        <table class="table table-bordered table-striped">
                            <thead class=" bg-dark text-white">

                                <th>Day</th>
                                <th>Breakfast</th>
                                <th>Lunch</th>
                                <th>Snacks</th>
                                <th>Dinner</th>

                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center">Monday</th>
                                    <td>Banana
                                        Milk & Tea
                                        Methi Parantha &
                                        White Matar</td>
                                    <td>Kofta
                                        Arhar Dal
                                        Roti
                                        Chawal
                                    </td>
                                    <td>Tea
                                        Samosa
                                    </td>
                                    <td>Dum Aloo
                                        Palak Urad Dal
                                        Roti
                                        Chawal
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">Tuesday</th>
                                    <td>Banana
                                        Milk & Tea
                                        Methi Parantha &
                                        White Matar</td>
                                    <td>Kofta
                                        Arhar Dal
                                        Roti
                                        Chawal
                                    </td>
                                    <td>Tea
                                        Samosa
                                    </td>
                                    <td>Dum Aloo
                                        Palak Urad Dal
                                        Roti
                                        Chawal
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">Wednesday</th>
                                    <td>Banana
                                        Milk & Tea
                                        Methi Parantha &
                                        White Matar</td>
                                    <td>Kofta
                                        Arhar Dal
                                        Roti
                                        Chawal
                                    </td>
                                    <td>Tea
                                        Samosa
                                    </td>
                                    <td>Dum Aloo
                                        Palak Urad Dal
                                        Roti
                                        Chawal
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">Thursday</th>
                                    <td>Banana
                                        Milk & Tea
                                        Methi Parantha &
                                        White Matar</td>
                                    <td>Kofta
                                        Arhar Dal
                                        Roti
                                        Chawal
                                    </td>
                                    <td>Tea
                                        Samosa
                                    </td>
                                    <td>Dum Aloo
                                        Palak Urad Dal
                                        Roti
                                        Chawal
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">Friday</th>
                                    <td>Banana
                                        Milk & Tea
                                        Methi Parantha &
                                        White Matar</td>
                                    <td>Kofta
                                        Arhar Dal
                                        Roti
                                        Chawal
                                    </td>
                                    <td>Tea
                                        Samosa
                                    </td>
                                    <td>Dum Aloo
                                        Palak Urad Dal
                                        Roti
                                        Chawal
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">Saturday</th>
                                    <td>Banana
                                        Milk & Tea
                                        Methi Parantha &
                                        White Matar</td>
                                    <td>Kofta
                                        Arhar Dal
                                        Roti
                                        Chawal
                                    </td>
                                    <td>Tea
                                        Samosa
                                    </td>
                                    <td>Dum Aloo
                                        Palak Urad Dal
                                        Roti
                                        Chawal
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">Sunday</th>
                                    <td>Banana
                                        Milk & Tea
                                        Methi Parantha &
                                        White Matar</td>
                                    <td>Kofta
                                        Arhar Dal
                                        Roti
                                        Chawal
                                    </td>
                                    <td>Tea
                                        Samosa
                                    </td>
                                    <td>Dum Aloo
                                        Palak Urad Dal
                                        Roti
                                        Chawal
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="col-md-6 card">
                <div class="" style="overflow-y: auto; height:423px">
                    <h3 class="text-center text-primary fw-bolder p-2"> <span class="text-danger">Complaints</span>
                        Register</h3>
                    <form action="" method="post">
                        <div class="border border-2 border-danger p-2">
                            <div class="form-group d-flex">
                                <input type="text" name="cstudid" class="form-control mb-2" placeholder="Student Id"
                                    required>&nbsp;
                                <input type="text" name="cname" class="form-control mb-2" placeholder="Student Name"
                                    required>
                            </div>

                            <div class="form-group text-center">
                                <select class="form-select" name="status" class="form-control">
                                    <option value="complain">Complain</option>
                                    <option value="suggestion">Suggestion</option>
                                </select>
                                <textarea name="complainbox" class="form-control mt-2" rows="2"
                                    placeholder="Enter Your Message"></textarea>
                            </div>

                            <input type="submit" value="Register Complain" name="order"
                                class="form-control mt-2 btn btn-danger " style="border-radius: 30px;">
                        </div>
                    </form>
                </div>
                <div class="" style="overflow-y: auto; height:300px">
                    <h3 class="text-center text-primary fw-bolder p-2"> <span class="text-success">Special</span> Order</h3>
                    <form action="" method="post">
                        <div class="border border-2 border-primary p-2 text-center">
                            <div class="form-group d-flex">
                                <label for="" class="fw-bold text-center p-2">Food 1 :&nbsp;&nbsp;</label>
                                <input type="text" name="food1" class="form-control mb-1"
                                    placeholder="This Order May Cost You Money" style="width: 87%;">
                            </div>
                            <div class="form-group d-flex">
                                <label for="" class="fw-bold text-center p-2">Food 2 :&nbsp;&nbsp;</label>
                                <input type="text" name="food2" class="form-control mb-1"
                                    placeholder="This Order May Cost You Money" style="width: 87%;">
                            </div>
                            <div class="form-group d-flex">
                                <label for="" class="fw-bold text-center p-2">Message:</label>
                                <textarea name="msg" class="form-control" style="width: 90%;"></textarea>
                            </div>


                            <div class="form-group text-center p-3">
                                <input type="submit" value="Order" name="order"
                                    class="form-control w-50 btn btn-success" style="border-radius: 30px;">
                            </div>
                        </div>

                    </form>
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