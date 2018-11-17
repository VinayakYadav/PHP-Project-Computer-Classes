<?php
	//session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?>

<?php 
?>

<div class="row">
<form action="" method="post">
			<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">My Account</h2>
					<div class="grids widget-shadow">
						<table class="table table-bordered table-striped no-margin grd_tble">
						<tr align="center">
						</tr>
							<table class="table table-bordered table-striped no-margin grd_tble">
							<!-- PHP Code Here -->
							<h1>Refer my accout page...................</h1>
							<br>
							<tr>
							  <td align="center"><h4><a href="update_account.php"><i class="fa fa-edit"></i>Update Account</a></h4>
	               			 </td><br>
	               			 <td align="center"><h4><a href="change_password.php"><i class="fa fa-edit"></i>Change Password</a></h4>
	               			 </td>
	               			</tr>
	               			</table>
					</div>
			</div>

		</div>				
</form>
</div>
<?php } ?>

