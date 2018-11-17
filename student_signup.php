<?php
	session_start();
  	include("includes/db.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Signup Page :: ATech Classes</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

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

<!-- Metis Menu -->
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

<script>
	function checkpassword()
	{
		var p=f.user_pass.value;
		var cp=f.con_pass.value;
		if (p==cp) {
			alert("Password and Confirm password are Similar")
		}else
		alert("mismatch")
		msg=(p==cp)?"Both are some":"The new password must be same from the Confirm password.";
		alert(msg)
	}
</script>

</head> 
<body >

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">SignUp Here</h2>
				<div class="sign-up-row widget-shadow">
					<div class="form-group">
					<h5>Personal Information :</h5>
				<form action="" name="f" method="post">			
					<div class="sign-u">
						<input type="text" name="firstname" placeholder="First Name" required=""/>
					<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<input type="text" name="lastname" placeholder="Last Name" required=""/>
					<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<input type="email" name="user_email" placeholder="email@example.com" required=""/>
					<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<input type="password" name="user_pass" id="password" placeholder="Password" required=""/>
					<div class="clearfix"> </div>
					<input type="password" name="con_pass" id="confirm_password" placeholder="Confirm Password" required="" required=""/>
					</div>
					<div class="clearfix"> </div>
					<div class="sign-u">
						<h5>DOB:</h5><input class="input100" name="dob" type="date" required=""/>
					</div>
					<div class="clearfix"> </div>				
					<div class="sign-u">	
					<h6>Gender:</h6>
						<label><input type="radio" class="radio-inline" name="gender" value="male" required=""/> Male</label>
						<label><input type="radio" class="radio-inline" name="gender" value="female" required=""/> Female</label>
					</div>
					<div class="clearfix"> </div>
					<div class="sign-u">
						<h6 for="exampleInputEmail1">Address:</h6> 
							<textarea cols="30" rows="5" id="exampleInputEmail1" placeholder="Enter Your Address" name="address" required=''></textarea>
						</div>
					<div class="clearfix"></div>
					<div class="sign-u">
						<h6 for="exampleInputEmail1">Contact:</h6>
							<input type="tel" placeholder="Contact" required=""  name="contact" minlength="10" maxlength="10" required="" />
					</div>
					<div class="clearfix"> </div>
					<div class="sign-u">
					<h6>Branch:</h6>
						<select name="branch" class="form-control1" required="" />
					            <option selected="">Select Branch</option>
                  				<?php
                    			$get_branch='select * from branches';
                    			$run_branch=mysqli_query($conn, $get_branch);
        
                    			while($result_branch=mysqli_fetch_array($run_branch)){
                    			$bid=$result_branch['bid'];
                    			$bname=$result_branch['bname'];
                    			echo"<option value='$bid'>$bname</option>";
                    			}
                  				?>
						</select>	
					</div>
					<div class="clearfix"> </div>
					<!-- <div class="sign-u">
					<h6 for="exampleInputEmail1">Upload Profile</h6>
					<input type="file" name="profile_image" class="form-control" id="exampleInputEmail1" required=''>
					Please include as a .jpg
					</div> 
			 -->
					<div class="clearfix"></div>
					<div class="sub_home">
							<input type="submit" value="Sign Up" name="signup">
					</div>
					<div class="clearfix"> </div>
					<div class="registration">
						Already Registered.
							<a class="" href="student_login.php">
							Login
							</a>
					</div>
				</form>
				</div>
				</div>
			</div>
		</div>
		<!--footer-->
<div class="footer">
	<p>2018 &nbsp; <i class="fa fa-area-chart"></i> Atech Computer Classes. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">ShuaryA Tech</a></p>
</div> 
<!--//footer-->
</div>	

<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>
</body>
</html>

<?php
	if(isset($_POST['signup'])){
    $count=0;
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
	$user_email=$_POST['user_email'];
	$user_pass=$_POST['user_pass'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $branch=$_POST['branch'];

    $get_email="select user_email from student_signup";
    $run_get=mysqli_query($conn, $get_email);
    
    while($run_result=mysqli_fetch_array($run_get)){
      if($user_email==$run_result[0]){
        $count++;
      }
    }

    if($count==0){

		$get_admin="insert into student_signup(firstname,lastname,user_email,user_pass,dob,gender,address,contact,branch) values('$firstname','$lastname','$user_email','$user_pass','$dob','$gender','$address','$contact','$branch')";
		$run_get=mysqli_query($conn, $get_admin);
		
		
		if($run_get){
      echo"<script></script>";
			echo"<script>alert('Registration Done, Your Portal will be ready in 24 hours')</script>";
			echo"<script>window.open('student_login.php?logged_in=You are loged in Sucessfully!','_self')</script>";
		}else{
			echo"<script></script>";
			echo"<script>alert('SQL Error')</script>";
		}
	}
  else{
  echo"<script></script>";
      echo"<script>alert('Email Already Exists, use another or Call Admin.')</script>";
}
}


?>