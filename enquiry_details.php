<?php
	//session_start();
	include("includes/db.php");
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<script src="jquery.js"></script>
	<script src="js/bootstrap.js"></script>


</head>

<div class="row">
<form action="" method="post">
			<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">Student Notes</h2>
<!-- Search Box -->

<!-- --------------------------------------------------------- -->
				<div class="grids widget-shadow">
					<table class="table table-bordered table-striped no-margin grd_tble">
					<tr align="center">

<!-- Currently working -->
					</tr>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">Search</span>
							<input type="text" name="search_text" id="search_text" placeholder="search enquiry" class="form-control" />

						</div>
					</div>
					<br />
					<div id="result"></div>



						<!-- PHP Code Start Here -->

						<?php

						$query = "Select * from enquiry_form";
						$data = mysqli_query($conn, $query);
						$total = mysqli_num_rows($data);

						if($total != 0)
						{

							?><!-- PHP Code End Here -->

						
						<table class="table table-bordered table-striped no-margin grd_tble">

						<tr align="center" bgcolor="skyblue">
						<th><center>S N</center></th>
						<th><center>Name of Student</center></th>
						<th><center>Email</center></th>
						<th><center>Contact</center></th>
						<th><center>Branch</center></th>
						<th><center>Adress of Student</center></th>
						<th><center>Photos</center></th>
						<th><center>Status</center></th>
						<th colspan="2"><center>Operation</center></th>
					
						</tr>
					

					         <!-- PHP Code Start Here -->
							<?php

							while ($result = mysqli_fetch_array($data)) {
									$photos=$result['st_photo'];
							echo "<tr>
										<td>".$result['e_id']."</td>
										<td>".$result['full_name']."</td>
										<td>".$result['user_email']."</td>
										<td>".$result['mobile_no']."</td>
										<td>".$result['branch']."</td>
										<td>".$result['address']."</td>
										<td><a href='$result[st_photo]'><img src='download/".$result['st_photo']."' height='100' width='100'/></a></td>";

										 if($result['status']==0){
										 	echo "<td>Unconfirmed</td>";
										 }else{
										 	echo "<td><a href=action.php?admin_data_allotted=".$result['e_id'].">Notes Allotted</a></td>";
										 }

										echo "<td><a href=action.php?update_enquiry=".$result['e_id'].">Update Status</a></td>
										
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



						</table>
					</table>

			
				</div>
			</div>
		</div>				
</form>
</div>
</div>

<script>
	
	$(document).ready(function(){
		$('#search_text').keyup(function(){
			var txt = $(this).val();
			if (txt != '') 
			{

			}
			else
			{
				$('#result').html('');
				$.ajax({
					url:"	.php",
					method:"post",
					data:{search:txt},
					dataType:"text",
					success:function(data)
					{
						$('#result').html(data);
					}
				});
			}

		});
	});


</script>








	<?php } ?>
