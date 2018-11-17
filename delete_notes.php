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
						<?php

							include("includes/db.php");
							$serNo = $_GET['delete'];
							$query = "DELETE FROM view_all_notes_db WHERE s_n='$serNo'";
							$data = mysqli_query($conn, $query);

							if ($data) {
								echo "<script>alert('Record Deleted')</script>";
								?>
								<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/student/action.php?view_all_notes">
								<?php
							}
							else
							{
								echo "<font color='red'>Sorry Delete process failed";
							}



						?>
				</div>
			</div>
		</div>				
</form>
</div>
</div>

	<?php } ?>