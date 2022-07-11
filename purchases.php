<?php
include('confi.php');
if(isset($_POST['submit'])){
//$ID = $_POST['ID'];
    $today = date('Y-m-d');
$product = $_POST['cat'];
$category = $_POST['subcat'];
$sellingprice = $_POST['sellingprice'];

$buyingprice = $_POST['buyingprice'];
$stbp = $buyingprice*$serialno;
$serialno = $_POST['serialno'];
$stsp = $sellingprice*$serialno;
$mills = $_POST['mills'];
$qry=mysqli_query($connect,"SELECT * FROM inventorytbl WHERE CATEGORY = '$category'; ");
$rowCheck=mysqli_num_rows($qry);
    if ($rowCheck>0) { // if data exist update the data
        $qry=mysqli_query($connect,"UPDATE inventorytbl set total_stock=(total_stock+'$serialno'), stock_unit_buying_price = (stock_unit_buying_price), stock_total_buying_price= (stock_unit_buying_price* total_stock), stock_unit_selling_price = (stock_unit_selling_price), stock_total_selling_price= (stock_unit_selling_price* total_stock) mills = mills where CATEGORY = '$category';");  
    }
    else{ // insert the data if data is not exist
        $qry=mysqli_query($connect,"INSERT INTO inventorytbl ( PRODUCT,CATEGORY,total_stock,stock_unit_buying_price, stock_total_buying_price,stock_unit_selling_price,stock_total_selling_price,Date) VALUES('$product','$category','$serialno','$buyingprice','$stbp,'$sellingprice',$stsp, '$today');");
    }

    
}

    header('location: products.php');
?>

<?php
include('confi.php');
if(isset($_POST['submit'])){
//$ID = $_POST['ID'];
    $today = date('Y-m-d');
$product = $_POST['cat'];
$category = $_POST['subcat'];
$sellingprice = $_POST['sellingprice'];

$buyingprice = $_POST['buyingprice'];
$stbp = $buyingprice*$serialno;
$serialno = $_POST['serialno'];
$stsp = $sellingprice*$serialno;
$mills = $_POST['mills'];
$qry=mysqli_query($connect,"SELECT * FROM inventorytbl WHERE CATEGORY = '$category'; ");
$rowCheck=mysqli_num_rows($qry);
    if ($rowCheck>0) { // if data exist update the data
        $qry=mysqli_query($connect,"UPDATE inventorytbl set total_stock=(total_stock+'$serialno'), stock_unit_buying_price = (stock_unit_buying_price), stock_total_buying_price= (stock_unit_buying_price* total_stock), stock_unit_selling_price = (stock_unit_selling_price), stock_total_selling_price= (stock_unit_selling_price* total_stock) mills = mills where CATEGORY = '$category';");  
    }
    else{ // insert the data if data is not exist
        $qry=mysqli_query($connect,"INSERT INTO inventorytbl ( PRODUCT,CATEGORY,total_stock,stock_unit_buying_price, stock_total_buying_price,stock_unit_selling_price,stock_total_selling_price,Date) VALUES('$product','$category','$serialno','$buyingprice','$stbp,'$sellingprice',$stsp, '$today');");
    }

    
}

    header('location: products.php');
?>