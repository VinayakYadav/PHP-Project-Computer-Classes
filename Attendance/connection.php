<?php

	$host = "localhost";
	$dbname = "attend";
	$user = "root";
	$pass = "";


	$link = new mysqli($host,$user,$pass,$dbname);

	if ($link) {
		echo "connection established successfully";
	}else{
		echo "error";
	}



?>