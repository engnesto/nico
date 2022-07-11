<?php
require('confi.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM bulks WHERE ID=$id"; 
$result = mysqli_query($connect,$query) or die ( mysqli_error());
header("Location:bulks.php"); 
?>