<?php
	session_start();
	
	session_destroy();
	
	echo"<script>window.open('student_login.php?logged_out=You have logged out sucessfully!, Come soon','_self')</script>";
?>