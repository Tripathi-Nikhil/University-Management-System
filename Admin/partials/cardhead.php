<style>
.box {
    box-shadow: 0px 0px 0px grey;
    -webkit-transition: box-shadow .6s ease-out;
    box-shadow: .8px .9px 3px grey;
}

.box:hover {
    box-shadow: 1px 8px 20px grey;
    -webkit-transition: box-shadow .6s ease-in;
}
</style>

<div class="row">
    <div class="col-md-3">
        <div class="card shadow box">
            <div class="card-body">
                <div class="row">
                    <div class="col" align="left">
                        <i class="fas fa-user-graduate text-primary fa-3x"></i>
                    </div>
                    <div class="col" align="right">
                        <?php 
                        $countstud = mysqli_num_rows(mysqli_query($db, "SELECT * FROM studentdetails"));
                        if($countstud){
                            ?>
                        <h5 class="fw-bold mt-3"><?=$countstud?></h5>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-primary">
                <div class="row mt-1">
                    <div class="col" align="left">
                        <p class="fw-bold text-white">Total Students</p>
                    </div>
                    <div class="col" align="right">
                        <p class="fw-bold "><a href="main/students/viewstudent.php" style="text-decoration: none;" class="text-white">View all <i
                                    class="fas fa-arrow-right text-white"></i></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow box">
            <div class="card-body">
                <div class="row">
                    <div class="col" align="left">
                        <i class="fas fa-chalkboard-teacher text-primary fa-3x"></i>
                    </div>
                    <div class="col" align="right">
                        <?php 
                        $countstud = mysqli_num_rows(mysqli_query($db, "SELECT * FROM teacherdetails"));
                        if($countstud){
                            ?>
                        <h5 class="fw-bold mt-3"><?=$countstud?></h5>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-primary">
                <div class="row mt-1">
                    <div class="col" align="left">
                        <p class="fw-bold text-white">Total Teachers</p>
                    </div>
                    <div class="col" align="right">
                        <p class="fw-bold "><a href="main/teachers/viewteacher.php" style="text-decoration: none;" class="text-white">View all <i
                                    class="fas fa-arrow-right text-white"></i></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow box">
            <div class="card-body">
                <div class="row">
                    <div class="col" align="left">
                        <i class="fw-bold fab fa-teamspeak text-primary fa-3x"></i>
                    </div>
                    <div class="col" align="right">
                        <?php 
                        $countstud = mysqli_num_rows(mysqli_query($db, "SELECT * FROM studentdetails"));
                        if($countstud){
                            ?>
                        <h5 class="fw-bold mt-3"><?=$countstud?></h5>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-primary">
                <div class="row mt-1">
                    <div class="col" align="left">
                        <p class="fw-bold text-white">Teacher Reports</p>
                    </div>
                    <div class="col" align="right">
                        <p class="fw-bold "><a href="" style="text-decoration: none;" class="text-white">View all <i
                                    class="fas fa-arrow-right text-white"></i></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow box">
            <div class="card-body">
                <div class="row">
                    <div class="col" align="left">
                        <i class="fas fa-rupee-sign text-primary fa-3x"></i>
                    </div>
                    <div class="col-6" align="right">
                        <?php 
                        $countfee = mysqli_query($db, "SELECT * FROM accounts");
                       
                        $total = 0;
                        while( $row = mysqli_fetch_assoc($countfee)){
                          $fee= $row['totalpaid'];
                          $total += $fee;
                        }
                            ?>
                        <h5 class="fw-bold mt-3">&#8377; <?=$total?></h5>
                        <?php

                        ?>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-primary">
                <div class="row mt-1">
                    <div class="col" align="left">
                        <p class="fw-bold text-white">Fee Collected</p>
                    </div>
                    <div class="col" align="right">
                        <p class="fw-bold "><a href="http://localhost/university/Admin/main/accounts/accounts.php" style="text-decoration: none;" class="text-white">View Report <i
                                    class="fas fa-arrow-right text-white"></i></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>