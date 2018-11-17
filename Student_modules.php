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

				<?php
					$i=0;
					include("includes/db.php");
					$get_profile="select * from profile_edit where student_email='".$_SESSION['student_email']."'";
					$run_get=mysqli_query($conn, $get_profile);
					?>


				<h2 class="title1">Your Notes:<?php echo $pe_name ?>&nbsp;<?php echo $pe_last_name ?></h2>
				<div class="grids widget-shadow">
					<table class="table table-bordered table-striped no-margin grd_tble">
					<tr align="center">
					</tr>
											<!-- PHP Code Start Here -->
						<?php

						include("includes/db.php");
						$query = "select * from view_all_notes_db
									where s_n in(select s_n from student_notes
									where sid in(select id from student_signup where user_email='".$_SESSION['student_email']."'))";
						
						// $query = "select * from view_all_notes_db 
						// 			where s_n in(select s_n from checkbox 
						// 		    where e_id in(select id from student_signup where user_email='".$_SESSION['student_email']."'))";
						$data = mysqli_query($conn, $query);
						$total = mysqli_num_rows($data);

						if($total != 0)
						{

							?> <!-- PHP Code End Here -->

							<table class="table table-bordered table-striped no-margin grd_tble">

						<tr align="center" bgcolor="skyblue">
						<th><center>S N</center></th>
						<th><center>Subject Name</center></th>
						<th><center>View Notes</center></th>
						<!-- <th><center>Download</center></th> -->
					
						</tr>

          <!-- PHP Code Start Here -->
							<?php

							while ($result = mysqli_fetch_array($data)) {

							echo "<tr>
										<td>".$result['s_n']."</td>
										<td>".$result['subject_name']."</td>
										<td><a href=download/".$result['notes'].">".$result['notes']."</a></td>
								
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
