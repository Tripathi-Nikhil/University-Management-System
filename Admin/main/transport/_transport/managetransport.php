<?php
include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM transport WHERE vname LIKE '%".$search."%'
	OR dname LIKE '%".$search."%'
	OR route LIKE '%".$search."%' 
	OR via LIKE '%".$search."%'
	OR vnum LIKE '%".$search."%'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) > 0)
{
	?> <div class="">
        <style>
            .dis{
                display: none;
            }
        </style>
    <div class="row p-3">
        <div class="col-md-6">
            <table class="table borderless">
                <tbody>
                    <tr>
                        <th scope="row" class="th">Vehicle Name:</th>
                        <td><input type="text" name="vname" value="<?=$row['vname']?>" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Driver Name:</th>
                        <td><input type="text" name="dname" value="<?=$row['dname']?>" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Driver Contact:</th>
                        <td><input type="text" name="dcont" value="<?=$row['dcontact']?>" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Started From:</th>
                        <td><input type="text" name="route1" class="form-control" value="<?=$row['route']?>" required>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Start Time:</th>
                        <td><input type="time" name="stime" class="form-control" value="<?=$row['stime']?>" required>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Type:</th>
                        <td><select class="form-select" name="type">
                                <option value="<?=$row['type']?>"><?=$row['type']?></option>
                                <option value="bus">Bus</option>
                                <option value="minibus">Mini Bus</option>
                                <option value="van">Van</option>
                                <option value="other">Other</option>
                                <option value="Reserved">Reserved</option>
                            </select></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <table class="table borderless">
                <tbody>
                    <tr>
                        <th scope="row" class="th">Vehicle Number:</th>
                        <td><input type="text" name="vnum" value="<?=$row['vnum']?>" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Driver Id:</th>
                        <td><input type="text" name="driverid" value="<?= $row['driverid']?>" readonly
                                class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Driver Adhaar:</th>
                        <td><input type="text" name="dadhar" value="<?=$row['dadhar']?>" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Via:</th>
                        <td><input type="text" name="route2" value="<?=$row['via']?>" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">End Time:</th>
                        <td><input type="time" name="etime" value="<?=$row['etime']?>" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Seating Capacity:</th>
                        <td><input type="number" name="capacity" value="<?=$row['capacity']?>" class="form-control"
                                required></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center d-flex"><input type="submit" name="delete" value="Delete"
                class="form-control btn btn-danger">
            <input type="submit" name="update" value="Update" class="form-control btn btn-primary">
        </div>
    </div>





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