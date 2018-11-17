<?php
	//session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{   
		
?>


<?php
	include("includes/db.php");
 	error_reporting(0);
	$query="select * from view_all_notes_db where s_n=".$_GET['update'];
	$data = mysqli_query($conn, $query);
	while ($result = mysqli_fetch_array($data)) {
			$subName=$result['subject_name'];
			$modName=$result['module_name'];
			$subNotes=$result['notes'];
		}
		?>
<html>
<head>
</head>
<body>

<div class="row">
	<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
			<!-- main content start-->
		<div id="page-wrapper">
		<div class="main-page">
		<div class="form">
			<h2 class="title1">Update Notes</h2>
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-body">
				<!-- <div class="form-group"> 
					<label for="exampleInputEmail1">S N:</label> 
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="serial number" name="serial_number" value = "<?php echo $_GET['sn'];  ?>" required=''/> 
				</div>	 -->
				<div class="form-group"> 
					<label for="exampleInputEmail1">Subject Name:</label> 
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subject Name..." name="subject_name" value = "<?php echo $subName;  ?>" required='' />
				</div>
				<div class="form-group"> 
					<label for="exampleInputPassword1">Module Name & No:</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Module Name & Number....." name="module_name" value = "<?php echo $modName;  ?>"  required='' />
				</div>
				<div class="form-group"> 
					<label for="exampleInputEmail1">Upload New Notes</label> 
					<input type="file" name="uploadfile" class="form-control" id="exampleInputEmail1">
					<label for="exampleInputEmail1"><?php echo $subNotes;  ?></label> 
				</div>
					<input type="submit" name="submit" value="Update" />


<?php
		
	if ($_POST['submit']) 
	{
		$subject = $_POST['subject_name'];
		$module = $_POST['module_name'];
		$filename = $_FILES['uploadfile']['name'];
		$tempname = $_FILES['uploadfile']['tmp_name'];
		$folder = "download/".$filename;
		$file1 = explode(".",$filename);
	 	$ext = $file1[1];
	 	$allowed = array("jpg","png","gif","pdf","zip","doc");
	 	if(in_array($ext,$allowed))
	 		{

		move_uploaded_file($tempname, $folder);

		$query = "UPDATE view_all_notes_db SET module_name='$module', notes='$filename',subject_name='$subject' where s_n=".$_GET['update']; 
		$data = mysqli_query($conn, $query);

		if ($data) {

					echo "<script>alert('Record Updated')</script>";
					// echo "<font color='green'>Record updated successfully.<a href='action.php?view_all_notes'>Check Updated List Here</a>";

				?>
				   <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/student/action.php?view_all_notes">
				<?php
			}	else
			{
				echo "<font color='red'>Record not updated.<a href='action.php?view_all_notes'>Check Updated List Here</a>";
			}
	}
	else
	{
echo "<font color='blue'>Click on Update Button to save the changes";

	}
}

?>
	

			</div>
			</div>
		</div>		
		</div>
		</div>				
	</form>
</div>


</body>
</html>

<?php } ?>

	
