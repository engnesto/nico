<?php
include('confi.php');
if(isset($_POST['submit'])){
//$ID = $_POST['ID'];
	$today = date('Y-m-d');
$product = $_POST['cat'];
$category = $_POST['subcat'];
$unitbuyingprice = $_POST['ubprice'];
//$newpro =$_POST['product1'];
//$catpro = $_POST['category1'];
$pprice = $_POST['pprice'];
$mills = $_POST['mills'];
//$dealerdetails = $_POST['CATEGORY'];
$serialno = $_POST['serialno'];
$stp = $pprice*$serialno;
$totalbuyingprice= $unitbuyingprice*$serialno;
$qry=mysqli_query($connect,"SELECT * FROM inventorytbl WHERE CATEGORY = '$category'; ");
$rowCheck=mysqli_num_rows($qry);
    if ($rowCheck>0) { // if data exist update the data
        $qry=mysqli_query($connect,"UPDATE inventorytbl set total_stock=(total_stock+'$serialno'), stock_unit_selling_price = '$pprice', stock_unit_buying_price = '$unitbuyingprice',stock_total_buying_price=(stock_unit_buying_price*total_stock),stock_total_selling_price= (stock_unit_selling_price* total_stock), Date ='$today' where CATEGORY = '$category';");  
    }
    else{ // insert the data if data is not exist
        $qry=mysqli_query($connect,"INSERT INTO inventorytbl ( PRODUCT,CATEGORY,total_stock,stock_unit_buying_price, stock_total_buying_price,stock_unit_selling_price,stock_total_selling_price,Date,subcat_id) VALUES('$product','$category','$serialno','$unitbuyingprice','$totalbuyingprice','$pprice','$stp' ,'$today', '$mills');");
    }

	
}

	header('location: products.php');
?>