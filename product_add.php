<?php
include('confi.php');
if(isset($_POST['submit'])){
##$submit = $_POST['submit'];
$categoryname = $_POST['FIRSTNAME'];
$subcategoryname = $_POST['LASTNAME'];
$model = $_POST['MODEL'];
#($submit){
	$sql = "INSERT INTO category
            (category)
    SELECT '$categoryname'
           
    WHERE NOT EXISTS
        (SELECT 1
         FROM category
         WHERE category = '$categoryname'
           );";
   
  // $sql2 = "INSERT into subcategory(cat_id, subcategory) values ('$cat_id', '$subcategoryname');";        
//sql = "INSERT INTO subcategory (subcategory) VALUES($cat_id'$subcategoryname');";
    $query = mysqli_query($connect,$sql);       
//$result= mysqli_query($connect,$sql) or die (mysqli_error($connect));
	#$result = mysqli_query($connect,$sql);
	//if(!$result){	die('error'.mysqli_error());}
	if ($query) {
	

   $sql2 = "INSERT INTO subcategory(cat_id,subcategory)
     VALUES ((SELECT cat_id FROM category WHERE category = '$categoryname'), '$subcategoryname');";
     $sql3 = "INSERT INTO model(subcat_id,model)
     VALUES ((SELECT cat_id FROM category WHERE category = '$categoryname'), '$model');";

   $result = mysqli_query($connect,$sql2);
   $result = mysqli_query($connect,$sql3);
   echo('Product added successfully');
}else{
	echo "Error adding product to the list";
}
	
}

	header('location: newprt.php');
?>