<?php
include('confi.php');
if(isset($_POST['submit'])){
##$submit = $_POST['submit'];
$firstname = $_POST['FIRSTNAME'];
$lastname = $_POST['LASTNAME'];
$email = $_POST['EMAIL'];
$phone = $_POST['PHONE'];
$whatsapp = $_POST['WHATSAPP'];
$product = $_POST['PRODUCT'];
$serialnumber = $_POST['SERIALNUMBER'];
$warranty = $_POST['warranty'];
// $dealer = $_POST['dealer'];
$productdetails = $_POST['PRODUCTDETAILS'];

#($submit){

	$sql = "INSERT INTO showroomcustomer (FIRSTNAME,LASTNAME,PHONE,WHATSAPP,EMAIL,PRODUCT,SERIALNO,WARRANTYPERIOD,PRODUCTDETAILS) VALUES('$firstname','$lastname','$phone','$whatsapp', '$email','$product','$serialnumber','$warranty','$productdetails');";
$result= mysqli_query($connect,$sql) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	if(!$result){	die('error'.mysqli_error());}
	
}

	header('location: showroomcustomer.php');
?>