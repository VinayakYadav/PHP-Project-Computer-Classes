<?php
	session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Login Page :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

<link href="css1/admin_login.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body >

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">Delete Your Account</h2>
				<div class="sign-up-row widget-shadow">
					<div class="form-group">
				<form action="" method="post">
		
					<div class="sub_home">
							<input type="submit" name="yes" value="Yes I want" />
							<input type="submit" name="no" value="I don't want" />
						<div class="clearfix"> </div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
	<!--footer-->
		<div class="footer">
		  			 <p>&copy; 2018 &nbsp <i class="fa fa-area-chart"></i> Atech Computer Classes. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">ShuaryA Tech</a></p></div>
	       	
        <!--//footer-->
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	
</body>
</html>

<?php
	include("includes/db.php");
	
	$user=$_SESSION['student_email'];
	
	if(isset($_POST['yes'])){
		$delete_account="delete from customers where customer_email='$user'";
		$run_delete=mysqli_query($conn, $delete_account);
		
		if($run_delete){
			echo "<script>alert('Your account hasbeen deleted sucessfully...')</script>";
			echo"<script>window.open('student_signup.php','_self')</script>";
		}else{
			echo "<script>alert('Try some other time...')</script>";
			echo"<script>window.open('my_account.php','_self')</script>";
		}
	}else if(isset($_POST['no'])){
			echo "<script>alert('Thanks to continue with us, have a great day...')</script>";
			echo"<script>window.open('my_account.php','_self')</script>";
	}
?> 

<?php } ?>