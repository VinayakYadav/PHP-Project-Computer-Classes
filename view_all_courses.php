<?php
	//session_start();
	 include("includes/db.php");
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?>


<div class="row">
<form action="" method="post">
	
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="media">
					<h2 class="title1">View all Your Courses Here</h2>
					<div class="bs-example5 widget-shadow" data-example-id="default-media">
						<table class="table table-bordered table-striped no-margin grd_tble">
						<tr align="center" bgcolor="skyblue">
						<th>S N.</th>
						<th>Course Name</th>
						<th>Enrollment Date</th>
						<th>Fees</th>
						</tr> 
	
						<?php
						$i=0;
						include("includes/db.php");
						$get_course="select * from student_courses where student_id=(select student_id from student_signup where user_email='".$_SESSION['student_email']."')";
						$run_get=mysqli_query($conn, $get_course);
		
						while($run_result=mysqli_fetch_array($run_get)){
						$course_id=$run_result['course_id'];
						$date=$run_result['date'];
						$fees=$run_result['fees'];
						$student_id=$run_result['student_id'];
						$s_c_id=$run_result['st_course_id'];
						$i++;
						

						$get_cName="select * from courses where c_id='$course_id'";
						$run_getCName=mysqli_query($conn,$get_cName);

						while($run_result_cname=mysqli_fetch_array($run_getCName)){
						$cName=$run_result_cname['c_name'];
						}		
						?>
	
						<tr align="center">
						<td><?php echo $i ?></td>
						<td><?php echo $cName ?></td>
						<td><?php echo $date ?></td>
						<td><?php echo $fees ?></td>
						</tr>
	
						<?php } ?>
						</table>	
					</div>
				</div>
			</div>
		</div>				
</form>
</div>
</div>

	<?php } ?>