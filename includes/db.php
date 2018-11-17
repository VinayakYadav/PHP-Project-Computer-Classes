<?php
	$conn=mysqli_connect("localhost","root","","dbatech");
	
	if(mysqli_connect_errno()){
		echo "Connection not established.   ".mysqli_connect_errno();
	}
?>