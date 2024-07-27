<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet"
    type="text/css" />
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



<form action="" id="myform" method="POST" enctype="multipart/form-data">

    <div class="row">
        <div class="col-md-4 mt-1">
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold">Teacher Name<span class="text-danger">*</span>: </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold ">Date of Birth<span class="text-danger">*</span>: </label>
                <input type="date" name="dob" class="form-control" required>
            </div>
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold">Adhaar Number<span class="text-danger">*</span>: </label>
                <input type="text" name="adhaar" class="form-control p-1">
            </div>
            <div class="form-group p-2 text-center d-flex">
                <label for="" class="p-1 fw-bold ">Contact<span class="text-danger">*</span>:</label>
                <input type="text" maxlength="10" pattern="\d{10}" name="contact" class="form-control"
                    placeholder="Teacher's Contact">
            </div>
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold">Father's Name<span class="text-danger">*</span>: </label>
                <input type="text" name="fname" class="form-control">
            </div>
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold">Mother's Name<span class="text-danger">*</span>: </label>
                <input type="text" name="mname" readonly class="form-control">
            </div>
        </div>

        <div class="col-md-5 mt-1">
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold">Reg. ID<span class="text-danger">*</span>: </label>
                <input type="text" name="regId" class="form-control" value="<?=rand(1001,9999)?>"
                    placeholder="<?=rand(1001,9999)?>" readonly>
            </div>
            <div class="form-group p-2 d-flex text-center">
                <label for="" class="p-1 fw-bold ">Gender<span class="text-danger">*</span>: </label>
                <select name="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold">Email<span class="text-danger">*</span>: </label>
                <input type="text" name="email" class="form-control" placeholder="E-mail" style=" height: 35px;"
                    required>
            </div>
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold ">Alternate Contact<span class="text-danger">*</span>:</label>
                <input type="text" name="altcontact" maxlength="10" pattern="\d{10}" class="form-control"
                    placeholder="Alternate Contact">
            </div>
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold">Father's Contact<span class="text-danger">*</span>: </label>
                <input type="text" name="fcontact" class="form-control">
            </div>
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold">Mother's Contact<span class="text-danger">*</span>: </label>
                <input type="text" name="mcontact" readonly class="form-control">
            </div>
        </div>

        <div class="col-md-3">
            <div class="col-md-3 p-1">
                <img id="img" src="img/no-profile-male-img.gif" class="border border-dark">
                <input type="file" name="file" class="" id="image" onchange="readURL(this);"
                    accept="image/gif, image/jpeg, image/png">
            </div>
        </div>
    </div>


    
    <hr class="mt-2">
    <div class="form-group d-flex text-center p-2">
        <label for="" class="p-1 fw-bold">Permanent Adress<span class="text-danger">*</span>: </label>
        <textarea name="address" form="myform" class="form-control" placeholder="Address Here..."></textarea>
    </div>

    <div class="form-group d-flex p-2">
        <label for="" class="p-1 fw-bold">Pin<span class="text-danger">*</span>: </label>
        <input type="text" name="pincode" class="form-control" placeholder="Enter Pin Code">
        <label for="" class="p-1 fw-bold">City<span class="text-danger">*</span>: </label>
        <input type="text" name="city" class="form-control" placeholder="City name">
        <label for="" class="p-1 fw-bold ">State<span class="text-danger">*</span>: </label>
        <input type="text" name="state" class="form-control" placeholder="State Name">
    </div>
    </div>
    <hr class="text-dark">
    <!-- <div class="edu table-responsive">
        <table class="table table-striped">
            <thead>
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
                    <td><input type="text" name="hsboard" class="form-control" placeholder="Board"></td>
                    <td><input type="text" name="hspercent" class="form-control" placeholder="Percentage"></td>
                    <td><input type="text" name="hsyear" class="form-control" maxlength="4" pattern="\d{4}"
                            placeholder="Year of Passing"></td>
                </tr>
                <tr>
                    <th scope="row">Intermediate<span class="text-danger">*</span></th>
                    <td><input type="text" name="imboard" class="form-control" placeholder="Board"></td>
                    <td><input type="text" name="impercent" class="form-control" placeholder="Percentage"></td>
                    <td><input type="text" name="imyear" class="form-control" maxlength="4" pattern="\d{4}"
                            placeholder="Year of Passing"></td>
                </tr>
                <tr>
                    <th scope="row">Graduation</th>
                    <td><input type="text" name="gboard" class="form-control" placeholder="Board"></td>
                    <td><input type="text" name="gpercent" class="form-control" placeholder="Percentage"></td>
                    <td><input type="text" name="gyear" class="form-control" maxlength="4" pattern="\d{4}"
                            placeholder="Year of Passing"></td>
                </tr>
            </tbody>
        </table>
    </div> -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group d-flex text-center p-2">
                <label for="" class="p-1 fw-bold ">Department<span class="text-danger">*</span>: </label>
                <select class="form-control" id="dep" name="dep" required>
                    <option value="">Select Branch</option>
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
                    <option value="">Select Branch</option>
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div class="form-group text-center mt-2 mb-4">
        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-danger">
    </div>
</form>
<p class="text-center"><span class="text-danger">*</span>Information about Department and Branch are subject to change.
</p>

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

<?php
include '../../includes/dbconn.php';

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $file =strtoupper(substr($username, 0,4)).$_FILES['file']['name'];
                                                    $file_loc = $_FILES['file']['tmp_name'];
                                                    $tempname= $_FILES["file"]["tmp_name"];

                                                 $folder="img/".$file;
                                                 
                                                 move_uploaded_file($file_loc,$folder);

    $fname = $_POST['fname'];
    $adhar = $_POST['adhaar'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $altcontact = $_POST['altcontact'];
    $email = $_POST['email'];
    $reg = strtoupper(substr($username, 0,4)).$_POST['regId'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $dep = $_POST['dep'];
    $branch = $_POST['branch'];
    

    $query = "INSERT INTO teacherdetails(teachername, fathername, adhaaar, dob, contact1, contact2, 
    email, regid, gender, address, pin, city, state, department, branch, image) VALUES 
      ('$username','$fname','$adhar','$dob','$contact', '$altcontact','$email','$reg','$gender','$address','$pincode','$city','$state',
      '$dep','$branch','$file')";
    $run = mysqli_query($db, $query);

    if($run)
    {
        echo '<script type="text/javascript">alert("Registration Successful")</script>';
    }

    else{
        echo "not ok";
    }
}
?>