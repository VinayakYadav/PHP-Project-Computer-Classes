<?php
	//session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{   
		
?>

<div class="row">
	<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
			<!-- main content start-->
		<div id="page-wrapper">
		<div class="main-page">
		<h2 class="title1">Notes Allotment</h2>
				<div class="grids widget-shadow">
					<table class="table table-bordered table-striped no-margin grd_tble">
					<tr align="center">
					</tr>
					

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
						
						<th><center>Subject Name</center></th>
						<th><center>View Notes</center></th>
						<th><center>Mark Notes</center></th>

						

						<!-- <th><center>Download</center></th> -->
					
						</tr>


						 <!-- PHP Code Start Here -->
							<?php

							while ($result = mysqli_fetch_array($data)) {

							echo "<tr>
										
										<td>".$result['subject_name']."</td>
										<td><a href=download/".$result['notes'].">".$result['notes']."</a></td>
										<td><input name='notes[]' type='checkbox' value=".$result['s_n']."  /></td>

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

						<div style="float: right; width: 150px"> 
			<input type="submit" name="submit" value='Submit Values'  class="btn btn-primary">
		</div>


					</table>

				</div>	
		</div>
		</div>				
	</form>
</div>

<?php

if (isset($_POST["submit"])) {
	# code...}
$E_id = $_GET['admin_data_allotted'];
$Notesarray = $_POST['notes'];

	for($i=0;$i<=count($Notesarray)-1;$i++){
	 $query = "INSERT INTO `checkbox`(`e_id`, `s_n`) VALUES ('$E_id','$Notesarray[$i]') "; 

	 mysqli_query($conn,$query);
	

	} 
}

?>

<?php } ?>



	
