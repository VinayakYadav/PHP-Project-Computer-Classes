<?php
	//session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?>


<div class="row">
<form action="" method="post">
			<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">View Details</h2>
				<div class="grids widget-shadow">
					<table class="table table-bordered table-striped no-margin grd_tble">
					<tr align="center">
					</tr>
						<table class="table table-bordered table-striped no-margin grd_tble">
						<!-- PHP Code Here -->
						<h1>Comming Soon...</h1>
						</table>
					</table>
				</div>
			</div>
		</div>				
</form>
</div>
</div>

	<?php } ?>