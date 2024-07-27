<div class="container p-3">
    <div class="card shadow">
        <div class="row mt-4">
            <div class="col-1"></div>
            <div class="col-3 p-2">
                <h3 class="fw-bold text-dark"><?=$var_type?></h3>
            </div>
            <div class="col-5"></div>
            <div class="col-3 p-2">
                <button id="print" class="btn btn-white"><i class="fas text-danger fa-print">Print</i></button>
                <button id="download" class="btn btn-white"><i
                        class="fas text-primary fa-download">Download</i></button>
            </div>
        </div>
        <?php
        date_default_timezone_set('Asia/Kolkata');
$c = mysqli_query($db,"SELECT $var_work FROM subteacher WHERE id = $var_id");
    $f = mysqli_fetch_assoc($c);
?>


        <hr class="p-2 text-dark mb-4">
        <div class="card border-0">
            <div class="card-body">
                <form action="" method="post">
                    <div class="" style="display: none;">
                        <input type="text" value="<?=$var_id?>" name="id">
                        <input type="text" value="<?=$var_work?>" name="work">
                    </div>
                    <div class="form-group p-1">
                        <div class="row">
                            <div class="col-8">
                                <label for="content" class="fw-bold">Add Documents</label>
                            </div>
                            <div class="col-4 ">
                                <input type="file" disabled name="assign_doc" id="assign_doc" class="form-control mb-2"
                                    style="margin-top: -4px;">
                            </div>
                        </div>
                        <textarea id="editor" class="form-control" value="" name="content"
                            rows="4"><?=$f["$var_work"]?></textarea>
                    </div>
                    <input type="submit" value="Update" id="add_cont" name="update" class="btn btn-primary">
                    <input type="reset" value="Clear" id="" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $cont = $_POST['content'];
        $work = $_POST['work'];

        $sql = "UPDATE subteacher SET $work ='$cont' WHERE id = '$id'";
        $result = mysqli_query($db, $sql);
        if(($work == 'assign1')or($work == 'assign2')or($work == 'assign3')or($work == 'assign4')or($work == 'assign5')){
            $timestamp = date("Y-m-d H:i:s");
                $time = mysqli_query($db,"UPDATE subteacher SET assigndate ='$timestamp' WHERE id = '$id'");
        }
        elseif(($work == 'hw1')or($work == 'hw2')or($work == 'hw3')or($work == 'hw4')or($work == 'hw5')){
            $timestamp = date("Y-m-d H:i:s");
                $time = mysqli_query($db,"UPDATE subteacher SET hwdate ='$timestamp' WHERE id = '$id'");
        }
        elseif(($work == 'ct1')or($work == 'ct2')or($work == 'ct3')or($work == 'ct4')or($work == 'ct5')){
            $timestamp = date("Y-m-d H:i:s");
                $time = mysqli_query($db,"UPDATE subteacher SET ctdate ='$timestamp' WHERE id = '$id'");
        }
        elseif(($work == 'mp1')or($work == 'mp2')or($work == 'mp3')or($work == 'mp4')or($work == 'mp5')){
            $timestamp = date("Y-m-d H:i:s");
                $time = mysqli_query($db,"UPDATE subteacher SET mpdate ='$timestamp' WHERE id = '$id'");
        }
        if($result){
            echo '<script>
            swal({
                title: "Assignment Updated!!",
                text: "Redirecting to Home Page!",
                icon: "success",
                type: "success"
            }).then(function() {
                window.location = "index.php";
            });
</script>';
        }
    }
    
    ?>