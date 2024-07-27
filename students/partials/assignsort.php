

<?php
include 'dbconn.php';
$sort = $_POST["category_id"];

if($sort == 'newest'){
    $result1 = mysqli_query($db, "SELECT * FROM branchinfo WHERE department = '$category_id'");
}

$result1 = mysqli_query($db, "SELECT * FROM branchinfo WHERE department = '$category_id'");
$run = mysqli_fetch_assoc($result1);
$categoryh = $run['id'];
$result = mysqli_query($db, "SELECT * FROM branchinfo WHERE concatT = '$categoryh'");
?>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row["branch"]; ?>"><?php echo $row["branch"]; ?></option>
    <?php
}
?>