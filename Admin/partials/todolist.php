<?php
include '../includes/dbconn.php';

    $todo = mysqli_query($db,"SELECT * FROM todo");
    if($num = mysqli_num_rows($todo)){
        while($row=mysqli_fetch_assoc($todo)){
            ?><li>
    <div class="row">

        <?php
         date_default_timezone_set("Asia/Calcutta");
         $time = $row['time'];
         $diff = time() - strtotime($time);
        ?>
        <div align="right" class="col-1">
            <?php
            if($diff<3600){
                echo '<i class="fas fa-dot-circle text-success"></i>';
            }
            else{
                echo '<i class="fas fa-dot-circle text-warning"></i>';
            }
            ?>

        </div>
        <div class="col-9 ">
            <div class="" style="display:none">

                <input type="text" name="id" value="<?=$row['id']?>">
            </div>
            <p name="workdone"><?=$row['work']?></p>
        </div>
        <div id="todo" class="col-1">
            <button class="del-btn btn-sm border-0 btn-transition btn btn-outline-danger" data-id="<?=$row['id']?>"
                style="border-radius:30px"><i class=" fa fa-trash"></i></button>
        </div>
    </div>
</li>
<?php
        }
    }
    ?>