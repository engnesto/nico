<?php
include('confi.php');
if(isset($_POST['submit'])){
 $last_id = mysqli_insert_id($connect);
// $state_id = $_GET["ID"];
//$product = $_POST['product1'];
//$category = $_POST['category1'];
//$quantitytosale = $_POST['serialno1'];
//$unitprice = $_POST['stock1'];
//$availablequantity=$_POST['availquant1'];
//$costofsales = $quantitytosale*$unitprice;
//$totalstock = $availablequantity-$quantitytosale;
//$stocktotalprice = $totalstock*$unitprice;
$today = date('Y-m-d');
#($submit){ {
	# code...
$sql = "INSERT into salestbl (product,category,quantity,productbuyingprice,productunitprice,totalcostofsales,date) select product,category,quantity,productbuyingprice,product_unit_price,totalcostofsales,date from bulks;";
            
   
  // $sql2 = "INSERT into subcategory(cat_id, subcategory) values ('$cat_id', '$subcategoryname');";        
//sql = "INSERT INTO subcategory (subcategory) VALUES($cat_id'$subcategoryname');";
    $query = mysqli_query($connect,$sql);       
//$result= mysqli_query($connect,$sql) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	//if(!$result){	die('error'.mysqli_error());}
	if ($query===TRUE) {
	
$sql2= "DELETE from bulks;";
$sql2="UPDATE inventorytbl INNER JOIN bulks ON inventorytbl.CATEGORY = bulks.category SET inventorytbl.total_stock = IF(bulks.quantity > 0, inventorytbl.total_stock-bulks.quantity, inventorytbl.total_stock),inventorytbl.stock_total_selling_price = IF(bulks.quantity > 0, (inventorytbl.total_stock-bulks.quantity)*(inventorytbl.stock_unit_selling_price), inventorytbl.stock_total_selling_price), inventorytbl.stock_total_buying_price = IF(bulks.quantity > 0, (inventorytbl.total_stock-bulks.quantity)*(inventorytbl.stock_unit_buying_price), inventorytbl.stock_total_buying_price) WHERE bulks.category = inventorytbl.CATEGORY;";
//$sql2="UPDATE inventorytblINNER JOIN bulks ON inventorytbl.CATEGORY = bulks.category
//SET inventorytbl.total_stock = IF(bulks.quantity > 0, bulks.quantity, inventorytbl.total_stock)
//WHERE bulks.category = inventorytbl.CATEGORY;";
//$sql2 = "update inventorytbl set total_stock = $totalstock, stock_total_price = $stocktotalprice where CATEGORY='$category';";
     
$result= mysqli_query($connect,$sql2) or die (mysqli_error($connect));
  #$result = mysqli_query($connect,$sql);
  if(!$result){ die('error'.mysqli_error());}
}
	
}

	header('location: products.php');
?>
<?php
include('confi.php');
if(isset($_POST['submit'])){
 $last_id = mysqli_insert_id($connect);
//$state_id = $_GET["ID"];
$product = $_POST['product1'];
$category = $_POST['category1'];
$quantitytosale = $_POST['serialno1'];
//$unitprice = $_POST['stock1'];
//$availablequantity=$_POST['availquant1'];
//$costofsales = $quantitytosale*$unitprice;
//$totalstock = $availablequantity-$quantitytosale;
//$stocktotalprice = $totalstock*$unitprice;
//$today = date('Y-m-d');
#($submit){ {
	# code...
$sql = "DELETE from bulks;";
   
  // $sql2 = "INSERT into subcategory(cat_id, subcategory) values ('$cat_id', '$subcategoryname');";        
//sql = "INSERT INTO subcategory (subcategory) VALUES($cat_id'$subcategoryname');";
    $query = mysqli_query($connect,$sql);       
//$result= mysqli_query($connect,$sql) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	if(!$query){	die('error'.mysqli_error());}
}

	header('location: bulks.php');
?>