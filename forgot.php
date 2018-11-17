
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
							<input type="submit" name="student_signup" value="Change Password" value="checkpassword" onclick="checkpassword()">
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
 <?php
	//session_start();
	session_start();	
	include("includes/db.php");
	
	if(isset($_POST["student_signup"])){
        if(!empty($_POST["user_email"])){
            $email = trim($_POST["user_email"]);
        } else {
            $error_message = "<li>Email is required</li>";
        }
        if(empty($error_message)){
            $query = $db->prepare("SELECT name, email FROM users WHERE email =?");
            $query->execute(array($email));
            $user = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        if(!empty($user)){
//            $msg='yes';
//            echo "<script type='text/javascript'>alert('$msg');</script>";
            require_once ("forget-password-mail.php");
        } else {
            $error_message = 'No Email Found';
        }
    }
?>