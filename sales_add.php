<?php
include('confi.php');
if(isset($_POST['submit'])){
##$submit = $_POST['submit
  $id = $_POST['mid'];
$product = $_POST['product'];
$category = $_POST['category'];
$quantitytosale = $_POST['units'];
$unitprice = $_POST['pprice'];
$availablequantity=$_POST['availablequantity'];
$costofsales = $quantitytosale*$unitprice;
$totalstock = $availablequantity-$quantitytosale;
$stocktotalprice = $totalstock*$unitprice;
$today = date('Y-m-d');
#($submit){
	$sql = "INSERT INTO salestbl 
            (product,category,quantity,productunitprice,totalcostofsales,date) values('$product','$category','$quantitytosale','$unitprice','$costofsales','$today');";
   
  // $sql2 = "INSERT into subcategory(cat_id, subcategory) values ('$cat_id', '$subcategoryname');";        
//sql = "INSERT INTO subcategory (subcategory) VALUES($cat_id'$subcategoryname');";
    $query = mysqli_query($connect,$sql);       
//$result= mysqli_query($connect,$sql) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	//if(!$result){	die('error'.mysqli_error());}
	if ($query===TRUE) {
	

   $sql2 = "update inventorytbl set total_stock = $totalstock, stock_total_selling_price = $stocktotalprice where ID = $id;";
     
$result= mysqli_query($connect,$sql2) or die (mysqli_error($connect));
  #$result = mysqli_query($connect,$sql);
  if(!$result){ die('error'.mysqli_error());}
}
	
}

	header('location: sales.php');
?>