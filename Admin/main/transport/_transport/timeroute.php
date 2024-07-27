<?php
include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM timetransport WHERE driverid LIKE '%".$search."%'
	OR vnum LIKE '%".$search."%'";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="">
    <style>
    .dis {
        display: none;
    }
    </style>
    <?php
	while($row = mysqli_fetch_array($result))
	{
		?>
    <div class="text-center">

        <table class="table table-striped table-bordered">
            <thead>
                <tr class="p-2">
                    <div class="d-flex p-2 text-center">
                        <label for="">Vehicle Number:</label>
                        <input type="text" name="vnum" value="<?=$row['vnum']?>" class="form-control mr-1" 
                            style="width:40%;" required>
                        <label for="">Driver I'd:</label>
                        <input type="text" name="driverid" value="<?=$row['driverid']?>" class="form-control ml-1" 
                            style="width:40%;">
                    </div>
                </tr>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Pick Point</th>
                    <th scope="col">Departure</th>
                    <th scope="col">KMs to travel</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row" class="th">Pick Point -1</th>
                    <td><input type="text" name="pp1" value="<?=$row['pp0']?>" class="form-control"></td>
                    <td><input type="time" name="dt1" value="<?=$row['pt0']?>" class="form-control"></td>
                    <td><input type="text" name="km1" value="<?=$row['k0']?>"class="form-control"
                           ></td>
                </tr>

                <tr>
                    <th scope="row" class="th">Pick Point -2</th>
                    <td><input type="text" name="pp2" value="<?=$row['pp1']?>"class="form-control" ></td>
                    <td><input type="time" name="dt2" value="<?=$row['pt1']?>"class="form-control" ></td>
                    <td><input type="text" name="km2" value="<?=$row['k1']?>"class="form-control"
                          ></td>
                </tr>

                <tr>
                    <th scope="row" class="th">Pick Point -3</th>
                    <td><input type="text" name="pp3"value="<?=$row['pp2']?>" class="form-control" ></td>
                    <td><input type="time" name="dt3"value="<?=$row['pt2']?>" class="form-control" ></td>
                    <td><input type="text" name="km3"value="<?=$row['k2']?>" class="form-control"
                         ></td>
                </tr>
                <tr>
                    <th scope="row" class="th">Pick Point -4</th>
                    <td><input type="text" name="pp4"value="<?=$row['pp3']?>" class="form-control" ></td>
                    <td><input type="time" name="dt4"value="<?=$row['pt3']?>" class="form-control" ></td>
                    <td><input type="text" name="km4"value="<?=$row['k3']?>" class="form-control"
                         ></td>
                </tr>
                <tr>
                    <th scope="row" class="th">Pick Point -5</th>
                    <td><input type="text" name="pp5" value="<?=$row['pp4']?>"class="form-control" ></td>
                    <td><input type="time" name="dt5" value="<?=$row['pt4']?>"class="form-control" ></td>
                    <td><input type="text" name="km5" value="<?=$row['k4']?>"class="form-control"
                         ></td>
                </tr>
            </tbody>
        </table>
        <div class="form-group d-flex mb-5">
            <input type="submit" name="update" value="Update" class="form-control btn btn-primary">
            <input type="reset" name="reset" value="Clear" class="form-control btn btn-danger">
        </div>
    </div><?php } ?>

</div><?php
	echo $output;
}
else
{
	echo '<div class="text-center fw-bold text-danger">No Vehicles Added <span class="text-primary">
    <a href="transport.php" style="text-decoration:none;">Add New</a></span></div>';
}
}
?>




<?php

    if (isset($_POST['update'])) {
        
        $vname = $_POST['vname'];
        $dname = $_POST['dname'];
        $dcont = $_POST['dcont'];
        $route1 = $_POST['route1'];
        $stime = $_POST['stime'];
        $type = $_POST['type'];
        
        $vnum = $_POST['vnum'];
        $driverid = $_POST['driverid'];
        $dadhar = $_POST['dadhar'];
        $route2 = $_POST['route2'];
        $etime = $_POST['etime'];
        $capacity = $_POST['capacity'];
    
        $query = "UPDATE transport SET vname='$vname',vnum='$vnum',dname='$dname',
        dcontact='$dcont',dadhar='$dadhar',route='$route1',via='$route2',stime='$stime',etime='$etime',
        type='$type',capacity='$capacity' WHERE driverid = '$driverid'";
        $run = mysqli_query($db, $query);
        if($run)
        {
            echo '<script type="text/javascript">alert("Updated Successfully")</script>';
        }
    
        else{
            echo "not ok";
        }
        header('location: ../managetransport.php');
    }

    if (isset($_POST['delete'])) {
        $vnum = $_POST['vnum'];
        $vname = $_POST['vname'];
        $driverid = $_POST['driverid'];

        $queryy = "DELETE FROM transport WHERE driverid = '$driverid' OR vname = '$vname'";
        $run = mysqli_query($db, $queryy);
        if($run)
        {
            echo '<script type="text/javascript">alert("Deleted Successfully")</script>';
        }
    
        else{
            echo "not ok";
        }
        header('location: ../managetransport.php');
    }
    
    ?>