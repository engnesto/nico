<?php
	define('DB_SERVER','localhost');
	define('DB_USER','nicoevolve_root');
	define('DB_PASSWORD','FTL{@,K2LLxw');
	define('DATABASE','nicoevolve_db');
		
	$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
	if(!$connect){
		die('Connection to the server failed '.mysqli_connect);
	}
	else{
		$db = mysqli_select_db($connect,DATABASE);
		if(!$db){
			die('Database connection failed ' .mysqli_connect);
		}
	}

	
?>