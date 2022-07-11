<?php
include('confi.php');
if(isset($_POST['submit'])){
##$submit = $_POST['submit'];
$firstname = $_POST['FIRSTNAME'];
$lastname = $_POST['LASTNAME'];
$email = $_POST['EMAIL'];
$phone = $_POST['PHONE'];
$whatsapp = $_POST['WHATSAPP'];
$serialnumber = $_POST['SERIALNUMBER'];
$DEALER = $_POST['select'];
// $dealer = $_POST['dealer'];
$productdetails = $_POST['PRODUCTDETAILS'];

#($submit){

	$sql = "INSERT INTO retailcustomer (FIRSTNAME,LASTNAME,PHONE,EMAIL,PRODUCT,SERIALNO,DEALER,PRODUCT_DETAILS) VALUES('$firstname','$lastname','$phone', '$email','$whatsapp','$serialnumber','$DEALER','$productdetails');";
$result= mysqli_query($connect,$sql) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	if(!$result){	die('error'.mysqli_error());}
	
}

	header('location: retailcustomer.php');
?>