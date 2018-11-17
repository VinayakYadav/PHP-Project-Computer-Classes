
<?php  include_once("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<script src="bootstrap/bootstrap.min.js"></script>
	<script src="bootstrap/jquery.min.js"></script>

  


</head>
<body>

	<div class="panel panel-default container">

		<div class="panel-heading">

			<h1 style="text-align: center;">Attendance Management System</h1>
			
		</div>

		<div class="panel-body">

			<a  style="float: left; width: 100px" href="view.php" class="btn btn-primary">View</a>
			<a  style="float: right; width: 100px" href="add.php" class="btn btn-primary pull-right">Add</a>

			<form method="post">
			<table class="table">
				
				<thead>
					
					<tr>
						<th>Name</th>
						<th>Father Name</th>
						<th>Email</th>
						<th>Attendance</th>
					</tr>
				</thead>

				<tbody>
					
					<?php

						$query = "select * from std_attend";
						$result = $link->query($query);
						while ($show = $result->fetch_assoc()) {
							


					?>
					<tr>
						<td><?php echo $show['std_name'];   ?></td>
						<td><?php echo $show['fname'];   ?></td>
						<td><?php echo $show['email'];   ?></td>
						<td>
							Present<input required type="radio" name="attendance[<?php echo $show['std_id'];  ?>]" value="Present">Absent<input required type="radio" name="attendance[<?php echo $show['std_id'];  ?>]" value="Absent">
						</td>
					</tr>

					<?php  } ?>


				</tbody>
				


				<?php
						if ($_SERVER['REQUEST_METHOD']=='POST') {
							$date=date('d-m-y');
							$att = $_POST['attendance'];
							$query = "select distinct date from attendance";
							$result = $link->query($query);
							$b = false;
							if($result->num_rows>0){
								while ($check = $result->fetch_assoc()) {
									
									if ($date ==$check['date']) {
										$b = true;
										echo "<div class='alert alert-danger'>

										Attendance already taken today!!!;

										</div>"	;
									}
								}
							}

								if(!$b){
										foreach ($att as $key => $value) {
											
											if ($value =="Present") {
												
												$query = "insert into attendance(value,std_id,date) value('Present',$key,'$date')";
												$insertResult =$link->query($query);
											}else{

												$query = "insert into attendance(value,std_id,date) value('Absent',$key,'$date')";
												$insertResult =$link->query($query);
											}
										}

										if ($insertResult) {
											echo "<div class='alert alert-success'>

										Attendance taken successfully!!!;

										</div>"	;
										}
								}
							}
						





				?>


			</table>
				<input class="btn btn-primary" type="submit" value="Take Attendance">
            </form>
		</div>

		<div class="panel-footer">
			
		</div>
		
	</div>

</body>
</html>