<?php
require_once "confi.php";
$country_id = $_POST["country_id"];
$result = mysqli_query($connect,"SELECT * FROM subcategory where cat_id = $country_id");
?>
<option value="">Select State</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["subcategory"]; ?>" data-cata="<?php echo $row["ID"]; ?>"><?php echo $row["subcategory"]; ?></option>

<!--<option value="<?php echo $row["ID"];?>"><?php echo $row["subcategory"];?></option>-->
<?php
}
?>
