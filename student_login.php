<?php
	session_start();

  include("includes/db.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Login Page :: ATech Classes</title>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>


<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

</head> 
<body >
<!-- main content start-->
<div id="page-wrapper">
<div class="main-page login-page ">
<h2 class="title1">Login</h2>
<div class="widget-shadow">
<div class="login-body">
<form action="#" method="post">
	<input type="email" class="user" name="user_email" placeholder="Enter Your Email" required="">
	<input type="password" name="user_pass" class="lock" placeholder="Password" required="">
	<div class="forgot-grid">
		Remember me&nbsp<label><input type="checkbox" name="checkbox"></label>
		<div class="forgot">
			<a href="forgot.php">forgot password?</a>
		</div>
		<div class="clearfix"> </div>
	</div>
	<input type="submit" name="signIn" value="Login">
	<div class="registration">
		Don't have an account ?
		<a class="" href="student_signup.php">
			Create an account
		</a>
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
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>
<!-- //Bootstrap Core JavaScript -->

</body>
</html>


<?php
if(isset($_POST['signIn'])){
			$user_email=mysqli_real_escape_string($conn, $_POST['user_email']);
			$user_pass=mysqli_real_escape_string($conn, $_POST['user_pass']);
	    	// $user_branch=mysqli_real_escape_string($conn, $_POST['branch']);
			$get_admin="select * from student_signup where user_email='$user_email' AND user_pass='$user_pass' "; //AND branch='$user_branch'
			$run_get=mysqli_query($conn, $get_admin);
		
			$result_run=mysqli_fetch_array($run_get);
			$result_count=mysqli_num_rows($run_get);
		
		if($result_count==0){
			echo"<script>alert('No records found... Try Again')</script>";
		}else{
			$_SESSION["student_email"]=$user_email;
			echo"<script></script>";
			echo"<script>window.open('index.php?logged_in=You are loged in Sucessfully!','_self')</script>";
		}
	}

?>
