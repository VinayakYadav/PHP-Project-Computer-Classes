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
<h2 class="title1">Exam Portal</h2>
<div class="widget-shadow">
<div class="login-body">
<form action="#" method="post">
<h2 align="center" ><?php
						//global $con;
						$get_student_email="select user_email from student_signup where user_email='".$_SESSION['student_email']."'";
						$run_get_email=mysqli_query($conn,$get_student_email);
						while($result_email=mysqli_fetch_array($run_get_email)){
						$user_email=$result_email['user_email'];
						echo" $user_email";
						}
					?>
</h2>
<br>		
		<?php   
		include("header/header.php");
		?><a href="exam/index.php">
		<i class="fa fa-cog"></i>Click here</a>
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
