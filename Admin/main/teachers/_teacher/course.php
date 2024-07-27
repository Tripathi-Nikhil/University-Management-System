<?php
include '../../../includes/dbconn.php';
$category_id = $_POST["category_id"];

$result1 = mysqli_query($db, "SELECT * FROM branchinfo WHERE branch = '$category_id'");
$run = mysqli_fetch_assoc($result1);
$categoryh = $run['id'];
$result = mysqli_query($db, "SELECT * FROM branchinfo WHERE concat = '$categoryh'");
?>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <option value="<?php echo $row["course"]; ?>"><?php echo $row["course"]; ?></option>
    <?php
}
?>