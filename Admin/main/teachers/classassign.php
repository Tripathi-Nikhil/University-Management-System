<?php include '../../includes/dbconn.php';



?>
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

    </div>
    </div>

    <div class="card shadow shadow-sm mt-5">
        <form action="" method="post">
            <div class="row">
                <div class=" p-5 ">
                    <div class="card border-0">
                        <div class="row p-2">
                            <div class="col-5">
                                <label class="fw-bold" for="">Branch: </label>
                            </div>

                            <div class="col-7">
                                <select name="branch" id="branch" class="form-control" required>
                                    <option value="" disabled>Select Branch</option>
                                    <?php
                        $branch = mysqli_query($db, "SELECT * FROM branchinfo WHERE branch != ''");
                        if(mysqli_num_rows($branch)>0){
                            while($row = mysqli_fetch_assoc($branch)){
                                ?>
                                    <option value="<?=$row['branch']?>"><?=$row['branch']?></option>
                                    <?php
                            }
                        }
                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-5">
                                <label class="fw-bold" for="">Course: </label>
                            </div>

                            <div class="col-7">
                                <select name="course" id="course" class="form-control" required>
                                    <option disabled>Select Course</option>
                                    <?php
                        $branch = mysqli_query($db, "SELECT * FROM branchinfo WHERE course != ''");
                        if(mysqli_num_rows($branch)>0){
                            while($row = mysqli_fetch_assoc($branch)){
                                ?>
                                    <option value="<?=$row['course']?>"><?=$row['course']?></option>
                                    <?php
                            }
                        }
                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-5">
                                <label class="fw-bold" for="">Year: </label>
                            </div>

                            <div class="col-7">
                                <select name="year" class="form-control" required>
                                    <option disabled>Year</option>
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-5">
                                <label class="fw-bold" for="">Subjects: </label>
                            </div>

                            <div class="col-7">
                                <select name="subject" class="form-control">
                                    <?php
                        $course = mysqli_query($db, "SELECT * FROM branchinfo WHERE subject1 != ''");
                        if(mysqli_num_rows($course)>0){
                            while($row = mysqli_fetch_assoc($course)){
                                ?>
                                    <option value="<?=$row['subject1']?>"><?=$row['subject1']?></option>
                                    <?php
                            }
                        }
                        ?>
                                </select>
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-5">
                                <label class="fw-bold" for="">Teachers: </label>
                            </div>

                            <div class="col-7">
                                <select name="teacher" class="form-control">
                                    <option disabled>Select Teacher</option>
                                    <?php
                        $course = mysqli_query($db, "SELECT * FROM teacherdetails");
                        if(mysqli_num_rows($course)>0){
                            while($row = mysqli_fetch_assoc($course)){
                                ?>
                                    <option value="<?=$row['regid']?>"><?=$row['teachername']?></option>
                                    <?php
                            }
                        }
                        ?>
                                </select>
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-5">
                                <label class="fw-bold" for="">Teachers: </label>
                            </div>

                            <div class="col-7">
                                <input type="time" name="time" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mb-5">
                <input type="submit" name="submit" value="Submit" class=" form-control w-50 btn btn-primary">
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        
        $branch = $_POST['branch'];
        $course = $_POST['course'];
        $year = $_POST['year'];
        $subject = $_POST['subject'];
        $teacher = $_POST['teacher'];
        $time = $_POST['time'];
        // 

        $fff = mysqli_query($db, "SELECT * FROM subteacher WHERE teacherid = '$teacher'");
        if($fff){
            if(mysqli_num_rows($fff)<6){
                $ins = mysqli_query($db, "INSERT INTO subteacher(subject1, teacherid, stime, course) VALUES ('$subject','$teacher','$time','$course')");
            }
            else{
                echo ' <script>
                swal("ERROR!", "Maximum Add Limit Reached for '.$teacher.'!", "error");
                </script>';
            }
        }else{
            $ins = mysqli_query($db, "INSERT INTO subteacher(subject1, teacherid, stime, course) VALUES ('$subject','$teacher','$time','$course')");
        }
            
           $teacherq = "SELECT * FROM subteacher WHERE teacherid = '$teacher'";
           $teachrun = mysqli_query($db, $teacherq);
           if(mysqli_fetch_row($teachrun)>0){
           ?>
    <table class="table">
        <thead>
            <tr>
                <th>Teacher I'd</th>
                <th>Course</th>
                <th>Subject</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
        while($row = mysqli_fetch_array($teachrun))
	{?>
            <tr>
                <td><?=$row['teacherid']?></td>
                <td><?=$row['course']?></td>
                <td><?=$row['subject1']?></td>
                <td><?=$row['stime']?></td>
            </tr>
            <?php
    }
            ?>
        </tbody>
    </table>

  
    <?php
            }
        } 
    ?>




    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>