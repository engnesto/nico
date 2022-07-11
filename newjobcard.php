<?php
	$timezone = 'Asia/Manila';
	date_default_timezone_set($timezone);
?>
<?php
include('confi.php');
if(isset($_POST['submit'])){
//$submit = $_POST['submit'];
//$jobcardno = $_POST['jobcardno'];
$dateofreport = $_POST['dateofreport'];
$product = $_POST['cat'];
$category = $_POST['subcat'];
$model = $_POST['model'];
$whatsapp = $_POST['whatsapp'];
$dateofcompletion = $_POST['dateofcompletion'];
$returndate = $_POST['returndate'];
$customerfirstname = $_POST['customerfirstname'];
$customerlastname = $_POST['customerlastname'];
$receivername = $_POST['receivername'];
$dealername = $_POST['dealername'];
//$dealername = $_POST['dealername'];
$payment = $_POST['payment'];
$paymentdetails = $_POST['paymentdetails'];
$dateofpurchase = $_POST['dateofpurchase'];
$phone = $_POST['phone'];
$receiptno = $_POST['receiptno'];
$warrantyno = $_POST['warrantyno'];
$customerlocation = $_POST['customerlocation'];
$email = $_POST['email'];
$collectionpoint = $_POST['collectionpoint'];
$productdetails = $_POST['productdetails'];
$problemdescription = $_POST['problemdescription'];
$status = $_POST['status'];
$remarks = $_POST['remarks'];
//creating Jobcardid

		//$letters = '';
		$numbers = '';
		//$year = date('Y');
		//$month = date('m');
		$date=date('Ymd');
  
		foreach (range('A', 'Z') as $char) {
		 //   $letters .= $char;
		}
		for($i = 000; $i < 010; $i++){
			$numbers .= $i;
		}
		$jobcardno = $date.'/'.substr(str_shuffle($numbers), 0, 3);
		//
		//$jobcardno = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
//if($submit){

	$sql = "INSERT INTO jobcardtbl (TRACKINGNO,PRODUCT,CATEGORY,MODEL, PRODUCT_DETAILS,DATE_OF_REPORT,DATE_OF_COMPLETION,DATE_OF_RETURN,CUSTOMER_FIRST_NAME, CUSTOMER_LAST_NAME,RECEIVER_NAME,DEALER_NAME,PAYMENT, PAYMENT_DETAILS, DATE_OF_PURCHASE,WHATSAPP,PHONE_NO,RECEIPT_NO,WARRANTY_NO,CUSTOMER_LOCATION,EMAIL,COLLECTION_POINT, 	PROBLEM_DESCRIPTION,STATUS,REMARKS ) VALUES('$jobcardno','$product','$category', '$model','$productdetails', '$dateofreport','$dateofcompletion','$returndate','$customerfirstname','$customerlastname','$receivername','$dealername','$payment','$paymentdetails','$dateofpurchase','$whatsapp','$phone','$receiptno','$warrantyno','$customerlocation','$email','$collectionpoint','$problemdescription','$status','$remarks');";
	$result= mysqli_query($connect,$sql) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	if(!$result){	die('error'.mysqli_error());}
	
}

	header('location: job-cards.php');
?>