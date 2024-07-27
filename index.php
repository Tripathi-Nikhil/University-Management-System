<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>University Management System</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="login/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="login/img/favicon.png" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css">

    <link href="login/css/bootstrap.min.css" rel="stylesheet" />
    <link href="login/css/material-bootstrap-wizard.css" rel="stylesheet" />
    <link href="login/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('login/img/bglogin.jpg')">
        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="blue" id="wizard">
                            <div class="wizard-header">
                                <h3 class="wizard-title"> <span class="text-primary fas fa-fingerprint"></span>
                                    Login Form<span class="text-danger fw-bold">.</span>
                                </h3>
                                <h5>Choose Your Role and Login to Get Access.</h5>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#location" data-toggle="tab">Admin</a></li>
                                    <li><a href="#type" data-toggle="tab">Teacher</a></li>
                                    <li><a href="#facilities" data-toggle="tab">Student</a></li>
                                    <li><a href="#description" data-toggle="tab">Activate Now!</a></li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="location">
                                    <h4 class="info-text"> <span class="text-danger ">Note: </span>All fields are
                                        Required. <span class="text-danger fw-bolder text-center" id="errors"> </span>
                                    </h4>

                                    <form action="login/admincheck.php" name="admincheckform"
                                        onsubmit="return validateform()" method="post">
                                        <div class="admin-login" style="padding-left: 60px;padding-right: 60px;">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><span class="text-dark fa fa-user"></span>
                                                    Admin I'd</label>
                                                <input type="text" class="form-control" name="adminid">
                                            </div>

                                            <div class="form-group label-floating">
                                                <label class="control-label"><span class="text-dark fa fa-lock"></span>
                                                    Password</label>
                                                <input type="password" class="form-control" name="adminkey">
                                            </div>
                                            <div align="right" class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="adrem">
                                                <label class="form-check-label" for="Remember Me">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <input type="submit" class="btn btn-primary" value="Log in as Admin"
                                                name="adminlogin">
                                        </div>
                                    </form>
                                </div>


                                <div class="tab-pane" id="type">
                                    <h4 class="info-text"> <span class="text-danger ">Note: </span>All fields are
                                        Required.<span class="text-danger fw-bolder text-center" id="errors2"> </span>
                                    </h4>
                                    <form action="login/teachercheck.php" name="teachercheckform"
                                        onsubmit="return validateteacher()" method="post">
                                        <div class="teacher-login" style="padding-left: 60px;padding-right: 60px;">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><span
                                                        class="text-dark fas fa-chalkboard-teacher"></span>
                                                    Teacher Id</label>
                                                <input type="text" class="form-control" name="teacherid">
                                            </div>

                                            <div class="form-group label-floating">
                                                <label class="control-label"><span class="text-dark fa fa-lock"></span>
                                                    Password</label>
                                                <input type="password" class="form-control" name="teacherkey">
                                            </div>
                                            <div align="right" class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="teacherrem"
                                                   name="teacherrem">
                                                <label class="form-check-label" for="Remember Me">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <input type="submit" class="btn btn-primary" value="Log in as Teacher"
                                                name="teacherlogin">
                                        </div>
                                    </form>
                                </div>


                                <div class="tab-pane" id="facilities">
                                    <h4 class="info-text"> <span class="text-danger ">Note: </span>All fields are
                                        Required.<span class="text-danger fw-bolder text-center" id="errors3"> </span>
                                    </h4>
                                    <form action="login/studentcheck.php" name="studentcheckform" onsubmit="return validatestudent()"
                                        method="post">
                                        <div class="student-login" style="padding-left: 60px;padding-right: 60px;">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><span
                                                        class="text-dark fas fa-user-graduate"></span>
                                                    Student Id</label>
                                                <input type="text" class="form-control" id="studentid" name="studentid">
                                            </div>

                                            <div class="form-group label-floating">
                                                <label class="control-label"><span class="text-dark fa fa-lock"></span>
                                                    Password</label>
                                                <input type="text" class="form-control" id="studentkey"
                                                    name="studentkey">
                                            </div>
                                            <div align="right" class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="studentrem"
                                                    name="studentrem">
                                                <label class="form-check-label" for="Remember Me">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <input type="submit" class="btn btn-primary" value="Log in as Student"
                                                name="studentlogin">
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="description">
                                    <form action="login/activate.php" name="activatecheckform"
                                        onclick="return validateactivate()" method="post">
                                        <div class="row">

                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><i class="fas fa-sign-in-alt"></i>
                                                        Registration Id</label>
                                                    <input type="text" class="form-control" name="actregid" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><i class="fa fa-user"></i> Your
                                                        Role</label>
                                                    <select name="role" class="form-control" required>
                                                        <option disabled="" selected=""></option>
                                                        <option value="Student"> Student </option>
                                                        <option value="Teacher"> Teacher </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><i class="fa fa-envelope"></i>
                                                        Email</label>
                                                    <input type="Email" class="form-control" name="actemail" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group label-floating">
                                                    <div class="">
                                                        <input type="date" class="form-control" name="actdob" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><i class="fa fa-lock"></i>
                                                        Password</label>
                                                    <input type="password" class="form-control" name="actpass" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><i class="fa fa-lock"></i>
                                                        Confirm Password</label>
                                                    <div class="">
                                                        <input type="password" class="form-control" name="actcpass"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group d-flex" style="padding-left: 60px; padding-top:-20px">
                                            <input type="submit" value="Activate" class="btn-primary btn"
                                                name="activate">  <span class="text-danger fw-bolder text-center" id="errors4"> </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div> <!-- row -->
        </div> <!--  big container -->

        <div class="footer">
            <div class="container text-center">
                <a id="tasks" href="">Welcome to UMS.</a>
            </div>
        </div>
    </div>
</body>

<script>
function validateform() {
    let x = document.forms["admincheckform"]["adminid"].value;
    let y = document.forms["admincheckform"]["adminkey"].value;
    if (x == "") {
        document.getElementById('errors').innerHTML = "*Please enter Registration Id";
        return false;
    }
    if (y == "") {
        document.getElementById('errors').innerHTML = "*Please enter Password";
        return false;
    } else {
        document.getElementById('errors').innerHTML = "*Credentials donot match! or Not Registered";
    }
}
</script>
<script>
function validateteacher() {
    let x = document.forms["teachercheckform"]["teacherid"].value;
    let y = document.forms["teachercheckform"]["teacherkey"].value;
    if (x == "") {
        document.getElementById('errors2').innerHTML = "*Please enter Registration Id";
        return false;
    }
    if (y == "") {
        document.getElementById('errors2').innerHTML = "*Please enter Password";
        return false;
    }
}
</script>
<script>
function validatestudent() {
    let x = document.forms["studentcheckform"]["studentid"].value;
    let y = document.forms["studentcheckform"]["studentkey"].value;
    if (x == "") {
        document.getElementById('errors3').innerHTML = "*Please enter Registration Id";
        return false;
    }
    if (y == "") {
        document.getElementById('errors3').innerHTML = "*Please enter Password";
        return false;
    } else {
        document.getElementById('errors3').innerHTML = "*Credentials donot match! or Not Registered";
    }
}
</script>
<script>
function validateactivate() {
    let x = document.forms["activatecheckform"]["actregid"].value;
    let y = document.forms["activatecheckform"]["role"].value;
    let a = document.forms["activatecheckform"]["actemail"].value;
    let b = document.forms["activatecheckform"]["actdob"].value;
    let c = document.forms["activatecheckform"]["actpass"].value;
    let d = document.forms["activatecheckform"]["actcpass"].value;
    if (x == "") {
        document.getElementById('errors4').innerHTML = "*Please enter Registration Id";
        return false;
    }
    if (y == "") {
        document.getElementById('errors4').innerHTML = "*Choose your Role!";
        return false;
    }
    if (a == "") {
        document.getElementById('errors4').innerHTML = "*Enter your Email";
        return false;
    }
    if (b == "") {
        document.getElementById('errors4').innerHTML = "*Enter your Date of Birth";
        return false;
    }
    if (c == "") {
        document.getElementById('errors4').innerHTML = "*Enter a Password";
        return false;
    }
    if (d == "") {
        document.getElementById('errors4').innerHTML = "*Enter Confirm Password!";
        return false;
    }

    if (c != d) {
        document.getElementById('errors4').innerHTML = "*Passwords donot match!";
    }
}
</script>

<!--   Core JS Files   -->
<script src="login/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="login/js/bootstrap.min.js" type="text/javascript"></script>
<script src="login/js/jquery.bootstrap.js" type="text/javascript"></script>
<!--  Plugin for the Wizard -->
<script src="login/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="login/js/jquery.validate.min.js"></script>

</html>