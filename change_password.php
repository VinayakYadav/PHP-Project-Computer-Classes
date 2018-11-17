 <body >
<!-- main content start-->
<div id="page-wrapper">
<div class="main-page login-page " class="form-group has-success">
	<h2 class="title1">Change Password</h2>
	<div class="widget-shadow">
		<div class="login-body">
			<form action="" name="f" method="post">
				<input type="email" class="user" name="user_email" placeholder="Enter Your Email" required="">
				<input type="password" name="user_pass" class="lock" placeholder="Enetr Current Password" required="">
				<input type="password" name="new_pass" class="lock" placeholder="Enter New Password" required="">
				<input type="password" name="con_pass" class="lock" placeholder="Confirm Password" required="">					
				<div class="clearfix"> 
				</div>
				<input type="submit" name="student_signup" value="Change Password" value="checkpassword" onclick="checkpassword()">
				<div class="forgot">
				<h4><a href="action.php?profile">Profile</a></h4>
				</div>
			</form>
		</div>
		</div>
</div>
</div>
</body>

<?php
	//session_start();
	include("includes/db.php");
	
	if(isset($_POST['student_signup'])){
		//$user=$_SESSION['student_email'];
		$user_email=$_POST['user_email'];
		$user_pass=$_POST['user_pass'];
		$new_pass=$_POST['new_pass'];
		$con_pass=$_POST['con_pass'];
		
		$select_password="select user_pass from student_signup where user_pass='$user_pass' AND user_email='$user_email'";
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
		
		$update_password="update student_signup set user_pass='$new_pass' where user_email='$user_email'";
		$run_update=mysqli_query($conn, $update_password);
		
		if($run_update){
			echo"<script>alert('Password updated Sucessfully!!!')</script>";
			echo"<script>window.open('index.php','_self')</script>";
		}
	}
?>