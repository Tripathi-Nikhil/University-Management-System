<?php
include '../../../includes/dbconn.php';
$category_id = $_POST["category_id"];

$result = mysqli_query($db, "SELECT * FROM studentdetails WHERE regid = '$category_id'");
?>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row["studentname"]; ?>"><?php echo $row["studentname"]; ?></option>
    <?php
}
?>