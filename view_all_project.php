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
<h2 class="title1">View all Your Projects Here</h2>
<div class="grids widget-shadow">
	<table class="table table-bordered table-striped no-margin grd_tble">
		<tr align="center">
		</tr>
		<tr align="center" bgcolor="#f9f9f9">
		<th>S N.</th>
		<th>Project Title</th>
		<th>Project Description</th>
		<th>Project Screen</th>
		</tr>
		<?php
		$i=0;
		include("includes/db.php");
		$get_project="select * from students_project where student_email='".$_SESSION['student_email']."'";
		$run_get=mysqli_query($conn, $get_project);

		while($run_result=mysqli_fetch_array($run_get)){
		$project_id=$run_result['project_id'];
		$project_title=$run_result['project_title'];
		$project_description=$run_result['project_description'];
		$project_screen=$run_result['project_screen'];
		$i++;

		?>
		<tr align="center">
		<td><?php echo $i ?></td>
		<td><?php echo $project_title ?></td>
		<td><?php echo $project_description ?></td>
		<td><img src="project_screens/<?php echo $project_screen ?>" width="60px" height="60px"/></td>
		<!-- <td><a href="index.php?edit_enquiry=<?php echo $enq_id ?>">Edit</a></td>
		<td><a href="index.php?update_enquiry_to_admission=<?php echo $enq_id ?>">Transfer</a></td> -->
		</tr>

		<?php } ?>
	</table>
</div>
</div>
</div>				
</form>
</div>
</div>


<!-- session_start(); -->
<?php } ?>