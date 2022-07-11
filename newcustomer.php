<?php
include('confi.php');
if(isset($_POST['submit'])){
##$submit = $_POST['submit'];
$firstname = $_POST['FIRSTNAME'];
$lastname = $_POST['LASTNAME'];
$email = $_POST['EMAIL'];
$phone = $_POST['PHONE'];
$whatsapp = $_POST['WHATSAPP'];
$serialnumber = $_POST['SERIALNO'];
 $dealer = $_POST['select'];
$productdetails = $_POST['PRODUCTDETAILS'];

#($submit){

	$sql = "INSERT INTO customertbl (FIRSTNAME,LASTNAME,PHONE,WHATSAPP,EMAIL,DEALER,SERIALNO, PRODUCTDETAILS) VALUES('$firstname','$lastname', '$phone','$whatsapp','$email','$dealer','$serialnumber','$productdetails');";
$result= mysqli_query($connect,$sql) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	if(!$result){	die('error'.mysqli_error());}
	
}

	header('location: customer.php');
?>