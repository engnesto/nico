<?php
include('confi.php');
if(isset($_POST['submit'])){
 $last_id = mysqli_insert_id($connect);
//$state_id = $_GET["ID"];
$product = $_POST['product1'];
$category = $_POST['category1'];
$quantitytosale = $_POST['serialno1'];
$unitprice = $_POST['stock1'];
$availablequantity=$_POST['availquant1'];
$costofsales = $quantitytosale*$unitprice;
$totalstock = $availablequantity-$quantitytosale;
$stocktotalprice = $totalstock*$unitprice;
$today = date('Y-m-d');
#($submit){ {
	# code...
$sql = "INSERT INTO salestbl 
            (product,category,quantity,productunitprice,totalcostofsales,date) values('$product','$category','$quantitytosale','$unitprice','$costofsales','$today');";
   
  // $sql2 = "INSERT into subcategory(cat_id, subcategory) values ('$cat_id', '$subcategoryname');";        
//sql = "INSERT INTO subcategory (subcategory) VALUES($cat_id'$subcategoryname');";
    $query = mysqli_query($connect,$sql);       
//$result= mysqli_query($connect,$sql) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	//if(!$result){	die('error'.mysqli_error());}
	if ($query===TRUE) {
	

   $sql2 = "update inventorytbl set total_stock = $totalstock, stock_total_price = $stocktotalprice where CATEGORY='$category';";
     
$result= mysqli_query($connect,$sql2) or die (mysqli_error($connect));
  #$result = mysqli_query($connect,$sql);
  if(!$result){ die('error'.mysqli_error());}
}
	
}

	header('location: products.php');
?>