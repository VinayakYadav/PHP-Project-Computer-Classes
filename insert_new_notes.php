<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
	//session_start();

  include("includes/db.php");
  error_reporting(0);
?>
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
		<div class="form">
			<h2 class="title1">Insert New Notes</h2>
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-body">
				<!-- <div class="form-group"> 
					<label for="exampleInputEmail1">S N:</label> 
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="serial number" name="serial_number" required=''/> 
				</div>	
 -->				<div class="form-group"> 
					<label for="exampleInputEmail1">Subject Name:</label> 
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subject Name..." name="subject_name" required='' />
				</div>
				<div class="form-group"> 
					<label for="exampleInputPassword1">Module Name & No:</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Module Name & Number....." name="module_name" required='' />
				</div>
				<div class="form-group"> 
					<label for="exampleInputEmail1">Upload New Notes</label> 
					<input type="file" name="uploadfile" class="form-control" id="exampleInputEmail1" required=''>
				</div>
					<input type="submit" name="submit" value="Submit" />


			</div>
			</div>
		</div>		
		</div>
		</div>				
	</form>
</div>



<?php

	if ($_POST['submit'])
	 {
    		$subn = $_POST['subject_name'];
  		    $mn = $_POST['module_name']; 
  		    $filename = $_FILES["uploadfile"]["name"];
			$tempname = $_FILES["uploadfile"]["tmp_name"];
			$folder = "download/".$filename;
			$file1 = explode(".",$filename);
	 		$ext = $file1[1];
	 		$allowed = array("jpg","png","gif","pdf","zip","doc");
	 		if(in_array($ext,$allowed))
	 		{

			move_uploaded_file($tempname,$folder);


		if ($subn!="" && $mn!="" && $filename!="")
		 {
 			
				$query = "INSERT INTO view_all_notes_db(subject_name,module_name,notes) VALUES ('$subn','$mn','$filename')";
				$data = mysqli_query($conn, $query);

			if ($data) {
		 
						 echo "DATA INSERTED INTO DATABASE";
						}


				} 	else{

			echo "All fields are required";
		}
		# code...
	}
}

?>


</body>
</html>

	<?php } ?>
