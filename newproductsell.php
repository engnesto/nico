<?php
include('confi.php');
if(isset($_POST['submit'])){
//$ID = $_POST['subcat_id'];
	$today = date('Y-m-d');
	$name = mysqli_real_escape_string($connect,$_POST['quantity']);
$product = $_POST['product'];

$category = $_POST['category'];
$pup1 = $_POST['stock'];
$tpp1=$quantity*$pup1;
//$dealerdetails = $_POST['CATEGORY'];
$serialno = $_POST['serialno'];
$stp1 = $pup1*$serialno;
$product2 = $_POST['product2'];
$serialno2 = $_POST['serialno2'];
$category2 = $_POST['category2'];
$pup2 = $_POST['stock2'];
$tpp2=$quantity*$pup2;
$stp12 = $pup2*$serialno2;
$product3 = $_POST['product3'];
$serialno3 = $_POST['serialno3'];
$category3 = $_POST['category3'];
$pup3 = $_POST['stock3'];
$tpp3=$quantity*$pup3;
$stp3 = $pup3*$serialno3;
$product4 = $_POST['product4'];
$serialno4 = $_POST['serialno4'];
$category4 = $_POST['category4'];
$pup4 = $_POST['stock4'];
$tpp4=$quantity*$pup4;
$stp4 = $pup4*$serialno4;
$product5 = $_POST['product5'];
$serialno5 = $_POST['serialno5'];
$category5 = $_POST['category5'];
$pup5 = $_POST['stock5'];
$tpp5=$quantity*$pup5;
$stp5 = $pup5*$serialno5;
if ($product &&$category!== "") {
	$sql1 = "INSERT INTO salestbl ( product,category,quantity,productunitprice,totalcostofsales,date) VALUES('$product','$category','$serialno','$pup1','$stp1','$today');";
$result= mysqli_query($connect,$sql1) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	if(!$result){	die('error'.mysqli_error());}}
	if ($product2 &&$category2!== "") {
		$sql2 = "INSERT INTO salestbl ( product,category,quantity,productunitprice,totalcostofsales,date) VALUES('$product2','$category2','$serialno2','$pup2','$stp2','$today');";
$result1= mysqli_query($connect,$sql2) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	if(!$result1){	die('error'.mysqli_error());}}
	if ($product3 &&$category3!== "") {
	$sql3 = "INSERT INTO salestbl ( product,category,quantity,productunitprice,totalcostofsales,date) VALUES('$product3','$category3','$serialno3','$pup3','$stp3','$today');";
$result3= mysqli_query($connect,$sql3) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	if(!$result3){	die('error'.mysqli_error());}}
	if ($product4 &&$category4!== "") {
$sql4 = "INSERT INTO salestbl ( product,category,quantity,productunitprice,totalcostofsales,date) VALUES('$product4','$category4','$serialno4','$pup4','$stp4','$today');";
$result4= mysqli_query($connect,$sql4) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	if(!$result4){	die('error'.mysqli_error());}}
	if ($product5 &&$category5!== "") {
	$sql5 = "INSERT INTO salestbl ( product,category,quantity,productunitprice,totalcostofsales,date) VALUES('$product5','$category5','$serialno5','$pup5','$stp5','$today');";
$result5= mysqli_query($connect,$sql5) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	if(!$result5){	die('error'.mysqli_error());}
}
	

}
	


	header('location: sales.php');
?>