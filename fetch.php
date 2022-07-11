<?php
require_once("DBController.php");
$db_handle = new DBController();
if(!empty($_GET['cat_id'])) {
        $coun_id = $_GET["cat_id"];           
  $query ="SELECT * FROM subcategory WHERE cat_id IN ($coun_id)";
  $results = $db_handle->runQuery($query);
?>
  <option value="">Select State</option>
<?php
  foreach($results as $state) {
?>
  <option value="<?php echo $state["subcategory"]; ?>" data-cata="<?php echo $state["ID"]; ?>"><?php echo $state["subcategory"]; ?></option>
<?php
  }
}
?>