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
				<h2 class="title1">View Note Details Here</h2>
				<div class="grids widget-shadow">
					<table class="table table-bordered table-striped no-margin grd_tble">
					<tr align="center">
					</tr>
											<!-- PHP Code Start Here -->
						<?php

						include("includes/db.php");
						$query = "Select * from view_all_notes_db";
						$data = mysqli_query($conn, $query);
						$total = mysqli_num_rows($data);

						if($total != 0)
						{

							?> <!-- PHP Code End Here -->

							<table class="table table-bordered table-striped no-margin grd_tble">

						<tr align="center" bgcolor="skyblue">
						<th><center>S N</center></th>
						<th><center>Subject Name</center></th>
						<th><center>Module Name & Number</center></th>
						<th><center>View Notes</center></th>
						<!-- <th><center>Download</center></th> -->
						<th colspan="2"><center>Operation</center></th>
						</tr>

          <!-- PHP Code Start Here -->
							<?php

							while ($result = mysqli_fetch_array($data)) {

							echo "<tr>
										<td>".$result['s_n']."</td>
										<td>".$result['subject_name']."</td>
										<td>".$result['module_name']."</td>
										<td><a href=download/".$result['notes'].">".$result['notes']."</a></td>
										<td><a href=action.php?update=".$result['s_n'].">Edit</a></td>
										<td><a href=action.php?delete=".$result['s_n']." onclick='return checkdelete()'>Delete<a/></td>
									</tr>";			

							?>




		
							<?php
										
							}
						}
						else
						{
							echo "No Records Found";
						}

						?>
						<!-- PHP Code End Here -->
						</table>
					</table>

					<script>

function checkdelete()
{
	return confirm('Are you sure you want to delete this data ?');
}
</script>
				</div>
			</div>
		</div>				
</form>
</div>
</div>

	<?php } ?>
