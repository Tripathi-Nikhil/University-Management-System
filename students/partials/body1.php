<div class="row">
    <div class="col-xl-4 col-lg-5">
        <?php include 'todo.php';?>
    </div>

    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Student Profile</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <?php
            $studprofile = mysqli_query($db, "SELECT * FROM studentdetails WHERE regid ='$student_id'");
            $fetch = mysqli_fetch_assoc($studprofile);
            ?>
            <div class="card-body">
                <div class="chart-area">
                    <div class="row">
                        <div class="col-3">
                            <img src="../Admin/main/students/img/<?=$fetch['image']?>"
                                class="text-center border img-thumbnail" style="width:100%;height:212px" alt="">
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Registration Number:</label>
                                <input type="text" class="form-control bg-white" readonly value="<?=$fetch['regid']?>">
                            </div>
                            <div class="form-group">
                                <label for="">Contact Number:</label>
                                <input type="text" class="form-control bg-white" readonly
                                    value="<?=$fetch['studentcontact']?>">
                            </div>
                            <div class="form-group">
                                <label for="">City Name:</label>
                                <input type="text" class="form-control bg-white" readonly value="<?=$fetch['city']?>">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" class="form-control bg-white" readonly value="<?=$fetch['name']?>">
                            </div>
                            <div class="form-group">
                                <label for="">Father's Name:</label>
                                <input type="text" class="form-control bg-white" readonly
                                    value="<?=$fetch['fathername']?>">
                            </div>
                            <div class="form-group">
                                <label for="">Course:</label>
                                <input type="text" class="form-control bg-white" readonly value="<?=$fetch['course']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control bg-white" placeholder="Address: <?=$fetch['address']?>"
                                readonly></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->