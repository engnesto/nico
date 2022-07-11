<?php
require_once "confi.php";
$state_id = $_POST["state_id"];
$result = mysqli_query($connect,"SELECT * FROM subcategory where ID = $state_id");
?>
<!--<option value="">Select City</option>-->
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["ID"];?>"><?php echo $row["ID"];?></option>
<?php
}
?>