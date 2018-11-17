 <?php
	//session_start();
	session_start();	
	include("includes/db.php");
	
	if(isset($_POST['change_password'])){
		$user=$_SESSION['student_email'];
		
		$current_password=$_POST['con_pass'];
		$new_password=$_POST['new_pass'];
		$confirm_new_password=$_POST['con_pass'];
		
		$select_password="select * from student_login where user_pass='$user_pass' AND user_email='$user'";
		$run_password=mysqli_query($conn, $select_password);
		//$result_password=mysqli_fetch_array($run_password);
		$check_password=mysqli_num_rows($run_password);
		
		//echo $check_password;
		
		if($check_password==0){
			echo "<script>alert('Your existing password is Incorrect!')</script>";
			exit();
		}
		
		if($new_pass!=$con_pass){
			echo"<script>alert('Confirm Password do not match!')</script>";
			exit();
		}
		
		$update_password="update student_login set user_pass='$new_pass' where user_email='$user'";
		$run_update=mysqli_query($conn, $update_password);
		
		if($run_update){
			echo"<script>alter('Password updated Sucessfully!!!')</script>";
			echo"<script>window.open('my_account.php','_self')</script>";
		}
	}
?>
<!DOCTYPE HTML>
<html>	
<head>
<title>Atech Computer Classes Dashboard an Admin Panel</title>
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
<script>
	function checkpassword()
	{
		var p=f.new_pass.value;
		var cp=f.con_pass.value;
		if (p==cp) {
			alert("Password and Confirm password are Similar")
		}else
		alert("mismatch")
		msg=(p==cp)?"Both are some":"mismatch";
		alert(msg)
	}
</script>

</head> 
<body >
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Forgot Password</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="#" name="f" method="post">
							<input type="email" class="user" name="user_email" placeholder="Enter Your Email" required="">
							<input type="password" name="user_pass" class="lock" placeholder="Enetr Current Password" required="">
							<input type="password" name="new_pass" class="lock" placeholder="Enter New Password" required="">
							<input type="password" name="con_pass" class="lock" placeholder="Confirm Password" required="">					
							<div class="clearfix"> 
							</div>
							<input type="submit" name="yes" value="Change Password" value="checkpassword" onclick="checkpassword()">
						</form>
					</div>
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