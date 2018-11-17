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
		<table style="width:100%">
		<?php
		$i=0;
			include("includes/db.php");
			$get_profile="select * from profile_edit where student_email='".$_SESSION['student_email']."'";
			$run_get=mysqli_query($conn, $get_profile);
			
			while($run_result=mysqli_fetch_array($run_get)){
					$profile_image=$run_result['profile_image'];
					$pe_name=$run_result['pe_name'];
					$pe_last_name=$run_result['pe_last_name'];
					$pe_biograpy=$run_result['pe_biograpy'];
					$pe_website=$run_result['pe_website'];
					$contact=$run_result['contact'];
					$gender=$run_result['gender'];
					$pe_location=$run_result['pe_location'];
					$i++;
			
		?>
			<tr>
			<th><h2 class="title1">View Profile</h2>
			</th>
			<th>
				<a href="action.php?profile_edit"><h4 align="right" class="title1"><i class="fa fa-edit">Edit Your Profile</i></h4></a>
			</th>
			</tr>
		</table>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-body">

			
			<div class="form-group"> 
			<h3 class="title1">PROFILE</h3>
			<img src="images/<?php echo $profile_image ?>" width="350px" height="400px"/>
			</div>

			<div class="form-group"> 
			<h4 class="title1">Name:</h4>
			<?php echo $pe_name ?>
			<?php echo $pe_last_name ?>
			</div>

			<div class="form-group"> 
			<h4 class="title1">Biograpy:</h4>
			<?php echo $pe_biograpy ?>
			</div>

			<div class="form-group"> 
			<h4 class="title1">Website:</h4>
			<?php echo $pe_website ?>
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
						echo"<h4 '$user_email'>$user_email</h4>";
						}
					?>
			</div>

			<div class="form-group"> 
			<h4 class="title1">Phone uumber</h4>
			<?php echo $contact ?>
			</div>
			<div class="form-group"> 
			<h4 class="title1">Gender:</h4>
			<?php echo $gender ?>
			</div>

			<div class="form-group"> 
			<h4 class="title1">Location:</h4>
			<?php echo $pe_location ?>
			</div>						
			</div>
		</div>
		<table style="width:100%">
			<tr>
			<th>
				<a href="action.php?change_password"><h4 align="right" class="title1"><i class="fa fa-edit">Change Your Password</i></h4></a>
			</th>
			</tr>
		</table>
	</div>
	</div>
</div>
</form>
</div>
<?php } ?>

<?php } ?>
