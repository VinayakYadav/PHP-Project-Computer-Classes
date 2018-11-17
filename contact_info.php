<?php
	//session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?>

<?php 
?>

<div class="row">
		<div id="page-wrapper">
		<div class="main-page">
		<a href="action.php?profile"><h2 class="title1">Contact Information</h2></a>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-body">

			<div class="form-group">
			<tr>
				<td>
					<h4 class="title1">EMAIL</h4>
						<?php
						//global $con;
						$get_student_email="select user_email from student_signup where user_email='".$_SESSION['student_email']."'";
						$run_get_email=mysqli_query($conn,$get_student_email);
						while($result_email=mysqli_fetch_array($run_get_email)){
						$user_email=$result_email['user_email'];
						echo"<h4 '$user_email'>$user_email</h4>";
						}
					?>
					<h5>Your email account used across payments on Atech</h5></a>
		
				</td>
			</tr>

		</div>
	</div>
	</div>
</div>
</div>


	<?php } ?>