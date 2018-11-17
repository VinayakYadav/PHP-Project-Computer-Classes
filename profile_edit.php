<?php
	//session_start();

  include("includes/db.php");
?>
<?php
	//session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?> 
 
<div class="row">
		<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
		<div id="page-wrapper">
		<div class="main-page">
		<div class="form">
		<a href="action.php?profile"><h2 class="title1">Profile</h2></a>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-body">

			<div class="form-group">
			<h4 class="title1">Upload Profile</h4>
			<input type="file" name="profile_image" class="form-control" id="exampleInputEmail1" required=''>
							<h6>Please include as a .jpg</h6>
			</div> 
			
				
			<div class="form-group"> 
			<h4 class="title1">Name</h4>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="first name" name="pe_name" required=''> 
			<br><input type="text" class="form-control" id="exampleInputEmail1" placeholder="last name" name="pe_last_name" required=''> 
			</div>
			<div class="form-group"> 
			<h4 class="title1">Biograpy</h4>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="pe_biograpy" required=''>
			<h6 class="title1">Describe yourself in a sentence or 200 characters max.</h6> 
			</div>
			<div class="form-group"> 
			<h4 class="title1">Website</h4>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="pe_website" required=''>
			<h6 class="title1">Link to your profile or website.</h6> 
			</div>
			
			<div class="form-group"> 
			<h4 class="title1">Private Information</h4>
			<h4 class="title1">E-mail Address</h4>
						<?php
						//global $con;
						$get_student_email="select user_email from student_signup where user_email='".$_SESSION['student_email']."'";
						$run_get_email=mysqli_query($conn,$get_student_email);
						while($result_email=mysqli_fetch_array($run_get_email)){
						$user_email=$result_email['user_email'];
						echo"<h5 '$user_email'>$user_email</h5>";
						}
					?>
			</div>
			<div class="form-group"> 
			<h4 class="title1">Phone uumber</h4>
			<input  class="form-control" type="tel" placeholder="..." name="contact" minlength="10" maxlength="10" required="" />
			</div>

			<div class="form-group"> 
			<h4 class="title1">Gender</h4>
			<select class="form-control" name="gender">
				<option>Male</option>
				<option>Female</option>
				<option>Not Specified</option>
			</select>
			</div>
			<div class="form-group"> 
			<h4 class="title1">Location</h4>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="pe_location" required=''>
			<h6 class="title1">Where you're commenting from. 100 characters max</h6> 
			</div>
			
			<button type="submit" name="profile_edit" value="Submit Form"  class="btn btn-default">Update</button>
						
			</div>
		</div>
	</div>
	</div>
</div>
</form>
</div>
<?php 
	if(isset($_POST['profile_edit'])){
		//getting data from fields
			$student_email=$_SESSION['student_email'];
		   	$pe_name=$_POST['pe_name'];
		    $pe_last_name=$_POST['pe_last_name'];
			$pe_biograpy=$_POST['pe_biograpy'];
			$pe_website=$_POST['pe_website'];
			$contact=$_POST['contact'];
			$gender=$_POST['gender'];
			$pe_location=$_POST['pe_location'];

		//getting data from file
		$profile_image=$_FILES['profile_image']['name'];
		$img_temp_name=$_FILES['profile_image']['tmp_name'];
		
		move_uploaded_file($img_temp_name,"images/$profile_image");
		


$query= "UPDATE profile_edit SET profile_image='$profile_image', pe_name='$pe_name',pe_last_name='$pe_last_name',pe_biograpy='$pe_biograpy',pe_website='$pe_website',contact='$contact',gender='$gender',pe_location='$pe_location' WHERE student_email='$student_email'";

		
		$run_query=mysqli_query($conn,$query);
		
		if($run_query){
			echo "<script>alert('Profile Updated...');</script>";
			echo "<script>window.open('action.php?profile','_self');</script>";
		}else{
			echo "<script>alert('SQL Error: Profile not Updated');</script>";
			echo "<script>window.open('action.php?profile','_self');</script>";
		}
	}
?>

<?php } ?> 