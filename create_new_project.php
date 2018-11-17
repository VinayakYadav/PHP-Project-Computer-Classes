<?php
	//session_start();
	include("includes/db.php");
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?>


<div class="row">
		<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
		<div id="page-wrapper">
		<div class="main-page">
		<div class="form">
		<h2 class="title1">Create New Project</h2>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
		<div class="form-body">
			<div class="form-group"> 
			<label for="exampleInputEmail1">Project Title:</label> 
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Project Title Name" name="project_title" required=''> 
			</div>	
			<div class="form-group"> 
			<label for="exampleInputEmail1">Project Description</label> 
			<textarea type="text" cols="20" rows="10" class="form-control" id="exampleInputEmail1" placeholder="Project Title Description" name="project_description" required=''></textarea>
			</div>
			<div class="form-group"> 
				<label for="exampleInputPassword1">Project Category:</label>
				<select class="form-control dropdown" id="exampleInputPassword1" name="project_category" required=''>
				<option value='' selected='selected'>Category:</option>
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
					<label for="exampleInputPassword1">Branch</label>
					<select class="form-control dropdown" id="exampleInputPassword1" name="branch" required=''>
					<option value='' selected='selected'>Select Branch</option>
					<?php
					//global $con;
						$get_branch='select * from branches';
						$run_branch=mysqli_query($conn, $get_branch);

						while($result_branch=mysqli_fetch_array($run_branch)){
						$bid=$result_branch['bid'];
						$bname=$result_branch['bname'];
						echo"<option value='$bid'>$bname</option>";
						}
					?>
				</select>
			</div>
			<div class="form-group"> 
				<label for="exampleInputEmail1">Upload Project Screen:</label> 
				<input type="file" name="project_screen" class="form-control" id="exampleInputEmail1" required=''>
				<h6>Please include as a .jpg</h6>
			</div>
			<button type="submit" name="insert_project" value="Create Project Now"  class="btn btn-default">Create Project Now</button>
						
			</div>
		</div>
	</div>
	</div>
</div>
</form>
</div>

<?php 

	if(isset($_POST['insert_project'])){
		//getting data from fields
		$student_email=$_SESSION['student_email'];
		$project_title=$_POST['project_title'];
		$project_description=$_POST['project_description'];
		$project_category=$_POST['project_category'];
		$branch=$_POST['branch'];
		
		//getting data from file
		$project_screen=$_FILES['project_screen']['name'];
		$project_temp_name=$_FILES['project_screen']['tmp_name'];

		
		move_uploaded_file($project_temp_name,"project_screens/$project_screen");
		
		$query= "insert into students_project(project_title,project_description,project_category,branch,project_screen,student_email) values('$project_title','$project_description','$project_category','$branch','$project_screen','$student_email')";
		
		$run_query=mysqli_query($conn,$query);
		
		if($run_query){
			echo "<script>alert('Project Created');</script>";
			echo "<script>window.open('action.php?view_all_project','_self');</script>";
		}else{
			echo "<script>alert('SQL Error: Project not Created');</script>";
		}
	}
?>
		

	<?php } ?>