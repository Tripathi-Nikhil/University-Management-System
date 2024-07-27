<style>
#th th {
    min-width: 120px;
    text-align: center;
}

#tb td {
    vertical-align: middle;
    text-align: center;
}
</style>

<div class="card shadow mb-4">
    <div class="card-header bg-primary py-3">
        <h6 class="m-0 font-weight-bold text-white">Assignments Marking!</h6>
    </div>

    <div class="card">
        <form action="" method="post">
            <?php 
                            $queryforselect = mysqli_query($db, "SELECT * FROM studwork WHERE studsub = '$studenth'");
                            if((mysqli_num_rows($queryforselect))){
                                $prow = mysqli_fetch_assoc($queryforselect); ?>


            <div class="row p-2">
                <div class="col-2"></div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="" class="fw-bold">Select Students:</label>
                        <select name="studentsid" class="form-control" id="">
                            <option disabled selected>Select Student</option>
                            <option disabled>DIVY4180</option>
                            <?php while($prow = mysqli_fetch_assoc($queryforselect)){ ?>

                            <option value="<?=$prow['studid']?>"><?=$prow['studid']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <?php
                                }
                                ?>
                </div>

                <div class="col-2">
                    <div class="form-group">
                        <label for="" class="fw-bold">Select Students:</label>
                        <select name="workname" class="form-control" id="">
                            <option disabled selected>Select Student</option>
                            <option value="a1">Assignment - 1</option>
                            <option value="a2">Assignment - 2</option>
                            <option value="a3">Assignment - 3</option>
                            <option value="a4">Assignment - 4</option>
                            <option value="a5">Assignment - 5</option>
                            <option value="hw1">HomeWork - 1</option>
                            <option value="hw2">HomeWork - 2</option>
                            <option value="hw3">HomeWork - 3</option>
                            <option value="hw4">HomeWork - 4</option>
                            <option value="hw5">HomeWork - 5</option>
                            <option value="ct1">ClassTest - 1</option>
                            <option value="ct2">ClassTest - 2</option>
                            <option value="ct3">ClassTest - 3</option>
                            <option value="ct4">ClassTest - 4</option>
                            <option value="ct5">ClassTest - 5</option>
                            <option value="mp1">Model Paper - 1</option>
                            <option value="mp2">Model Paper - 2</option>
                            <option value="mp3">Model Paper - 3</option>
                            <option value="mp4">Model Paper - 4</option>
                            <option value="mp5">Model Paper - 5</option>
                        </select>
                    </div>

                </div>

                <div class="col-2">
                    <div class="form-group">
                        <label for="" class="fw-bold">Select Students:</label>
                        <select name="assignstat" class="form-control" id="">
                            <option disabled selected>Select Student</option>
                            <option value="1">Submitted</option>
                            <option value="0">Not Submitted!</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group p-1 text-center">
                        <input type="submit" value="Mark!" name="mark" class=" mt-4 btn btn-primary"
                            style="vertical-align: middle;">
                    </div>
                </div>
                <div class="col-2"></div>
            </div>

        </form>
        <?php
        if(isset($_POST['mark'])){
            $studentsid = $_POST['studentsid'];
            $workname = $_POST['workname'];
            $assignstat = $_POST['assignstat'];

            $runinsassign =  mysqli_query($db, "UPDATE studwork SET $workname = '$assignstat' WHERE studid = '$studentsid'");
            if($runinsassign){
                echo '<script>swal ( "Marked!" ,  "Assignment Marked!'.$studentsid.'" ,  "success" )</script>';
            }
        }
        ?>
    </div>




    <div class="card-body">
        <?php
        $st_course = $subfetch['course'];
        $st_year = $subfetch['year'];
        $queryst = "SELECT * FROM studentdetails WHERE course = '$st_course' AND year = '$st_year'";
        $runq = mysqli_query($db, $queryst);
        if(($numq = mysqli_num_rows($runq)>0)){
            ?>
        <div class="table-responsive">
            <table class="table table-dark tablestriped table-hover table-bordered">
                <thead id="th">
                    <th>S-No.</th>
                    <th>Avtaar</th>
                    <th>Status</th>
                    <th>Subject</th>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Assignment 1</th>
                    <th>Assignment 2</th>
                    <th>Assignment 3</th>
                    <th>Assignment 4</th>
                    <th>Assignment 5</th>
                    <th>Homework 1</th>
                    <th>Homework 2</th>
                    <th>Homework 3</th>
                    <th>Homework 4</th>
                    <th>Homework 5</th>
                    <th>ClassTest 1</th>
                    <th>ClassTest 2</th>
                    <th>ClassTest 3</th>
                    <th>ClassTest 4</th>
                    <th>ClassTest 5</th>
                    <th>ModelPaper 1</th>
                    <th>ModelPaper 2</th>
                    <th>ModelPaper 3</th>
                    <th>ModelPaper 4</th>
                    <th>ModelPaper 5</th>
                </thead>
                <tbody id="tb">
                    <?php
                    $i=0;
                while($st = mysqli_fetch_assoc($runq)){
                    $i+=1;
                    ?>
                    <tr>
                        <td><?=$i?></td>
                        <td><img src="../Admin/main/students/img/<?=$st['image']?>" class="rounded-circle img-thumbnail"
                                style="width:40px; height:40px" alt=""></td>
                        <td><?php
                        $stid = $st['regid'];
                        $status = mysqli_query($db, "SELECT * FROM studwork WHERE studid = '$stid'");
                        $m1 = mysqli_fetch_assoc($status);
                        if($status){
                            if((mysqli_num_rows($status)>0)){
                            echo '<button class="btn btn-success" disabled>Active</button>';
                            $vars = 0;
                        }else{
                            $st1 = $st['regid'];
                            $st2 = $st['name'];
                            $st3 = $st['course'];
                            $st4 = $st['year'];
                            $st5 = $subfetch['subject1'];

                            $insdo = mysqli_query($db, "INSERT INTO studwork(studid, studname, course, year, studsub) VALUES 
                            ('$st1','$st2','$st3','$st4','$st5')");

                            ?>

                            <button id="activate" class="activate btn btn-danger">Activating...</button>
                            <?php  $vars = 1;
                                }
                                }
                                ?>
                        </td>

                        <td><?=$subfetch['subject1']?></td>
                        <td><?=$st['regid']?></td>
                        <td><?=$st['name']?></td>
                        <td><?=$st['course']?></td>
                        <td><?=$st['year']?></td>
                        <td><?php 
                                if($m1['a1'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['a2'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['a3'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['a4'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['a5'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['hw1'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['hw2'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['hw3'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['hw4'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['hw5'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['ct1'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['ct2'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['ct3'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['ct4'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['ct5'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['mp1'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['mp2'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['mp3'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['mp4'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>
                        <td><?php 
                                if($m1['mp5'] == ''){
                                    echo '<i class="fa fa-times text-danger"></i>';
                                }else{
                                    echo '<i class="fa fa-check text-success"></i>';
                                }
                            ?></td>


                    </tr>
                    <?php
                }
                ?>
                </tbody>


            </table>
        </div>


        <?php
        }
        
        ?>
    </div>
</div>
<?php include 'studworkjs.php'?>