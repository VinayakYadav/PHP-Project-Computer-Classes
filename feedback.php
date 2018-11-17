<?php
	//session_start();

  include("includes/db.php");
?>
<?php
	//session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?> 
<div class="row">
		<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
		<div id="page-wrapper">
		<div class="main-page">
		<div class="form">
		<h2 class="title1">Student Feedback</h2>
		<h4 class="title1">Please help us improve our courses by filling out this from.</h4>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-body">
			<div class="form-group"> 
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Teature/Intructor first name" name="teature_first_name" required=''> 
			</div>
			<div class="form-group"> 
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Teature/Intructor last name" name="teature_last_name" required=''> 
			</div>
			<div class="form-group"> 
				<select class="form-control-dropdown" id="exampleInputPassword1" name="course" required=''>
				<option value='' selected='selected'>Select Course/Subject</option>
				<?php
					//global $con;
						$get_course='select * from courses';
						$run_course=mysqli_query($conn, $get_course);

						while($result_course=mysqli_fetch_array($run_course)){
						$c_id=$result_course['c_id'];
						$c_name=$result_course['c_name'];
						echo"<option value='$c_id'>$c_name</option>";
						}
					?>	
				</select>
			</div>
			<div class="form-group"> 
				<h5 class="title1">Why did you chose this couse?</h5>
				<select class="form-control-dropdown" name="select_courses" id="exampleInputPassword1" required=''>
				<option>Degree requirement</option>
				<option>Personal intrest</option>
				<option>Others.</option>					
				</select>
			</div>
			<div class="form-group"> 
				<h5 class="title1">Level of knowledge on start of couse</h5>
				<select class="form-control-dropdown" name="knowledge" id="exampleInputPassword1" required=''>
				<option>Very good</option>
				<option>Good</option>
				<option>Fair</option>
				<option>Poor</option>
				<option>Very poor</option>					
				</select>
			</div>
			<div class="form-group"> 
				<h5 class="title1">Level of effort invested in couse</h5>
				<select class="form-control-dropdown" name="effort" id="exampleInputPassword1" required=''>
				<option>Very good</option>
				<option>Good</option>
				<option>Fair</option>
				<option>Poor</option>
				<option>Very poor</option>					
				</select>
			</div>
			<div class="form-group"> 
				<h5 class="title1">Level of knowledge at the end of the couse</h5>
				<select class="form-control-dropdown" name="level_know" id="exampleInputPassword1" required=''>
				<option>Very good</option>
				<option>Good</option>
				<option>Fair</option>
				<option>Poor</option>
				<option>Very poor</option>					
				</select>
			</div>
			<div class="form-group"> 
				<h5 class="title1">Would you recommend this course to other students?</h5>
				<select class="form-control-dropdown" name="recommend" id="exampleInputPassword1" required=''>
				<option>Yes</option>
				<option>No</option>
				<option>Not sure</option>				
				</select>
			</div>
		 	<div class="form-group"> 
			<h5 class="title1">Any other comments</h5>
				<textarea class="form-control-dropdown" type="text" cols="10" rows="5" class="form-control-" id="exampleInputEmail1" placeholder="Feedback" name="comments" required=''></textarea>
			</div> 
			<button type="submit" name="feedback" value="Submit Form"  class="btn btn-default">Submit Form</button>
						
			</div>
		</div>
	</div>
	</div>
</div>
</form>
</div>
<?php } ?>

<?php 
	if(isset($_POST['feedback'])){
		//getting data from fields
		$teature_first_name=$_POST['teature_first_name'];
		$teature_last_name=$_POST['teature_last_name'];
		$course=$_POST['course'];
		$select_courses=$_POST['select_courses'];
		$knowledge=$_POST['knowledge'];
		$effort=$_POST['effort'];
		$level_know=$_POST['level_know'];
		$recommend=$_POST['recommend'];
		$comments=$_POST['comments'];
		
		$get_admin="insert into feedback(teature_first_name,teature_last_name,course,select_courses,knowledge,effort,level_know,recommend,comments) values('$teature_first_name','$teature_last_name','$course','$select_courses','$knowledge','$effort','$level_know','$recommend','$comments')";
		$run_query=mysqli_query($conn,$get_admin);
		
		if($run_query){
			echo "<script>alert('Thankyou for the valuable feedback.');</script>";
			echo "<script>window.open('index.php','_self');</script>";
		}else{
			echo "<script>alert('SQL Error: Your feedback is not created');</script>";
		}
	}
?>

