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
				<h2 class="title1">View Your Fee Details Here</h2>
				<div class="grids widget-shadow">
					<table class="table table-bordered table-striped no-margin grd_tble">
					<tr align="center"></tr>
						<table class="table table-bordered table-striped no-margin grd_tble">
						<tr align="center" bgcolor="skyblue">
						<th>S N.</th>
						<th>Course Name</th>
						<th>Date</th>
						<th>Amount</th>
						<th>Type</th>
						</tr>
	
						<?php
						$i=0;
						include("includes/db.php");
						$get_course="select * from student_fee_details where student_id=(select student_id from student_signup where user_email='".$_SESSION['student_email']."')";
						$run_get=mysqli_query($conn, $get_course);
				
						while($run_result=mysqli_fetch_array($run_get)){
						$s_fee_id=$run_result['s_fee_id'];
						$student_id=$run_result['student_id'];
						$course_id=$run_result['course_id'];
						$date=$run_result['date'];
						$amount=$run_result['amount'];
						$pay_type=$run_result['pay_type'];
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
						<td><?php echo $amount ?></td>
						<td><?php echo $pay_type ?></td>
						</tr>
	
						<?php } ?>
						</table>
			</div>
		</div>

</form>
</div>
</div>
	<?php } ?>