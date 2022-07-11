
<?php
include 'confi.php';
if(isset($_POST['Submit']))
{
  $customerfirstname = $_POST['customerfirstname'];
  $customerlastname = $_POST['customerlastname'];
  $phoneno = $_POST['phoneno'];
  $Status = $_POST['status'];
  $remarks = $_POST['remarks'];
$uid=$_POST['id'];
$query=mysqli_query($connect,"UPDATE jobcardtbl SET  CUSTOMER_FIRST_NAME = '$customerfirstname', CUSTOMER_LAST_NAME= '$customerlastname', PHONE_NO = '$phoneno', STATUS = '$Status', REMARKS = '$remarks' WHERE id = '$uid'");
$_SESSION['message']="Jobcard Updated successfully";
}
header('location: job-cards.php');
?>
