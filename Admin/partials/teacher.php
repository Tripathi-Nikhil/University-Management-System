<div class="card shadow mt-4">
    <div class="row p-2 ">
        <div class="col-5 fw-bold"> Teacher List</div>
        <div class="col-5"></div>
        <div align="right" class="col-2"><i class="fas fa-ellipsis-v"></i></div>
    </div>

    <div class="">
        <div style="overflow-y:auto; overflow-x:auto; height: 500px">
            <table class="table ">
                <thead>
                    <tr class="bg-light">
                        <th>S No.</th>
                        <th>Profile</th>
                        <th>Teacher Id</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>E-Mail</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $studquery = mysqli_query($db,"SELECT * FROM teacherdetails");
                    if($row= mysqli_num_rows($studquery)>0){
                while($studrow = mysqli_fetch_assoc($studquery)){
                    if(strlen($studrow["image"]) == 6){
                        $image = 'nopic.jpg';
                    }
                    else{
                        $image = $studrow["image"];
                    }
                   ?> <tr>
                        <td class="fw-bold"><?=$i+=1?></td>
                        <td>
                            <a href="#"><img class="img-thumbnail border-secondary "
                                    src="main/teachers/img/<?=$image?>" alt="" width="40" height="40"
                                    ></a>
                        </td>
                        <td class="text-secondary"> <?=$studrow['regid']?> </td>
                        <td> <span class="text-secondary"><?=$studrow['teachername']?></span> </td>
                        <td> <span class="text-secondary"><?=$studrow['gender']?></span> </td>
                        <td><span class="text-secondary"><?=$studrow['email']?></span></td>
                        <td>
                            <span class="text-secondary"><?=$studrow['department']?></span>
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