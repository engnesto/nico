<?php


   require('confi.php');


   $sql = "SELECT * FROM subcategory
         WHERE cat_id LIKE '%".$_GET['id']."%'"; 


   $result = $mysqli->query($sql);


   $json = [];
   while($row = $result->fetch_assoc()){
        $json[$row['id']] = $row['city'];
   }


   echo json_encode($json);
?>