<div class="row" style="max-height: 640px;">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">
        <div class="card shadow ">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Subjects</h6>
            </div>
            <div class="row p-2">

                <?php
                    $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM studentdetails WHERE regid = '$student_id'"));
                    
                    $course = $data['course'];
                    $year = $data['year'];
                    if($course != ''){
                    $subq = "SELECT * FROM subteacher WHERE course = '$course' AND year = '$year'";
                    if($subrun = mysqli_query($db,$subq)){
                    while($sub = mysqli_fetch_assoc($subrun)){
                ?>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-light text-dark fw-bold shadow">
                        <div class="card-body">
                        <a href="subject.php?id=<?=$sub['id']?>" target="_blank">
                            <?=$sub['subject1']?>     </a>
                            <?php if($sub['teacherid']!= 0){
                                $teachh = $sub['teacherid'];
                                $tname = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM teacherdetails WHERE regid = '$teachh'"));
                            } 
                            ?>
                                <div class="text-dark-50 small"><?=$tname['teachername']?></div>
                        </div>
                    </div>
                </div>
                <?php
                }
                    }
                    }    
                ?>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-4">
        <div class="card shadow ">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
            </div>
            <?php
                $syl =  "SELECT * FROM subteacher WHERE course = '$course' AND year = '$year'";
                $runsyl = mysqli_query($db,$syl);
                if(mysqli_num_rows($runsyl)>0){  
                while($syll = mysqli_fetch_assoc($runsyl)){
            ?>
            <div class="card-body">
                <h4 class="small font-weight-bold"><?=$syll['subject1']?><span
                        class="float-right"><?=$syll['syllabus']?>%</span></h4>
                <div class="progress mb-4">
                    <?php if($syll['syllabus']<20){ ?>
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$syll['syllabus']?>%"
                        aria-valuenow="<?=$syll['syllabus']?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <?php } ?>
                    <?php if(($syll['syllabus']>20)&&($syll['syllabus']<60)){ ?>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$syll['syllabus']?>%"
                        aria-valuenow="<?=$syll['syllabus']?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <?php } ?>
                    <?php if($syll['syllabus']>60){ ?>
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?=$syll['syllabus']?>%"
                        aria-valuenow="<?=$syll['syllabus']?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <?php } ?>
                </div>
            </div>
            <?php
            }
        }
            ?>

        </div>
    </div>

</div>
<!-- 
    <div class="col-lg-6 mb-1">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Assignments</h6>
                <select name="lib" id="sort" class="rounded">
                    <option value="" selected disabled> sort by</option>
                    <option value="newest">Newest</option>
                    <option value="assignment">Assignments</option>
                    <option value="hw">Homeworks</option>
                    <option value="ct">Class Tests</option>
                    <option value="mp">Model Papers</option>
                </select>
            </div>
            <div class="card-body" style="max-height: 270px; overflow-y:auto">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-borderless table-stripped table-dark">
                        <thead class="sticky-top">
                            <tr>
                                <th scope="col">S No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>-->

<!-- <script>
$(document).ready(function() {
    $('#sort').on('change', function() {
        var category_id = this.value;
        $.ajax({
            url: "partials/assignsort.php",
            type: "POST",
            data: {
                category_id: category_id
            },
            cache: false,
            success: function(result) {
                $("#sorttable").html(result);
            }
        });
    });
});
</script> -->