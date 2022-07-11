<?php
require_once "confi.php";
$state_id = $_POST["state_id"];
$result = mysqli_query($connect,"SELECT * FROM inventorytbl where subcat_id = $state_id");
?>
<!--<option value="">Select City</option>-->
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["total_stock"];?>"><?php echo $row["total_stock"];?></option>
<?php
}
?>