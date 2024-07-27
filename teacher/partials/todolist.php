<?php
session_start();
if(!isset($_SESSION['teacherid']))
{
        // header("location: ../index.php");
}else{
    $teacher_id = $_SESSION['teacherid'];
}

include 'dbconn.php';

    $todo = mysqli_query($db,"SELECT * FROM todo WHERE userid = '$teacher_id'");
    if($num = mysqli_num_rows($todo)){
        while($row = mysqli_fetch_assoc($todo)){
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
                echo '<i class="far fa-dot-circle text-success"></i>';
            }
            elseif(($diff > 3600)&&($diff < 9000)){
                echo '<i class="far fa-dot-circle text-warning"></i>';
            }else{
                echo '<i class="far fa-dot-circle text-warning"></i>';
            }
            ?>

        </div>
        <div class="col-8 ">
            <div class="" style="display:none">

                <input type="text" name="id" value="<?=$row['id']?>">
            </div>
            <p id="<?=$row['id']?>" class="" name="workdone"><?=$row['work']?></p>
        </div>
        <div id="todo" class="col-2 d-flex">
            <button class="strbtn btn-sm border-0 btn-transition btn btn-outline-success" onclick="linethrough()"
                data-id="<?=$row['id']?>" style="border-radius:30px"><i class=" fa fa-check"></i></button>
            <button class="del-btn btn-sm border-0 btn-transition btn btn-outline-danger" data-id="<?=$row['id']?>"
                style="border-radius:30px"><i class=" fa fa-trash"></i></button>
        </div>
    </div>
</li>
<?php
        }
    }
    ?>
