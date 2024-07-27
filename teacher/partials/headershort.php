<div class="row">

    <!-- Earnings (Monthly) Card Example -->


    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-bottom-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Fees</div>
                        <?php $fee = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM accounts WHERE studid = '$student_id'"));
                        if($fee['total_due']>0){
                            $tfee = $fee['total_due'];
                        }else{
                            $tfee = 0;
                        }

                        if($fee['course']>0){
                            $cfee = $fee['course'];
                        }else{
                            $cfee = 0;
                        }

                        $cfee = $fee['course'];
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">&#8377;<?=$tfee?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-rupee-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-bottom-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Fees Paid
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">&#8377;<?=$cfee?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <?php $percent = ($cfee/$tfee)*100;
                                    if($percent<20){
                                        ?>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$percent?>%"
                                        aria-valuenow="<?=$percent?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    <?php
                                    }if(($percent>20)&&($percent<70)){
                                        ?>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$percent?>%"
                                        aria-valuenow="<?=$percent?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    <?php } else{  ?>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?=$percent?>%"
                                        aria-valuenow="<?=$percent?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    <?php
                                        }?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-bottom-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Earnings (Monthly)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-bottom-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>