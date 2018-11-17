	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Atech Computer Classes Dashboard  | Home :: w3layouts</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<?php
	//session_start();
	include("includes/db.php");
	
	//global $connection;
	
	$user=$_SESSION['student_email'];
	
	$select_user="select * from student_signup where user_email='$user'";
	$run_user=mysqli_query($connection, $select_user);
	
	$result_user=mysqli_fetch_array($run_user);
	
	$firstname=$result_user['firstname'];
	$lastname=$result_user['lastname'];
	$user_email=$result_user['user_email'];
	$user_pass=$result_user['user_pass'];
	$con_pass=$result_user['con_pass'];
	$address=$result_user['address'];
	$contact=$result_user['contact'];
	$student_image=$result_user['student_image'];
	
	$adm_id=$result_user['student_id'];
?>

<?php
	if(isset($_POST['update'])){
		//global $conn;
		$ip=getIp();
		
		$adm_id=$adm_id;
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$user_email=$_POST['user_email'];
		$user_pass=$_POST['user_pass'];
		$con_pass=$_POST['con_pass'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$student_image=$_POST['student_image'];
		
		//getting data from file		
		$image=$_FILES['student_image']['firstname'];
		$image_temp_name=$_FILES['student_image']['tmp_name'];
		
		move_uploaded_file($image_temp_name,"student_signup/student_images/$image");
		
		$update_student="update student_signup set firstname='$firstname',lastname='$lastname', user_email='$user_email', user_pass='$user_pass', address='$address', contact='$contact', student_image='$student_image' where student_id='$adm_id' ";
		$run_student=mysqli_query($conn, $update_cart);
		
		if($run_student){
			echo"<script>alert('Your account has been updated sucessfully...')</script>";
			echo"<script>window.open('my_account.php','_self')</script>";
		}else{
			echo"<script>alert('Error in Update... $cid')</script>";
		}
	}
?>



<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' 
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
<!-- <link href="css1/normalize.css" rel="stylesheet"> -->
<!-- <link href="css1/style.css" rel="stylesheet"> -->
<!--//Metis Menu -->

</head> 
<body >

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">Update Your Account</h2>
				<div class="sign-up-row widget-shadow">
					<div class="form-group">
				<form action="" method="post">
					<div class="sign-u">
								<h5>First Name :</h5>
								<input type="text" name="firstname" required="" value="<?php echo $firstname ?>" />
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<h5>Last Name :</h5>
								<input type="text" name="lastname" required="" value="<?php echo $lastname ?>" />
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<h5>Email Address :</h5>
								<input type="email" name="user_email" required="" value="<?php echo $user_email ?>" />
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<h5>Password :</h5>
								<input type="password" name="user_pass" required="" value="<?php echo $user_pass ?>" />
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<h5>Password Confirm :</h5>
								<input type="password" name="con_name" required="" value="<?php echo $con_pass ?>" />
						</div>
						
						<div class="clearfix"> </div>

					<br><div class="sign-u">
							<h5>Address :</h5>
							<input type="text" name="address"  required="" value="<?php echo $address ?>" />
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<h5>Contact:</h5>
								<input type="contact" name="contact" required="" type="tel" minlength="10" maxlength="10" value="<?php echo $contact ?>" />
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<h5>Student Image:</h5>
								<input type="file" name="student_image" required=""/>
								<img src="student_images/<?php echo $student_image ?>" width="50px" height="50px" />
						<div class="clearfix"> </div>
					</div>
		
					<div class="sub_home">
							<input type="submit" value="Update">
						<div class="clearfix"> </div>
					</div>
					<div class="forgot">
						<a href="action.php?my_account">My account</a>
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
