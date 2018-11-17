
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

			  <form class="form-horizontal" method="post" id="getAttendanceForm">
		  <div class="form-group">
		    <label for="type" class="col-sm-2 control-label">Select Type</label>
		    <div class="col-sm-10">
		      <select class="form-control" name="type" id="type">
		      	<option value="">Select</option>
		      	<option value="1">Student</option>
		      	<option value="2">Teacher</option>
		      </select>
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="sectionName" class="col-sm-2 control-label">Select Batch</label>
		    <div class="col-sm-10">
		      <select class="form-control" name="sectionName" id="sectionName">
		      	<option value="">Select</option>
		      	<option value="">Batch 1</option>
		      	<option value="">Batch 2</option>
		      	<option value="">Batch 3</option>	

		      </select>
		    </div>
		  </div>
		  		  
		</form>

		<!-- 	<div class="form-group">
		    <label for="sectionName" class="col-sm-2 control-label">Select Batch</label>
		    <div class="col-sm-10">
		      <select class="form-control" name="sectionName" id="sectionName">
		      	<option value="">Select</option>
		      	<option value="">Batch 1</option>
		      	<option value="">Batch 2</option>
		      	<option value="">Batch 3</option>	

		      </select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="date" class="col-sm-2 control-label">Date</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="date" name="date" placeholder="Date" autocomplete="on">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		  </div>';	 -->
			
				
							

		
		</div>

		<div class="panel-footer">
			
		</div>
		
	</div>

</body>
</html>