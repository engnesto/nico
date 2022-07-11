<?php
include('confi.php');
if(isset($_POST['submit'])){
 $last_id = mysqli_insert_id($connect);
// $state_id = $_GET["ID"];
$product = $_POST['product1'];
$category = $_POST['category1'];
$quantitytosale = $_POST['serialno1'];
$unitprice = $_POST['stock1'];
$availablequantity=$_POST['availquant1'];
$mills=$_POST['pbp'];
$costofsales = $quantitytosale*$unitprice;
$totalstock = $availablequantity-$quantitytosale;
$stocktotalprice = $totalstock*$unitprice;
$today = date('Y-m-d');
#($submit){ {
	# code...
$sql = "INSERT INTO bulks 
            (product,category,quantity,productbuyingprice, product_unit_price,totalcostofsales,date) values('$product','$category','$quantitytosale','$mills','$unitprice','$costofsales','$today');";
   
  // $sql2 = "INSERT into subcategory(cat_id, subcategory) values ('$cat_id', '$subcategoryname');";        
//sql = "INSERT INTO subcategory (subcategory) VALUES($cat_id'$subcategoryname');";
    $result = mysqli_query($connect,$sql)or die (mysqli_error($connect));
//$result= mysqli_query($connect,$sql) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	//if(!$result){	die('error'.mysqli_error());}
	
  #$result = mysqli_query($connect,$sql);
  if(!$result){ die('error'.mysqli_error());}
}
	


	header('location: bulks.php');
?>