
  <?php
include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM studentdetails 
	WHERE regid LIKE '%".$search."%'
	OR name LIKE '%".$search."%' 
	OR course LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM studentdetails";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="">
    <table class="table table-bordered text-center table-responsive mt-5">
        <tr class="bg-light sticky-top">
            <th>Id</th>
            <th>Student Id</th>
            <th>Father's Name</th>
            <th>Course</th>
            <th>Year</th>
            <th>Total Due</th>
            <th>Ammount Paid</th>
            <th>Status</th>
            <th>Details</th>
        </tr>
        <?php
        $i=0;
	while($row = mysqli_fetch_array($result))
	{  
            $i=$i+1;
		?>
        <tr>
            <td class="bg-light"><?=$i?></td>
            <td><?=$row["regid"]?></td>
            <td><?=$row["fathername"]?></td>
            <td><?=$row["course"]?></td>
            <td><?=$row["year"]?></td>
            <td>
                <div class="" style="display: none;">
                    <?php

                        $updateid = $row['regid'];
                        $C_Fee = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM studentdetails WHERE regid ='$updateid'"));
                        $H_Fee = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM roomalloc WHERE studid ='$updateid'"));
                        $T_Fee = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM transtudent WHERE studid ='$updateid'"));
                        $L_Fine = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM fine WHERE studid ='$updateid'"));
                        if(($C_Fee['fees'])>0){
                        $course = $C_Fee['fees'];
                        }else{
                        $course = 0;
                        }
                        if(($L_Fine['fine'])>0){
                        $library =  $L_Fine['fine'];
                        }else{
                        $library = 0;
                        }
                        if(($H_Fee['fees'])>0){
                        $hostel = $H_Fee['fees'];
                        }else{
                        $hostel = 0;
                        }
                        if(($T_Fee['fees'])>0){
                        $transport =  $T_Fee['fees'];
                        }else{
                        $transport = 0;
                        } 
                        $Total_Fees = $course + $library +$hostel + $transport;
                    ?>
                </div>Rs.
                <?=$Total_Fees?>

            </td>

            <td>
                <div class="" style="display: none;">
                    <?php
            $amt_paid = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM accounts WHERE studid ='$updateid'"));
            if(($amt_paid['totalpaid'])==''){
                $amtpaid = 0;
            }
            else{
                $amtpaid = $amt_paid['totalpaid'];
            }
            ?>
                </div>
                Rs. <?=$amtpaid?>
            </td>

            <?php 
            $n = $Total_Fees - $amtpaid ;

            if($n == 0){
                echo '<td><div style="width:100px" class="btn btn-sm btn-success text-white fw-bold">Success!</div></td>';
            }
            elseif(($n>1)&&($n < $Total_Fees)){
                echo '<td><div style="width:100px"class="btn btn-sm btn-warning fw-bold">Pending...</div></td>';
            }
            elseif($n == $amtpaid){
                echo '<td><div style="width:100px" class="btn btn-sm btn-success text-white fw-bold">Success!</div></td>';
            }else{
                echo '<td><div style="width:100px" class="btn btn-sm btn-secondary text-white fw-bold" >Disabled!</div></td>';
                
            }
            
            ?>
            <td><a href="_accounts/feedata.php?id=<?php echo $row["regid"]; ?>" target="_blank"
                    class="text-secondary fw-bold"><i class="fas fa-eye text-primary">
                    </i> Details</a></td>
        </tr>
        <?php
	}
	?>
    </table>
</div><?php
	echo $output;
}
else
{
	echo '<div class="text-danger text-center mb-3 fw-bold">Data Not Found!</div>';
}

?>