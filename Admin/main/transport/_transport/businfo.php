<?php
include '../../../includes/dbconn.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM timetransport WHERE pp0 LIKE '%".$search."%'
	OR pp1 LIKE '%".$search."%'
    OR pp2 LIKE '%".$search."%'
    OR pp3 LIKE '%".$search."%'
    OR pp4 LIKE '%".$search."%' ";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
$run = mysqli_fetch_assoc($result);
$vnumb = $run['vnum'];
$D_id = $run['driverid'];

$result1 = mysqli_query($db,"SELECT * FROM transport WHERE vnum = '$vnumb' OR driverid = '$D_id'");
$row = mysqli_fetch_assoc($result1);
if(mysqli_num_rows($result1) > 0)
{
	?> <div class="">
    <style>
    .fetch {
        display: none;
    }

    .ad {
        display: block;
    }
    </style>
    <table class="table borderless">
        <tbody>
            <tr>
                <th scope="row" class="th">Vehicle Number:</th>
                <td><input type="text" name="vnum" value="<?=$row['vnum']?>" class="form-control" readonly required>
                </td>
            </tr>
            <tr>
                <th scope="row" class="th">Driver Name:</th>
                <td><input type="text" name="dname" value="<?= $row['dname']?>" readonly class="form-control">
                </td>
            </tr>
            <tr>
                <th scope="row" class="th">Driver Contact:</th>
                <td><input type="text" name="dcontact" value="<?=$row['dcontact']?>" class="form-control" readonly
                        required>
                </td>
            </tr>
            <tr>
                <th scope="row" class="th">From:</th>
                <td><input type="text" name="adress" value="<?=$row['route']?>" class="form-control" readonly required>
                </td>
            </tr>
            <tr>
                <th scope="row" class="th">Via:</th>
                <td><input type="text" name="via" value="<?=$row['via']?>" class="form-control" readonly required>
                </td>
            </tr>
            <tr>
                <th scope="row" class="th">Timing:</th>
                <td><input type="text" name="timing" value="<?=$row['stime']?>     |     <?=$row['etime']?>"
                        class="form-control" readonly required>
                </td>
            </tr>
            <tr>
                <th scope="row" class="th">Pickup From:</th>
                <td>
                    <select name="route" id="" class="form-control" required>
                        <?php
                        $bus = $row['vnum'];
                        $query = mysqli_query($db,"SELECT * FROM timetransport WHERE vnum = '$bus'");
                        if(mysqli_num_rows($query)>0){
                        $row = mysqli_fetch_assoc($query);
                                ?>
                        <option value="<?=$row['pp0']?>"><?=$row['pp0']?></option>
                        <option value="<?=$row['pp1']?>"><?=$row['pp1']?></option>
                        <option value="<?=$row['pp2']?>"><?=$row['pp2']?></option>
                        <option value="<?=$row['pp3']?>"><?=$row['pp3']?></option>
                        <option value="<?=$row['pp4']?>"><?=$row['pp4']?></option>
                        <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="fw-bold text-center text-primary"> <span class="text-danger">*</span> Details can be seen <a
            href="vehicledetails.php?id=<?=$row['vnum']?>" target="_blank" rel="noopener noreferrer"
            class="text-success">here.</a></p>
    <?php
	echo $output;
}}
else
{

	echo '<div class="text-center fw-bold text-danger">No Pickup Point here,Please Enter Nearest Landmark!</div>';
}
}

?>