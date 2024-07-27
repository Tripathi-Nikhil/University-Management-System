<style>
#sttr td{
    vertical-align: middle;
    
}
</style>

<div class="card shadow mt-4">
    <div class="row p-2">
        <div class="col-7 fw-bold text-secondary ">New Student List</div>
        <div class="col-3"></div>
        <div align="right" class="col-2"><i class="fas fa-ellipsis-v"></i></div>
    </div>

    <div class="card-body--">
        <div style="overflow-y:auto; overflow-x:auto;height: 500px ">
            <table class="table ">
                <thead>
                    <tr class="bg-light">
                        <th style="width:max-content;">S No.</th>
                        <th>Profile</th>
                        <th style="width:max-content;">Student Id</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>E-Mail</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $studquery = mysqli_query($db,"SELECT * FROM studentdetails ORDER BY id DESC");
                    if($row= mysqli_num_rows($studquery)>0){
                while($studrow = mysqli_fetch_assoc($studquery)){
                    if(strlen($studrow["image"]) == 6){
                        $image = 'nopic.jpg';
                    }
                    else{
                        $image = $studrow["image"];
                    }
                   ?> <tr id="sttr">
                        <td class="fw-bold"><?=$i+=1?></td>
                        <td>
                            <a href="#"><img class="img-thumbnail border-secondary " src="main/students/img/<?=$image?>"
                                    alt="" width="40" height="40"></a>
                        </td>
                        <td class="text-secondary"> <?=$studrow['regid']?> </td>
                        <td> <span class="text-secondary"><?=$studrow['name']?></span> </td>
                        <td> <span class="text-secondary"><?=$studrow['course']?></span> </td>
                        <td><span class="text-secondary"><?=$studrow['email']?></span></td>
                        <td>
                        <?php 
                        if(($studrow['passwords'])==''){
                            echo '<span class="btn-sm btn-success">Active</span>';
                        }else{
                            echo '<span class="btn-sm btn-danger">Not Activated!</span>';
                        }
                        ?>
                            
                        </td>
                    </tr>
                    <?php
                }
            }
                ?>
                </tbody>
            </table>
        </div> <!-- /.table-stats -->
    </div>
</div> <!-- /.card -->