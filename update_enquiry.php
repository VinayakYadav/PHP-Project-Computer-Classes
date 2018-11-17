<?php
	//session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{   
		
?>


<?php
	include("includes/db.php");
 	error_reporting(0);
	$query="select * from enquiry_form where id=".$_GET['update_enquiry'];
	$data = mysqli_query($conn, $query);
	while ($result = mysqli_fetch_array($data)) {
			$status=$result['status'];
			
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
			<h2 class="title1">Update Enquiry</h2>
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-body">
				<!-- <div class="form-group"> 
					<label for="exampleInputEmail1">S N:</label> 
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="serial number" name="serial_number" value = "<?php echo $_GET['sn'];  ?>" required=''/> 
				</div>	 -->
				<div class="form-group"> 
					<label for="exampleInputEmail1">Status:</label> 
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Status update here...." name="status" value = "<?php echo $status;  ?>" required='' />
				</div>
				
				
					<input type="submit" name="submit" value="Update Status" />


					<?php
		
	if ($_POST['submit']) 
	{
		$status = $_POST['status'];
		
		$query = "UPDATE enquiry_form SET status='$status' where id=".$_GET['update_enquiry']; 
		$data = mysqli_query($conn, $query);

		if ($data) {

					echo "<font color='green'>Record updated successfully.<a href='action.php?enquiry_details'>Check Updated List Here</a>";
			}	else
			{
				echo "<font color='red'>Record not updated.<a href='action.php?enquiry_details'>Check Updated List Here</a>";
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

	
