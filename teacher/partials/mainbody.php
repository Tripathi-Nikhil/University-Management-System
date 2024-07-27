<div class="" style="display: none;">
    <?php  
// if (isset($_POST['syl'])) {
//    $cour_se = $_POST['course'];
//    $sub = $_POST['sub'];
//    $syl_year = $_POST['syl_year'];
//    $percent = $_POST['syl_percent'];

//     $syl_q = "UPDATE subteacher SET syllabus='$percent' WHERE year = '$syl_year' AND subject1 = '$sub'";
//     $sylup = mysqli_query($db, $syl_q);
//     if($sylup){
//         echo '<script> swal("Syllabus Updated!", "New Value is '.$percent.', "success");</script>';
//     }else{
//         echo '<script> swal("Not Updated!", "New Value is ", "error");</script>
//         ';
//     }
   
// }
?>
</div>



<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Subjects / Class</h6>
            </div>
            <div class="row p-2">

                <?php
                if(mysqli_num_rows(mysqli_query($db, "SELECT * FROM subteacher WHERE teacherid = '$teacher_id'"))>0){
    $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM subteacher WHERE teacherid = '$teacher_id'"));
    $course = $data['course'];
    $year = $data['year'];
    $stime = $data['stime'];
    $sub = $data['subject1'];
    if($course != ''){
    $subq = "SELECT * FROM subteacher WHERE teacherid = '$teacher_id'";
    if($subrun = mysqli_query($db,$subq)){
        while($sub = mysqli_fetch_assoc($subrun)){
        ?>
                <div class="col-lg-6 mt-2 mb-2">
                    <div class="card bg-light text-dark fw-bold shadow">
                        <div class="card-body">
                            <a href="subject.php?id=<?=$sub['id']?>" target="_blank">
                                <?=$sub['subject1']?>
                                <div class="text-dark-50 small"><?=$sub['course']?> Time: <?=$sub['stime']?></div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
    }
    } }
}     
    
    
    ?>
            </div>
        </div>

        <!-- Color System -->
        <div class="card shadow mt-4 mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
            </div>
            <div class="card-body">
                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to
                    reduce
                    CSS bloat and poor page performance. Custom CSS classes are used to create
                    custom components and custom utility classes.</p>
                <p class="mb-0">Before working with this theme, you should become familiar with
                    the
                    Bootstrap framework, especially the utility classes.</p>
            </div>
        </div>

    </div>

    <div class="col-lg-6 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Syllabus Update</h6>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label class="fw-bold" for="">Course:</label>
                                <select name="course" id="scourse" disabled class="form-control select-picker">
                                    <option value="" selected disabled>Choose a Course</option>
                                    <?php
                            $c_query = mysqli_query($db,"SELECT * FROM subteacher WHERE teacherid = '$teacher_id'");
                            if(mysqli_num_rows($c_query)>0){
                            while($c_ourse =  mysqli_fetch_assoc($c_query)){
                            ?>
                                    <option value="<?=$c_ourse['course']?>"><?=$c_ourse['course']?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="form-group ">
                                <label class="fw-bold" for="">Subject:</label>
                                <select name="sub" id="sub" class="form-control select-picker">
                                    <option value="" selected disabled>Choose a Subject</option>
                                    <?php
                            $c_query = mysqli_query($db,"SELECT * FROM subteacher WHERE teacherid = '$teacher_id'");
                            if(mysqli_num_rows($c_query)>0){
                            while($c_ourse =  mysqli_fetch_assoc($c_query)){
                            ?>
                                    <option value="<?=$c_ourse['subject1']?>"><?=$c_ourse['subject1']?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <input type="number" class="form-control" name="syl_percent" id="syl_percent"
                                    placeholder="Syllabus Completed in %">
                            </div>
                        </div>
                        <div class="col-7 text-center">
                            <div class="form-group">
                                <div class="form-group">
                                    <select name="syl_year" class="form-control" id="syl_year">
                                        <option value="" selected disabled>Select Year</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>

                                    </select>
                                </div>
                                <input type="submit" value="Update Syllabus" name="syl" id="syl"
                                    class="btn btn-primary">
                                <input type="reset" value="Clear Data" class="btn btn-danger">
                            </div>
                        </div>
                    </div>
            </div>
        </div>


        <script>
        $(document).ready(function() {
            $("#syl").on("click", function(e) {
                e.preventDefault();

                var sub = $("#sub").val();
                var syl_year = $("#syl_year").val();
                var syl_percent = $("#syl_percent").val();
                var scourse = $("#scourse").val();

                $.ajax({
                    url: "partials/syllabus.php",
                    type: "POST",
                    data: {
                        sub: sub, 
                        syl_year: syl_year,
                        syl_percent: syl_percent,
                        scourse: scourse
                    },
                    success: function(data) {
                        swal("Syllabus Updated!", " Refresh Page to see Changes", "success");
                        $("#syl_percent").val('');
                    }
                });
            });
        });
        </script>





        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Syllabus</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
           $subq = "SELECT * FROM subteacher WHERE teacherid = '$teacher_id'";
           if($subrun = mysqli_query($db,$subq)){
               while($dat = mysqli_fetch_assoc($subrun)){
                   if($dat['subject1'] != ''){
               ?>
                    <div class="">
                        <h4 class="small font-weight-bold"><?=$dat['subject1']?><span
                                class="float-right"><?=$dat['syllabus']?>%</span></h4>
                        <div class="progress mb-4">
                            <?php
                        if($dat['syllabus']<20){
                            ?>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$dat['syllabus']?>%"
                                aria-valuenow="<?=$dat['syllabus']?>" aria-valuemin="0" aria-valuemax="100"></div>
                            <?php }
                        if(($dat['syllabus']>20)&&($dat['syllabus']<60)){ ?>
                            <div class="progress-bar bg-warning" role="progressbar"
                                style="width: <?=$dat['syllabus']?>%" aria-valuenow="<?=$dat['syllabus']?>"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <?php }
                        if($dat['syllabus']>=60){?>
                            <div class="progress-bar bg-success" role="progressbar"
                                style="width: <?=$dat['syllabus']?>%" aria-valuenow="<?=$dat['syllabus']?>"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <?php } ?>
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
    </div>


</div>