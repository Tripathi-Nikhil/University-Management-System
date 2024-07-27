<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet"
    type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="include/sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<!-- Popup Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!--  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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

<form action="#" id="myform" method="POST" enctype="multipart/form-data">
    <h5 align="left" style="width:fit-content; font-size:small;" class="p-2 rounded btn-primary fw-bold">Student
        Details:</h5>
    <div class="card">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Student Name<span class="text-danger">*</span>: </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Gender<span class="text-danger">*</span>: </label>
                    <select name="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Adhaar Number<span class="text-danger">*</span>: </label>
                    <input type="text" name="adhaar" maxlength="12" pattern="\d{10}" class="form-control" placeholder="XXXX-XXXX-XXXX">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Father's Name<span class="text-danger">*</span>: </label>
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Mother's Name<span class="text-danger">*</span>: </label>
                    <input type="text" name="mname" class="form-control">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Email<span class="text-danger">*</span>: </label>
                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                </div>

            </div>

            <div class="col-md-5 mt-2">

                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Reg. ID<span class="text-danger">*</span>: </label>
                    <input type="text" name="regId" class="form-control" value="<?=rand(1001,9999)?>"
                        placeholder="<?=rand(1001,9999)?>" style="width: 200px; height: 35px;">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Date of Birth<span class="text-danger">*</span>: </label>
                    <input type="date" name="dob" class="form-control" required>
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Student's Contact<span class="text-danger">*</span>: </label>
                    <input type="text" maxlength="10" pattern="\d{10}" name="contact" class="form-control"
                        placeholder="Student's Contact">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Father's Contact<span class="text-danger">*</span>: </label>
                    <input type="text" name="papacontact" maxlength="10" pattern="\d{10}" class="form-control"
                        placeholder="Father's Contact">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold ">Mother's Contact<span class="text-danger">*</span>: </label>
                    <input type="text" name="mammicontact" maxlength="10" pattern="\d{10}" class="form-control"
                        placeholder="Mother's Contact">
                </div>
                <div class="form-group d-flex text-center p-2">
                    <label for="" class="p-1 fw-bold">Alternate Email<span class="text-danger">*</span>: </label>
                    <input type="email" name="altemail" class="form-control" placeholder="Alternate E-mail">
                </div>

            </div>

            <div class="col-md-3">
                <div class="form-group text-center mt-2">
                    <img id="img" src="img/nopic.jpg" class="border border-dark">
                    <input type="file" name="file" class="w-100" id="image" onchange="readURL(this);"
                        accept="image/gif, image/jpeg, image/png">
                </div>
            </div>
        </div>
    </div>
    <hr class="text-dark">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group d-flex p-2">
                <label for="" class="p-1 fw-bold">Permanent Address<span class="text-danger">*</span>: </label>
                <textarea name="address" form="myform" class="form-control" placeholder="Address Here..."
                    style="width: 73%; height:36px;"></textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold">Pin<span class="text-danger">*</span>: </label>
                <input type="text" name="pincode" class="form-control" placeholder="Enter Pin Code">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold">City<span class="text-danger">*</span>: </label>
                <input type="text" name="city" class="form-control" placeholder="City name">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group d-flex p-2">
                <label for="" class="p-1 fw-bold ">State<span class="text-danger">*</span>: </label>
                <input type="text" name="state" class="form-control" placeholder="State Name">
            </div>
        </div>
    </div>

    <div class="row p-3">
        <table class="table border table-striped">
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
                    <th scope="row" class="text-center">High School<span class="text-danger">*</span></th>
                    <td><select name="hsboard" class="form-control">
                            <option value="UP Board">UP BOARD</option>
                            <option value="CBSE BOARD">CBSE</option>
                            <option value="ICSE BOARD">ICSE</option>
                        </select></td>
                    <td><input type="text" name="hspercent" class="form-control" placeholder="Percentage"></td>
                    <td><select name="hsyear" class="form-control">
                            <?php
                     for( $i=2000; $i<=2030; $i++ )
                     {
                    ?><option value="<?=$i?>"><?=$i?></option>";<?php
                     }
                    ?>
                        </select></td>
                </tr>
                <tr>
                    <th scope="row">Intermediate<span class="text-danger">*</span></th>
                    <td><select name="imboard" class="form-control">
                            <option value="UP Board">UP BOARD</option>
                            <option value="CBSE BOARD">CBSE</option>
                            <option value="ICSE BOARD">ICSE</option>
                        </select></td>
                    <td><input type="text" name="impercent" class="form-control" placeholder="Percentage"></td>
                    <td><select name="imyear" class="form-control">
                            <?php
                     for( $i=2000; $i<=2030; $i++ )
                     {
                    ?><option value="<?=$i?>"><?=$i?></option>";<?php
                     }
                    ?>
                        </select></td>
                </tr>
                <tr>
                    <th scope="row">Graduation</th>
                    <td><select name="gboard" class="form-control">
                            <option value="DDU">DDU</option>
                            <option value="AKTU">AKTU</option>
                        </select></td>
                    <td><input type="text" name="gpercent" class="form-control" placeholder="Percentage"></td>
                    <td><select name="gyear" class="form-control">
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
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold ">Branch<span class="text-danger">*</span>: </label>
                <select class="form-control" id="branch" name="branch" required>
                    <option value="">Select Branch</option>
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

        <div class="col-md-6">
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold ">Course<span class="text-danger">*</span>: </label>
                <select class="form-control" name="course" id="course">
                    <option value="">Select Branch</option>
                </select>
            </div>
        </div>
    </div>
    <hr>
    <p class="text-center"><input type="checkbox" name="" id="" required> <span class="text-danger">*</span>I hereby
        certify that the information filled is in presence of
        Student and is correct & valid .</p>
    <div class="form-group text-center mb-4">
        <input type="submit" value="Submit" name="submit" class="btn btn-primary ">
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
                .width(250)
                .height(260);
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

<?php

include '../../includes/dbconn.php';
if (isset($_POST['submit'])) {
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
                                                    $file_loc = $_FILES['file']['tmp_name'];
                                                    $tempname= $_FILES["file"]["tmp_name"];

                                                 $folder="img/".$file;
                                                 
                                                 move_uploaded_file($file_loc,$folder);
    $username = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $adhar = $_POST['adhaar'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $papacontact = $_POST['papacontact'];
    $mammicontact = $_POST['mammicontact'];
    $email = $_POST['email'];
    $reg = strtoupper(substr($username, 0,4)).$_POST['regId'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $hsboard = $_POST['hsboard'];
    $hspercent = $_POST['hspercent'];
    $hsyear = $_POST['hsyear'];
    $imboard = $_POST['imboard'];
    $impercent = $_POST['impercent'];
    $imyear = $_POST['imyear'];
    $gboard = $_POST['gboard'];
    $gpercent = $_POST['gpercent'];
    $gyear = $_POST['gyear'];
    $branch = $_POST['branch'];
    $course = $_POST['course'];


    $row = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM branchinfo WHERE course = '$course'"));
    $fees = $row['Fees'];


    $query = "INSERT INTO studentdetails(name, fathername, mothername, adhaar, dob, gender, studentcontact,
     fathercontact, mothercontact,email, regid, address, pin, city, state, hsboard, hspercent, hspassyear,
      imboard, impercent, impassyear, gboard, gpercent, gpassyear, branch, course, image, fees)VALUES 
      ('$username','$fname','$mname','$adhar','$dob','$gender', '$contact','$papacontact',
    '$mammicontact','$email','$reg','$address','$pincode','$city','$state','$hsboard','$hspercent','$hsyear','$imboard','$impercent','$imyear',
    '$gboard','$gpercent','$gyear','$branch','$course','$file', '$fees')";
    $run = mysqli_query($db, $query);

    if($run)
    {
?>
<script type="text/javascript">
Swal.fire({
    icon: 'success',
    title: 'Insert Successfull',
    // text: 'Submit',
    // footer: '<a href>Why do I have this issue?</a>'
}).then(function() {
    // Redirect the user
    window.location.href = "student.php";
});
</script>
<?php
    }

    else{
        echo "not ok";
    }
}
?>