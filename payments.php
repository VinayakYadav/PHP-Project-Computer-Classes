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
		<a href="action.php?profile"><h2 class="title1">Payment</h2></a>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-body">

			<div class="form-group">
			<tr>
				<td>
					<h3 class="title1">Payment Methods</h3>
					<a href="#"><h4 class="title1">Add Debit or Credit Card</h4></a>
					<br><h3 class="title1">Profile</h3>
					<a href="action.php?contact_info"><h4>Contact Information</h4></a>
		
				</td>
			</tr>

		</div>
	</div>
	</div>
</div>
</div>


	<?php } ?>