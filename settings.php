<?php
	//session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?>

<?php 
?>

<div class="row">
	<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
	<div id="page-wrapper">
	<div class="main-page">
	<div class="form">
		<a href="action.php?profile"><h2 class="title1">Settings</h2></a>
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-body">

			<div class="form-group">
				<!-- <h4 class="title1"><i class="fa fa-user-plus"></i> Invite Friends</h4> -->
				<br><a href="action.php?profile"><h4 class="title1"><i class="fa fa-user"></i> Account</h4></a>
				<br><a href="action.php?change_password"><h4 class="title1"><i class="fa fa-key"></i> Password</h4></a>
				<br><h4 class="title1"><a href="action.php?payments"><i class="fa fa-dollar"></i> Payments</h4></a>
				<!-- <br><h4 class="title1"><i class="fa fa-search"></i> Search History</h4>
				<br><h4 class="title1"><i class="fa fa-video-camera"></i> Tutorials</h4>
				<br><a href="action.php?photo_of_you"><h4 class="title1"><i class="fa fa-picture-o"></i> Photo of You</h4></a> -->
				<br><a href="action.php?linked_account"><h4 class="title1"><i class="fa fa-link"></i>  Linked Account</h4></a>
				
				<br><h4 class="title1"><i class="fa fa-lock"></i> Privacy</h4>
				<br><h4 class="title1"><i class="fa fa-info-circle"></i> Terms of Use</h4>
				<br><h4 class="title1"><i class="fa fa-code"></i> Open Source Libraries</h4>
				<br><a href="logout.php"><h4 class="title1"><i class="fa fa-sign-out"></i> Log Out</h4></a>
				<br><h4 class="title1"><i class="fa fa-plus"></i> Add Account</h4>
			
			
			</div> 	
			</div>
			</div>
	</div>
	</div>
</div>
</form>
</div>


	<?php } ?>

