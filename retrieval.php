<?php
include("confi.php");
	$query = "SELECT * FROM customertbl;";
	$result = mysqli_query($connect, $query);
	$res = mysqli_num_rows($result);

	if($res >0){
		
		while($rows = mysqli_fetch_assoc($result)){

			echo "<tr>";			
			echo "<td>".$rows["CUSTOMER-ID"]."</td>";
			echo "<td>".$rows["NAME"]."</td>";
			echo "<td>".$rows["PHONE"]."</td>";
			echo "<td>".$rows["EMAIL"]."</td>";
			echo "<td>".$rows["SERIAL_NO"]."</td>";
			echo "<td>".$rows["SHIPPING-ADDRESS"]."</td>";
			echo "<td>".$rows["DEALER"]."</td>";			
			echo "</tr>";
			

		}
	}
		echo '<div class="table-responsive">';
		echo '<table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">';
		echo "<thead>";
		echo "<tr><th>ID</th><th>NAME</th><th>PHONE</th><th>EMAIL</th><th>SERIAL-NO</th><th>SHIPPING-ADDRESS</th><th>DEALER</th></tr>";
		echo "</thead>";
		echo "<br>";
		
		echo "</div>";
		echo '<tfoot>';
        echo "<tr>";  
        echo '<td colspan="2">';    
        echo '<a href="newcustomer.html"> <button type="button" class="btn btn-info btn-rounded"  data-target="#add-contact">Add New Customer</button></a>';      
        echo "</td>";    
        echo '<td colspan="7">';    
        echo '<div class="text-right">';    
        echo '<ul class="pagination"> </ul>';      
        echo "</div>";       
        echo "</td>";         
        echo "</tfoot>"; 
		echo "</table>";
?>
