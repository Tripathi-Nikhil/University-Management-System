<?php
include '../../../includes/dbconn.php';


$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($db, $_POST["query"]);
	$query = "
	SELECT * FROM hostel 
	WHERE roomname LIKE '%".$search."%'
	";
// }
// else
// {
//     $search = mysqli_real_escape_string($db, $_POST["query"]);
// 	$query = "
// 	SELECT * FROM hostel WHERE roomname LIKE '%".$search."%'";
// }
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
	{

        $roomname = $row["roomname"];
        $category = $row["category"];
        $roomtype = $row["roomtype"];
        $building = $row["building"];
        $block = $row["block"];
        $status = $row["status"];
}
	?>
<div class="">
    <div class="container" style="width: 700px;">
        <form action="" method="post">
            <table class="table borderless">
                <tbody>
                    <tr>
                        <th scope="row" class="th">Name:</th>
                        <td><input type="text" name="name" class="form-control" value="<?=$roomname?>" readonly></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Category:</th>
                        <td><select class="form-select" name="category">
                                <option value="<?=$category?>"><?=$category?></option>
                                <option value="Boys">Boys</option>
                                <option value="Girls">Girls</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Room Type:</th>
                        <td><select class="form-select" name="roomtype">
                                <option value="<?=$roomtype?>"><?=$roomtype?> </option>
                                <option value="Basic">Standard</option>
                                <option value="A.C Room">A.C Room</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Building:</th>
                        <td><select class="form-select" name="building">
                                <option value="<?=$building?>"><?=$building?></option>
                                <option value="Building 1">Building 1</option>
                                <option value="Building 2">Building 2</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Block:</th>
                        <td><select class="form-select" name="block">
                                <option value="<?=$block?>"><?=$block?></option>
                                <option value="Block 2">Block 1</option>
                                <option value="Block 1">Block 2</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th scope="row" class="th">Status:</th>
                        <td><select class="form-select" name="status">
                                <option value="<?=$status?>"><?=$status?></option>
                                <option value="Open">Open</option>
                                <option value="Not Ready">Not Ready</option>
                                <option value="Reserved">Reserved</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="update" value="Update Room" class="btn btn-primary form-control">
                        </td>
                        <td><input type="submit" name="delete" value="Delete Room" class="btn btn-danger form-control">
                        </td>

                    </tr>
                </tbody>
            </table>
        </form>
    </div>

</div><?php
	echo $output;
}
else
{
	echo 'No Data!';
}
}
?>