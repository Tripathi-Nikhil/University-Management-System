<div class="col-lg-4">
    <div class="card shadow mt-4 mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Work List/ <?=$subfetch['subject1']?></h6>
        </div>
        <div class="card-body">
            <?php
                            if(mysqli_num_rows($subrun)>0){}
                            ?>
            <div class="row border border-light p-1">
                <div class="col-7">
                <?php if($subfetch['assign1'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Assignment 1
                </div>
                <div class="col-2">
               
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=assign1&id=<?=$subfetch['id']?>&ty=Assignment-1"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <div class="row border border-light p-1">
                <div class="col-9">
                 <?php if($subfetch['assign2'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Assignment 2
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=assign2&id=<?=$subfetch['id']?>&ty=Assignment-2"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <div class="row border border-light p-1">
                <div class="col-9">
                 <?php if($subfetch['assign3'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Assignment 3
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=assign3&id=<?=$subfetch['id']?>&ty=Assignment-3"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <div class="row border border-light p-1">
                <div class="col-9">
                <?php if($subfetch['assign4'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Assignment 4
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=assign4&id=<?=$subfetch['id']?>&ty=Assignment-4"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <div class="row border border-light p-1">
                <div class="col-9">
                <?php if($subfetch['assign5'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Assignment 5
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=assign5&id=<?=$subfetch['id']?>&ty=Assignment-5"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                <?php if($subfetch['hw1'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Homework 1
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=hw1&id=<?=$subfetch['id']?>&ty=HomeWork-1" target="_blank"
                        class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                <?php if($subfetch['hw2'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Homework 2
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=hw2&id=<?=$subfetch['id']?>&ty=HomeWork-2" target="_blank"
                        class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                <?php if($subfetch['hw3'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Homework 3
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=hw3&id=<?=$subfetch['id']?>&ty=HomeWork-3" target="_blank"
                        class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                <?php if($subfetch['hw4'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Homework 4
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=hw4&id=<?=$subfetch['id']?>&ty=HomeWork-4" target="_blank"
                        class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                <?php if($subfetch['hw5'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Homework 5
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=hw5&id=<?=$subfetch['id']?>&ty=HomeWork-5"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                <?php if($subfetch['ct1'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Class Test 1
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=ct1&id=<?=$subfetch['id']?>&ty=ClassTest-1"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                   <?php if($subfetch['ct2'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Class Test 2
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=ct2&id=<?=$subfetch['id']?>&ty=ClassTest-2"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                   <?php if($subfetch['ct3'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Class Test 3
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=ct3&id=<?=$subfetch['id']?>&ty=ClassTest-3"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                   <?php if($subfetch['ct4'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Class Test 4
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=ct4&id=<?=$subfetch['id']?>&ty=ClassTest-4"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                   <?php if($subfetch['ct5'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Class Test 5
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=ct5&id=<?=$subfetch['id']?>&ty=ClassTest-5"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                   <?php if($subfetch['mp1'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Model Paper 1
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=mp1&id=<?=$subfetch['id']?>&ty=ModelPaper-1"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                   <?php if($subfetch['mp2'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Model Paper 2
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=mp2&id=<?=$subfetch['id']?>&ty=ModelPaper-2"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                   <?php if($subfetch['mp3'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Model Paper 3
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=mp3&id=<?=$subfetch['id']?>&ty=ModelPaper-3"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                   <?php if($subfetch['mp4'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Model Paper 4
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=mp4&id=<?=$subfetch['id']?>&ty=ModelPaper-4"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="row border border-light p-1">
                <div class="col-9">
                   <?php if($subfetch['mp5'] == ''){
                    
                }else{
                    echo '<i class="fas fa-check text-success"> </i>';
                }
                ?>
                    Model Paper 5
                </div>
                <div class="col-2 text-center">
                    <a href="viewassignment.php?action=view&work=mp5&id=<?=$subfetch['id']?>&ty=ModelPaper-5"
                        target="_blank" class="btn-sm border-0 btn-transition btn btn-outline-primary">
                        <i class=" fa fa-eye"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>