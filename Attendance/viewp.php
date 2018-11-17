
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

			<a  style="float: left; width: 100px" href="index.php" class="btn btn-primary">Back</a>
			<a  style="float: right; width: 100px" href="add.php" class="btn btn-primary pull-right">Add</a>

			<form method="post">
			<table class="table">
				
				<thead>
					
					<tr>
						<th>Sr No.</th>
						<th>Name</th>
						<th>Father Name</th>
						<th>Email</th>
						<th>Attendance</th>
						
					</tr>
				</thead>



							<?php

						if($_GET['date']){
							$date = $_GET['date'];	

							$query = "SELECT std_attend.*,attendance.*
									  FROM attendance
									  inner join std_attend on attendance.std_id = std_attend.std_id and attendance.date ='$date'";
							$result = $link->query($query);

							if ($result->num_rows>0) {
								$i=0;
								while ($val = $result->fetch_assoc()) {
									$i++;
								
							


							?>

				<tr>
					
					<td><?php echo $i; ?></td>
					<td><?php  echo $val['std_name'];  ?></td>
					<td><?php  echo $val['fname'];  ?></td>
					<td><?php  echo $val['email'];  ?></td>
					<td>
						
						Prsent <input type="radio" 
							value="Prsent" 
							<?php

								if ($val['value']=='Present') 
									echo "checked";
								

							?>

							>

						Absent <input type="radio" 
							value="Absent" 
							<?php

								if ($val['value']=='Absent') 
									echo "checked";
								

							?>

							>


					</td>
					

					

				</tr>

				<?php  }} }?>

		
		</div>

		<div class="panel-footer">
			
		</div>
		
	</div>

</body>
</html>