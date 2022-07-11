<?php
include('confi.php');
if(isset($_POST['submit'])){
//$ID = $_POST['ID'];
$product = $_POST['cat'];
$category = $_POST['subcat'];
$model = $_POST['model'];
//$dealer = $_POST['PRODUCT'];
//$dealerdetails = $_POST['CATEGORY'];
$serialno = $_POST['serialno'];
$status = $_POST['status'];
$remarks = $_POST['remarks'];
//if($submit){

	$sql = "INSERT INTO retailproduct ( PRODUCT,CATEGORY,MODEL,SERIALNO,STATUS,REMARKS) VALUES('$product','$category', '$model','$serialno','$status','$remarks');";
$result= mysqli_query($connect,$sql) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	if(!$result){	die('error'.mysqli_error());}
	
}

	header('location: retailproduct.php');
?>