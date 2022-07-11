<?php
    require'confi.php';
    if(ISSET($_POST['search'])){
        $date1 = date("Y-m-d", strtotime($_POST['date1']));
        $date2 = date("Y-m-d", strtotime($_POST['date2']));
        $query=mysqli_query($connect, "SELECT * FROM `inventorytbl` WHERE `date` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
        $row=mysqli_num_rows($query);
        if($row>0){
            while($fetch=mysqli_fetch_array($query)){
?>
    <tr>
        <td><?php echo $fetch['PRODUCT']?></td>
        <td><?php echo $fetch['CATEGORY']?></td>
        <td><?php echo $fetch['total_stock']?></td>
        <td><?php echo $fetch['stock_unit_buying_price']?></td>
        <td><?php echo $fetch['stock_total_buying_price']?></td>

    </tr>
<?php
            }
        }else{
            echo'
            <tr>
                <td colspan = "4"><center>Record Not Found</center></td>
            </tr>';
        }
    }else{
        $query=mysqli_query($connect, "SELECT * FROM `inventorytbl`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
?>
    <tr>
        <td><?php echo $fetch['PRODUCT']?></td>
        <td><?php echo $fetch['CATEGORY']?></td>
        <td><?php echo $fetch['total_stock']?></td>
        <td><?php echo $fetch['stock_unit_buying_price']?></td>
        <td><?php echo $fetch['stock_total_buying_price']?></td>

    </tr>
<?php
        }
    }
?>
//code for sales limit by 5
                                        <?php
if(ISSET($_POST['search'])){
        $date1 = date("Y-m-d", strtotime($_POST['date1']));
        $date2 = date("Y-m-d", strtotime($_POST['date2']));
        $query=mysqli_query($connect, "SELECT * FROM `inventorytbl` WHERE `date` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
        $row=mysqli_num_rows($query);
        if($row>0){
            while($fetch=mysqli_fetch_array($query)){
?>
    <tr>
        <td><?php echo $fetch['PRODUCT']?></td>
        <td><?php echo $fetch['CATEGORY']?></td>
        <td><?php echo $fetch['total_stock']?></td>
        <td><?php echo $fetch['stock_unit_buying_price']?></td>
        <td><?php echo $fetch['stock_total_buying_price']?></td>

    </tr>
<?php
            }
        }else{
            echo'
            <tr>
                <td colspan = "4"><center>Record Not Found</center></td>
            </tr>';
        }
    }else{



//include("confi.php");
    $records_per_page = 10;
    $total_records = "SELECT * FROM inventorytbl;";
    $result = mysqli_query($connect, $total_records);
    $res = mysqli_num_rows($result);

$cnt=1;
    if($res >0){
        
        //while($row = mysqli_fetch_assoc($result))
        $total_pages=  ceil($total_pages = $res/$records_per_page);
          if (!isset($_GET['page'])) {
            $current_page = 1;
            
                      }else{
                      $current_page = $_GET['page'];  
                      }
                      /* calculate and set previous and next page values */
$previous = $current_page - 1;
$next = $current_page + 1;

/* set start page value */
$start_page = 1;

/* set number of pages to display to the left */
/* maximum value should be 4 */
$pages_to_left = 2;

/* set number of pages to display to the right */
/* maximum value should be 4 */
$pages_to_right = 2;
                      $page_result_number = ($current_page - 1)*$records_per_page;
                      $pagesql= "SELECT * from inventorytbl limit ". $page_result_number .','.$records_per_page;
                      $rsult = mysqli_query($connect,$pagesql);
                      while ($row = mysqli_fetch_array($rsult)) {?>

            <tr>
           
            <!--<td><?php echo $row['ID'];?></td>-->
            <td><?php echo $row['PRODUCT'];?></td>
         <td><?php echo $row['CATEGORY'];?></td>
         <!--<td><?php echo $row['subcat_id'];?></td>-->
         <td><?php echo $row['total_stock'];?></td>
         <td><?php echo $row['stock_unit_selling_price'];?></td>
         <td><?php echo $row['stock_total_selling_price'];?></td>
<!--<td><?php echo $row['Date'];?></td>-->
               <td>                                  
                                   
            <A HREF="quantity.php?uid=<?php echo $row["ID"];?>" class="btn btn-info btn-rounded"><span ></span>Sale</a>
          

            </td>
             </tr>
          <?php $cnt=$cnt+1; }
                          
                      }
 ?>          
<?php $cnt=$cnt+1; ?> <?php
        }
    ?>


    <?php
        echo '<div class="table-responsive">';
        echo '<table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">';
        echo "<thead>";
        
        echo "<br>";
        
        echo "</div>";
        echo '<tfoot>';
        echo "<tr>";  
        echo '<td colspan="2">';    
        //echo '<a href="newprt.php"> <button type="button" class="btn btn-info btn-rounded"  data-target="#add-contact">Add New product</button></a>'; 
       // echo '<A HREF="javascript:window.print()" class="btn btn-info btn-rounded"><span class="glyphicon glyphicon-print"></span>Print</a>';     
        echo "</td>";    
        echo '<td colspan="7">';    
        echo '<div class="text-right">';
        echo "<ul class='pagination'>";
        /* show previous pages to the left */
         $records_per_page = 10;
    $total_records = "SELECT * FROM inventorytbl;";
    $result = mysqli_query($connect, $total_records);
    $res = mysqli_num_rows($result);
        $current_page = 1;
        $total_pages=  ceil($total_pages = $res/$records_per_page);
        $previous = $current_page - 1;
$next = $current_page + 1;

/* set start page value */
$start_page = 1;

/* set number of pages to display to the left */
/* maximum value should be 4 */
$pages_to_left = 2;

/* set number of pages to display to the right */
/* maximum value should be 4 */
$pages_to_right = 2;
if ($current_page <= $total_pages && $current_page > $start_page + $pages_to_left) {
    $start_page = $current_page - $pages_to_left;
}

/* show next pages to the right */
if ($current_page <= $total_pages && $current_page > $start_page - $pages_to_right) {
    $end_page = $current_page + $pages_to_right;
    if ($current_page == $total_pages || $current_page + 1 == $total_pages || $current_page + 2 == $total_pages || $current_page + 3 == $total_pages) {
        $end_page = $total_pages;
    }
} else {
    $end_page = $total_pages;
}

/* show previous button */
if ($current_page > 1) {
    echo '<a href="?page='.$previous.'">PREVIOUS</a>';
    echo "&nbsp;&nbsp;";
}

/* display pages */
$start_page = 1;

/* set number of pages to display to the left */
/* maximum value should be 4 */
$pages_to_left = 2;

/* set number of pages to display to the right */
/* maximum value should be 4 */
$pages_to_right = 2;
for ($page = $start_page; $page <= $end_page; $page++) {
    echo '<a href="?page='.$page.'">'.$page.'</a>';
    echo "&nbsp;&nbsp;";
}

/* show last page button */
if ($end_page + $pages_to_right <= $total_pages || $end_page != $total_pages) {
    echo '<a href="?page='.$total_pages.'">&hellip;' . $total_pages . '</a>';
}

/* show next button */
if ($current_page < $total_pages) {
    echo "&nbsp;&nbsp;";
    echo '<a href="?page='.$next.'">NEXT</a>';
}
      

echo "</ul>"; 


        echo '<ul class="pagination"> </ul>';      
        echo "</div>";       
        echo "</td>";         
        echo "</tfoot>"; 
        echo "</table>";
?>

//code for products limit by 10
                                        <?php
if(ISSET($_POST['search'])){
        $date1 = date("Y-m-d", strtotime($_POST['date1']));
        $date2 = date("Y-m-d", strtotime($_POST['date2']));
        $query=mysqli_query($connect, "SELECT * FROM `inventorytbl` WHERE `date` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
        $row=mysqli_num_rows($query);
        if($row>0){
            while($fetch=mysqli_fetch_array($query)){
?>
    <tr>
        <td><?php echo $fetch['PRODUCT']?></td>
        <td><?php echo $fetch['CATEGORY']?></td>
        <td><?php echo $fetch['total_stock']?></td>
        <td><?php echo $fetch['stock_unit_buying_price']?></td>
        <td><?php echo $fetch['stock_total_buying_price']?></td>

    </tr>
<?php
            }
        }else{
            echo'
            <tr>
                <td colspan = "4"><center>Record Not Found</center></td>
            </tr>';
        }
    }else{



//include("confi.php");
    $records_per_page = 10;
    $total_records = "SELECT * FROM inventorytbl;";
    $result = mysqli_query($connect, $total_records);
    $res = mysqli_num_rows($result);

$cnt=1;
    if($res >0){
        
        //while($row = mysqli_fetch_assoc($result))
        $total_pages=  ceil($total_pages = $res/$records_per_page);
          if (!isset($_GET['page'])) {
            $current_page = 1;
            
                      }else{
                      $current_page = $_GET['page'];  
                      }
                      /* calculate and set previous and next page values */
$previous = $current_page - 1;
$next = $current_page + 1;

/* set start page value */
$start_page = 1;

/* set number of pages to display to the left */
/* maximum value should be 4 */
$pages_to_left = 2;

/* set number of pages to display to the right */
/* maximum value should be 4 */
$pages_to_right = 2;
                      $page_result_number = ($current_page - 1)*$records_per_page;
                      $pagesql= "SELECT * from inventorytbl limit ". $page_result_number .','.$records_per_page;
                      $rsult = mysqli_query($connect,$pagesql);
                      while ($row = mysqli_fetch_array($rsult)) {?>

            <tr>
           
            <!--<td><?php echo $row['ID'];?></td>-->
            <td><?php echo $row['PRODUCT'];?></td>
         <td><?php echo $row['CATEGORY'];?></td>
         <!--<td><?php echo $row['subcat_id'];?></td>-->
         <td><?php echo $row['total_stock'];?></td>
         <td><?php echo $row['stock_unit_selling_price'];?></td>
         <td><?php echo $row['stock_total_selling_price'];?></td>
<!--<td><?php echo $row['Date'];?></td>-->
               <td>                                  
                                   
            <A HREF="quantity.php?uid=<?php echo $row["ID"];?>" class="btn btn-info btn-rounded"><span ></span>Sale</a>
          

            </td>
             </tr>
          <?php $cnt=$cnt+1; }
                          
                      }
 ?>          
<?php $cnt=$cnt+1; ?> <?php
        }
    ?>


    <?php
        echo '<div class="table-responsive">';
        echo '<table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">';
        echo "<thead>";
        
        echo "<br>";
        
        echo "</div>";
        echo '<tfoot>';
        echo "<tr>";  
        echo '<td colspan="2">';    
        //echo '<a href="newprt.php"> <button type="button" class="btn btn-info btn-rounded"  data-target="#add-contact">Add New product</button></a>'; 
       // echo '<A HREF="javascript:window.print()" class="btn btn-info btn-rounded"><span class="glyphicon glyphicon-print"></span>Print</a>';     
        echo "</td>";    
        echo '<td colspan="7">';    
        echo '<div class="text-right">';
        echo "<ul class='pagination'>";
        /* show previous pages to the left */
        $current_page = 1;
        $total_pages=  ceil($total_pages = $res/$records_per_page);
if ($current_page <= $total_pages && $current_page > $start_page + $pages_to_left) {
    $start_page = $current_page - $pages_to_left;
}

/* show next pages to the right */
if ($current_page <= $total_pages && $current_page > $start_page - $pages_to_right) {
    $end_page = $current_page + $pages_to_right;
    if ($current_page == $total_pages || $current_page + 1 == $total_pages || $current_page + 2 == $total_pages || $current_page + 3 == $total_pages) {
        $end_page = $total_pages;
    }
} else {
    $end_page = $total_pages;
}

/* show previous button */
if ($current_page > 1) {
    echo '<a href="?page='.$previous.'">PREVIOUS</a>';
    echo "&nbsp;&nbsp;";
}

/* display pages */
$start_page = 1;

/* set number of pages to display to the left */
/* maximum value should be 4 */
$pages_to_left = 2;

/* set number of pages to display to the right */
/* maximum value should be 4 */
$pages_to_right = 2;
for ($page = $start_page; $page <= $end_page; $page++) {
    echo '<a href="?page='.$page.'">'.$page.'</a>';
    echo "&nbsp;&nbsp;";
}

/* show last page button */
if ($end_page + $pages_to_right <= $total_pages || $end_page != $total_pages) {
    echo '<a href="?page='.$total_pages.'">&hellip;' . $total_pages . '</a>';
}

/* show next button */
if ($current_page < $total_pages) {
    echo "&nbsp;&nbsp;";
    echo '<a href="?page='.$next.'">NEXT</a>';
}
      

echo "</ul>"; 


        echo '<ul class="pagination"> </ul>';      
        echo "</div>";       
        echo "</td>";         
        echo "</tfoot>"; 
        echo "</table>";
?>
//code for purchases limit by 10 
<?php
                                        



//include("confi.php");
    $records_per_page = 10;
    $total_records = "SELECT * FROM inventorytbl;";
    $result = mysqli_query($connect, $total_records);
    $res = mysqli_num_rows($result);

$cnt=1;
    if($res >0){
        
        //while($row = mysqli_fetch_assoc($result))
        $total_pages=  ceil($total_pages = $res/$records_per_page);
          if (!isset($_GET['page'])) {
            $current_page = 1;
            
                      }else{
                      $current_page = $_GET['page'];  
                      }
                      /* calculate and set previous and next page values */
$previous = $current_page - 1;
$next = $current_page + 1;

/* set start page value */
$start_page = 1;

/* set number of pages to display to the left */
/* maximum value should be 4 */
$pages_to_left = 2;

/* set number of pages to display to the right */
/* maximum value should be 4 */
$pages_to_right = 2;
                      $page_result_number = ($current_page - 1)*$records_per_page;
                      $pagesql= "SELECT * from inventorytbl limit ". $page_result_number .','.$records_per_page;
                      $rsult = mysqli_query($connect,$pagesql);
                      while ($row = mysqli_fetch_array($rsult)) {?>

            <tr>
           
            <!--<td><?php echo $row['ID'];?></td>-->
            <td><?php echo $row['PRODUCT'];?></td>
         <td><?php echo $row['CATEGORY'];?></td>
         <td><?php echo $row['total_stock'];?></td>
         <td><?php echo $row['stock_unit_buying_price'];?></td>
         <td><?php echo $row['stock_total_buying_price'];?></td>
<!--<td><?php echo $row['Date'];?></td>-->
               <td>                                  
                                   
            <A HREF="quantity.php?uid=<?php echo $row["ID"];?>" class="btn btn-info btn-rounded"><span ></span>Sale</a>
          

            </td>
             </tr>
          <?php $cnt=$cnt+1; }
                          
                      }
 ?>          
<?php $cnt=$cnt+1; ?>

    <?php
        echo '<div class="table-responsive">';
        echo '<table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">';
        echo "<thead>";
        
        echo "<br>";
        
        echo "</div>";
        echo '<tfoot>';
        echo "<tr>";  
        echo '<td colspan="2">';    
        //echo '<a href="newprt.php"> <button type="button" class="btn btn-info btn-rounded"  data-target="#add-contact">Add New product</button></a>'; 
       // echo '<A HREF="javascript:window.print()" class="btn btn-info btn-rounded"><span class="glyphicon glyphicon-print"></span>Print</a>';     
        echo "</td>";    
        echo '<td colspan="7">';    
        echo '<div class="text-right">';
        echo "<ul class='pagination'>";
        /* show previous pages to the left */
        $current_page = 1;
        $total_pages=  ceil($total_pages = $res/$records_per_page);
if ($current_page <= $total_pages && $current_page > $start_page + $pages_to_left) {
    $start_page = $current_page - $pages_to_left;
}

/* show next pages to the right */
if ($current_page <= $total_pages && $current_page > $start_page - $pages_to_right) {
    $end_page = $current_page + $pages_to_right;
    if ($current_page == $total_pages || $current_page + 1 == $total_pages || $current_page + 2 == $total_pages || $current_page + 3 == $total_pages) {
        $end_page = $total_pages;
    }
} else {
    $end_page = $total_pages;
}

/* show previous button */
if ($current_page > 1) {
    echo '<a href="?page='.$previous.'">PREVIOUS</a>';
    echo "&nbsp;&nbsp;";
}

/* display pages */
$start_page = 1;

/* set number of pages to display to the left */
/* maximum value should be 4 */
$pages_to_left = 2;

/* set number of pages to display to the right */
/* maximum value should be 4 */
$pages_to_right = 2;
for ($page = $start_page; $page <= $end_page; $page++) {
    echo '<a href="?page='.$page.'">'.$page.'</a>';
    echo "&nbsp;&nbsp;";
}

/* show last page button */
if ($end_page + $pages_to_right <= $total_pages || $end_page != $total_pages) {
    echo '<a href="?page='.$total_pages.'">&hellip;' . $total_pages . '</a>';
}

/* show next button */
if ($current_page < $total_pages) {
    echo "&nbsp;&nbsp;";
    echo '<a href="?page='.$next.'">NEXT</a>';
}
      

echo "</ul>"; 


        echo '<ul class="pagination"> </ul>';      
        echo "</div>";       
        echo "</td>";         
        echo "</tfoot>"; 
        echo "</table>";
?>
//code for sales limit by 5
                     <?php
                                        



//include("confi.php");
    $records_per_page = 5;
    $total_records = "SELECT * FROM salestbl ;";
    $result = mysqli_query($connect, $total_records);
    $res = mysqli_num_rows($result);

$cnt=1;
    if($res >0){
        
        //while($row = mysqli_fetch_assoc($result))
        $total_pages=  ceil($total_pages = $res/$records_per_page);
          if (!isset($_GET['page'])) {
            $current_page = 1;
            
                      }else{
                      $current_page = $_GET['page'];  
                      }
                      /* calculate and set previous and next page values */
$previous = $current_page - 1;
$next = $current_page + 1;

/* set start page value */
$start_page = 1;

/* set number of pages to display to the left */
/* maximum value should be 4 */
$pages_to_left = 2;

/* set number of pages to display to the right */
/* maximum value should be 4 */
$pages_to_right = 2;
                      $page_result_number = ($current_page - 1)*$records_per_page;
                      $pagesql= "SELECT * from salestbl limit ". $page_result_number .','.$records_per_page;
                      $rsult = mysqli_query($connect,$pagesql);
                      while ($row = mysqli_fetch_array($rsult)) {?>

            <tr>
           
            
            <td><?php echo $row['product'];?></td>
         <td><?php echo $row['category'];?></td>
         <td><?php echo $row['quantity'];?></td>
         <!--<td><?php echo $row['mills'];?></td>-->
         <td><?php echo $row['productunitprice'];?></td>
         <td><?php echo $row['totalcostofsales'];?></td>
<!--<td><?php echo $row['date'];?></td>-->
               <td>                                  
                                   
     

            </td>
             </tr>
          <?php $cnt=$cnt+1; }
                          
                      }
 ?>          
<?php $cnt=$cnt+1; ?>

    <?php
        echo '<div class="table-responsive">';
        echo '<table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">';
        echo "<thead>";
        
        echo "<br>";
        
        echo "</div>";
        echo '<tfoot>';
        echo "<tr>";  
        echo '<td colspan="2">';    
        
       // echo '<A HREF="javascript:window.print()" class="btn btn-info btn-rounded"><span class="glyphicon glyphicon-print"></span>Print</a>';     
        echo "</td>";    
        echo '<td colspan="7">';    
        echo '<div class="text-right">';
        echo "<ul class='pagination'>";
        /* show previous pages to the left */
        $current_page = 1;
        $total_pages=  ceil($total_pages = $res/$records_per_page);
if ($current_page <= $total_pages && $current_page > $start_page + $pages_to_left) {
    $start_page = $current_page - $pages_to_left;
}

/* show next pages to the right */
if ($current_page <= $total_pages && $current_page > $start_page - $pages_to_right) {
    $end_page = $current_page + $pages_to_right;
    if ($current_page == $total_pages || $current_page + 1 == $total_pages || $current_page + 2 == $total_pages || $current_page + 3 == $total_pages) {
        $end_page = $total_pages;
    }
} else {
    $end_page = $total_pages;
}
/* show previous button */
if ($current_page >=1 ) {
    echo '<a href="?page='.$previous.'">PREVIOUS</a>';
    echo "&nbsp;&nbsp;";
}else{
   
}

/* display pages */
$start_page = 1;

/* set number of pages to display to the left */
/* maximum value should be 4 */
$pages_to_left = 2;

/* set number of pages to display to the right */
/* maximum value should be 4 */
$pages_to_right = 2;
for ($page = $start_page; $page <= $end_page; $page++) {
    echo '<a href="?page='.$page.'">'.$page.'</a>';
    echo "&nbsp;&nbsp;";
}

/* show last page button */
if ($end_page + $pages_to_right <= $total_pages || $end_page != $total_pages) {
    echo '<a href="?page='.$total_pages.'">&hellip;' . $total_pages . '</a>';
}

/* show next button */
if ($current_page < $total_pages) {
    echo "&nbsp;&nbsp;";
    echo '<a href="?page='.$next.'">NEXT</a>';
}
      

echo "</ul>"; 


        echo '<ul class="pagination"> </ul>';      
        echo "</div>";       
        echo "</td>";         
        echo "</tfoot>"; 
        echo "</table>";
?>


//end
 <?php
if(ISSET($_POST['search'])){
        $date1 = date("Y-m-d", strtotime($_POST['date1']));
        $date2 = date("Y-m-d", strtotime($_POST['date2']));
        $query=mysqli_query($connect, "SELECT * from salestbl WHERE `date` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
        $row=mysqli_num_rows($query);
        if($row>0){
            while($fetch=mysqli_fetch_array($query)){
?>
    <tr>
        <td><?php echo $fetch['product']?></td>
        <td><?php echo $fetch['category']?></td>
        <td><?php echo $fetch['quantity']?></td>
        <td><?php echo $fetch['mills']?></td>
        <td><?php echo $fetch['productunitprice']?></td>

    </tr>
<?php
            }
        }else{
            echo'
            <tr>
                <td colspan = "4"><center>Record Not Found</center></td>
            </tr>';
        }
    }else{



//include("confi.php");
    $records_per_page = 10;
    $total_records = "SELECT * from salestbl;";
    $result = mysqli_query($connect, $total_records);
    $res = mysqli_num_rows($result);

$cnt=1;
    if($res >0){
        
        //while($row = mysqli_fetch_assoc($result))
        $total_pages=  ceil($total_pages = $res/$records_per_page);
          if (!isset($_GET['page'])) {
            $current_page = 1;
            
                      }else{
                      $current_page = $_GET['page'];  
                      }
                      /* calculate and set previous and next page values */
$previous = $current_page - 1;
$next = $current_page + 1;

/* set start page value */
$start_page = 1;

/* set number of pages to display to the left */
/* maximum value should be 4 */
$pages_to_left = 2;

/* set number of pages to display to the right */
/* maximum value should be 4 */
$pages_to_right = 2;
                      $page_result_number = ($current_page - 1)*$records_per_page;
                      $pagesql= "SELECT * from SELECT * from salestbl limit ". $page_result_number .','.$records_per_page;
                      $rsult = mysqli_query($connect,$pagesql);
                      while ($fetch = mysqli_fetch_array($rsult)) {?>

            <tr>
           
             <td><?php echo $fetch['product']?></td>
        <td><?php echo $fetch['category']?></td>
        <td><?php echo $fetch['quantity']?></td>
        <td><?php echo $fetch['mills']?></td>
        <td><?php echo $fetch['productunitprice']?></td>      
                                   
            <A HREF="quantity.php?uid=<?php echo $row["ID"];?>" class="btn btn-info btn-rounded"><span ></span>Sale</a>
          

            </td>
             </tr>
          <?php $cnt=$cnt+1; }
                          
                      }
 ?>          
<?php $cnt=$cnt+1; ?> <?php
        }
    ?>


    <?php
        echo '<div class="table-responsive">';
        echo '<table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">';
        echo "<thead>";
        
        echo "<br>";
        
        echo "</div>";
        echo '<tfoot>';
        echo "<tr>";  
        echo '<td colspan="2">';    
        //echo '<a href="newprt.php"> <button type="button" class="btn btn-info btn-rounded"  data-target="#add-contact">Add New product</button></a>'; 
       // echo '<A HREF="javascript:window.print()" class="btn btn-info btn-rounded"><span class="glyphicon glyphicon-print"></span>Print</a>';     
        echo "</td>";    
        echo '<td colspan="7">';    
        echo '<div class="text-right">';
        echo "<ul class='pagination'>";
        /* show previous pages to the left */
        $current_page = 1;
        $total_pages=  ceil($total_pages = $res/$records_per_page);
if ($current_page <= $total_pages && $current_page > $start_page + $pages_to_left) {
    $start_page = $current_page - $pages_to_left;
}

/* show next pages to the right */
if ($current_page <= $total_pages && $current_page > $start_page - $pages_to_right) {
    $end_page = $current_page + $pages_to_right;
    if ($current_page == $total_pages || $current_page + 1 == $total_pages || $current_page + 2 == $total_pages || $current_page + 3 == $total_pages) {
        $end_page = $total_pages;
    }
} else {
    $end_page = $total_pages;
}

/* show previous button */
if ($current_page > 1) {
    echo '<a href="?page='.$previous.'">PREVIOUS</a>';
    echo "&nbsp;&nbsp;";
}

/* display pages */
$start_page = 1;

/* set number of pages to display to the left */
/* maximum value should be 4 */
$pages_to_left = 2;

/* set number of pages to display to the right */
/* maximum value should be 4 */
$pages_to_right = 2;
for ($page = $start_page; $page <= $end_page; $page++) {
    echo '<a href="?page='.$page.'">'.$page.'</a>';
    echo "&nbsp;&nbsp;";
}

/* show last page button */
if ($end_page + $pages_to_right <= $total_pages || $end_page != $total_pages) {
    echo '<a href="?page='.$total_pages.'">&hellip;' . $total_pages . '</a>';
}

/* show next button */
if ($current_page < $total_pages) {
    echo "&nbsp;&nbsp;";
    echo '<a href="?page='.$next.'">NEXT</a>';
}
      

echo "</ul>"; 


        echo '<ul class="pagination"> </ul>';      
        echo "</div>";       
        echo "</td>";         
        echo "</tfoot>"; 
        echo "</table>";
?>