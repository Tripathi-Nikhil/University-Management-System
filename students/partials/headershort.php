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
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: <?=$percent?>%" aria-valuenow="<?=$percent?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                    <?php } else{  ?>
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: <?=$percent?>%" aria-valuenow="<?=$percent?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
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
                            Assignments</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php  
                            $numassign = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM studwork WHERE studid = '$student_id'"));
                            if($numassign['a1']==1){
                                $A1 = 1;
                            }else{
                                $A1 = 0;
                            }if($numassign['a2']==1){
                                $A2 = 1;
                            }else{
                                $A2 = 0;
                            }if($numassign['a3']==1){
                                $A3 = 1;
                            }else{
                                $A3 = 0;
                            }if($numassign['a4']==1){
                                $A4 = 1;
                            }else{
                                $A4 = 0;
                            }if($numassign['a5']==1){
                                $A5 = 1;
                            }else{
                                $A5 = 0;
                            }


                            if($numassign['hw1']==1){
                                $HW1 = 1;
                            }else{
                                $HW1 = 0;
                            }if($numassign['hw2']==1){
                                $HW2 = 1;
                            }else{
                                $HW2 = 0;
                            }if($numassign['hw3']==1){
                                $HW3 = 1;
                            }else{
                                $HW3 = 0;
                            }if($numassign['hw4']==1){
                                $HW4 = 1;
                            }else{
                                $HW4 = 0;
                            }if($numassign['hw5']==1){
                                $HW5 = 1;
                            }else{
                                $HW5 = 0;
                            }

                            if($numassign['ct1']==1){
                                $CT1 = 1;
                            }else{
                                $CT1 = 0;
                            }if($numassign['ct2']==1){
                                $CT2 = 1;
                            }else{
                                $CT2 = 0;
                            }if($numassign['ct3']==1){
                                $CT3 = 1;
                            }else{
                                $CT3 = 0;
                            }if($numassign['ct4']==1){
                                $CT4 = 1;
                            }else{
                                $CT4 = 0;
                            }if($numassign['ct5']==1){
                                $CT5 = 1;
                            }else{
                                $CT5 = 0;
                            }

                            if($numassign['mp1']==1){
                                $MP1 = 1;
                            }else{
                                $MP1 = 0;
                            }if($numassign['mp2']==1){
                                $MP2 = 1;
                            }else{
                                $MP2 = 0;
                            }if($numassign['mp3']==1){
                                $MP3 = 1;
                            }else{
                                $MP3 = 0;
                            }if($numassign['mp4']==1){
                                $MP4 = 1;
                            }else{
                                $MP4 = 0;
                            }if($numassign['mp5']==1){
                                $MP5 = 1;
                            }else{
                                $MP5 = 0;
                            }

                            $numcount = $A1+$A2+$A3+$A4+$A5+$HW1+$HW2+$HW3+$HW4+$HW5+$CT1+$CT2+$CT3+$CT4+$CT5+$MP1+$MP2+$MP3+$MP4+$MP5;
                            ?>
                            <?=$numcount?> of 20
                        </div>
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
                            Course Status</div>
                        <?php
                            $syl =  "SELECT * FROM subteacher WHERE course = '$course' AND year = '$year'";
                            $runsyl = mysqli_query($db,$syl);
                            if(($c=mysqli_num_rows($runsyl))>0){  
                                $S = 0;
                            while($syll = mysqli_fetch_assoc($runsyl)){
                                $S+=$syll['syllabus'];
                            }
                            $show = round($S/$c).' % Complete';
                        }else{
                            $show = '0 % Complete';
                        }
                        
                        ?>
                        
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$show?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>