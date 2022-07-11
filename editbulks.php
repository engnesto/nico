<?php

include "confi.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($connect,"select * from bulks where ID='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $quantity = $_POST['quantity'];
    $unitprice = $_POST['unitprice'];
    $tcos = $quantity*$unitprice;
    //$age = $_POST['age'];
	
    $edit = mysqli_query($connect,"update bulks set quantity='$quantity', totalcostofsales= '$tcos' where ID='$id';");
	
    if($edit)
    {
        echo "Record editted Successfully";
        mysqli_close($connect); // Close connection
        header("location:bulks.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
<input type="hidden" name="unitprice" value="<?php echo $data['product_unit_price'] ?>" >
<input type="text" name="product" value="<?php echo $data['product'] ?>" >
<input type="text" name="category" value="<?php echo $data['category'] ?>" >
  <input type="text" name="quantity" value="<?php echo $data['quantity'] ?>"  >
  
  <input type="submit" name="update" value="Update">
</form>