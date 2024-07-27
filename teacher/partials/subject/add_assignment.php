                <?php
                include 'assign.php';
                    $subinfo = "SELECT * FROM subteacher WHERE id = '$var_id'";
                    $subrun = mysqli_query($db, $subinfo);
                    $subfetch = mysqli_fetch_assoc($subrun);
                    $studenth = $subfetch['subject1'];

                ?>



                <div class="row">
                    <div class="col-lg-8">
                        <div class="card shadow mt-4 mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Add Assignment /
                                    <?=$subfetch['subject1']?></h6>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="" style="display: none;">
                                        <input type="text" value="<?=$var_id?>" name="id">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 ">
                                            <div class="form-group">
                                                <label for="">Assignment Type:</label>
                                                <select name="assign_type" id="assign_type"
                                                    class="form-control mr-auto">
                                                    <option value="" disabled selected>Select Type</option>
                                                    <option value="assignment">Assignment</option>
                                                    <option value="homework">Homework</option>
                                                    <option value="classtest">Class Test</option>
                                                    <option disabled value="modelpaper">Model Paper</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="form-group">
                                                <label for="">Assignment Number:</label>
                                                <select name="assign_no" id="assign_no" class="form-control mr-auto">
                                                    <option value="" disabled selected>Select Assignment Number</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Last Submission Date:</label>
                                                <input type="date" name="assign_date" id="assign_date"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="p-1">
                                    <div class="form-group p-1">
                                        <div class="row">
                                            <div class="col-8">
                                                <label for="content" class="fw-bold">Add Documents</label>
                                            </div>
                                            <div class="col-4 ">
                                                <input type="file" disabled name="assign_doc" id="assign_doc"
                                                    class="form-control mb-2" style="margin-top: -4px;">
                                            </div>
                                        </div>
                                        <textarea id="editor" class="form-control" name="content" rows="14"></textarea>
                                    </div>
                                    <input type="submit" value="Add" id="add_cont" name="assign"
                                        class="btn btn-primary">
                                    <input type="reset" value="Clear" id="" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                        
                    </div>

                    <?php include 'worklist.php' ?>
                </div>

                <?php include 'subjectstudents.php' ?>

                <!-- <script>
$(document).ready(function() {
    $("#add_cont").on("click", function(e) {
        // e.preventDefault();
        var id = $("#id").val();
        var type = $("#assign_type").val();
        var num = $("#assign_no").val();
        var date = $("#assign_date").val();
        var content = $("#editor").val();

        $.ajax({
            url: "partials/subject/assign.php",
            type: "POST",
            data: {
                id: id,
                type: type,
                num: num,
                date: date,
                content: content
            },
            success: function(data) {
                $("#editor").html(data);
                swal("Assigned!", " Refresh Page to see Changes", "success");
                $("#assign_type").val('');
                $("#assign_no").val('');
                $("#assign_date").val('');
                $("#editor").val('');
            }
        });
    });
});
                </script> -->