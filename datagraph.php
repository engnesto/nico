<?php 
  $timezone = 'Asia/Manila';
  date_default_timezone_set($timezone);
  $today = date('Y-m-d');
  $month = date('m');
  $year = date('Y');
  $week = date('w');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
?>
<?php

//data.php
include "confi.php";
//$connect = new PDO("mysql:host=localhost;dbname=emvigo", "root", "");

if(isset($_POST["action"]))
{
	
	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT category,SUM(quantity) AS total FROM salestbl where 'date' =date('w') GROUP BY category  ";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'category'		=>	$row["category"],
				'total'			=>	$row["total"],
				'color'			=>	'#' . rand(100000,999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>