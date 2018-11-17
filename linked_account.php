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
		<div class="form">
		<a href="action.php?profile"><h2 class="title1">Linked Account</h2></a>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-body">

			<div class="form-group">
			<h4 class="title1"><i class="fa fa-facebook-square"></i> Facebook</h4>
			<br><h4 class="title1"><i class="fa fa-twitter-square"></i> Twitter</h4>
			<br><h4 class="title1"><i class="fa fa-google-plus-circle"></i> Gmail Account</h4>
			<br><h4 class="title1">OK.ru</h4>
			<br><h4 class="title1"><i class="fa fa-instagram"></i> Instagram</h4>

</div>
		</div>
	</div>
	</div>
</div>
</form>
</div>


	<?php } ?>