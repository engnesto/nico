<?php
include 'confi.php';
?>

<!DOCTYPE html>
<head>
<title></title>
</head>
<body>


<?php
$sql ="SELECT * FROM TBL;";
$res = mysqli_query($connect, $res);
$red = mysqli_num_rows($res);
if($red >0)
{
	while ($row = mysqli_fetch_assoc($res) ) {
		echo $row['name'];
	}
}
?>
</body>
</html>