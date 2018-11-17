
<?php
	//session_start();
	include("includes/db.php");
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?> 
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

.column {
    float: left;
    height: 30%;
    width: 30%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
</style>
</head>
<body>

<div class="row">
		<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
		<div id="page-wrapper">
		<div class="main-page">
		<div class="form">
		<a  style="float: right; width: 100px" href="action.php?payment" class="btn btn-primary pull-right">Payment</a>
		<h2 class="title1">Enquiry Form For Another Courses</h2>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
		<div class="form-body">


			
			<div class="form-group"> 
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full Name" name="full_name" required=''> 
			</div>	
			<div class="form-group"> 
			<input type="email" class="form-control" name="user_email" placeholder="Enter Your Email" required=""/> 
			</div>	
			<div class="form-group"> 
			<input type="text" class="form-control" placeholder="Mobile No." required="" type="tel" name="mobile_no" minlength="10" maxlength="10" required="" /> 
			</div>
			<div class="form-group"> 
				<textarea class="form-control-dropdown" type="text" cols="8" rows="3" class="form-control-" id="exampleInputEmail1" placeholder="Address" name="address" required=''></textarea>
			</div>
			<div class="form-group"> 
				<select class="form-control-dropdown" id="exampleInputPassword1" name="branch" required=''>
				<option value='' selected='selected'>Select institute Location</option>
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
				<select class="form-control-dropdown" id="exampleInputPassword1" name="course" required=''>
				<option value='' selected='selected'>Select Intrested Course In</option>
				<?php
					//global $con;
						$get_course='select * from view_all_notes_db';
						$run_course=mysqli_query($conn, $get_course);

						while($result_course=mysqli_fetch_array($run_course)){
						$s_n=$result_course['s_n'];
						$subject_name=$result_course['subject_name'];
						echo"<option value='$s_n'>$subject_name</option>";
						}
					?>
				</select>
			</div> 
			<div class="form-group"> 
				<select class="form-control-dropdown" id="exampleInputPassword1" name="education" required=''>
				<option value='' selected='selected'>Highest Education Qualification</option>
				<option>Less than 8th</option>
				<option>8th class appeared</option>
				<option>10th class appeared</option>					
				<option>12th class appeared</option>					
				<option>Graduation appeared</option>					
				<option>Post Graduation appeared or Higher</option>					
				</select>
			</div>
			<div class="form-group"> 
				<select class="form-control-dropdown" id="exampleInputPassword1" name="title2" required=''>
				<option value='' selected='selected'>I want to join this course for</option>
				<option>Bussines</option>
				<option>Class</option>
				<option>Job</option>					
				</select>
			</div>

			<div class="form-group"> 
			 <input type="file" class="form-control" name="uploadfile" placeholder="" required="">Upload Your Passport Size Photo</input> 
			</div>	


			<div class="form-group"> 
				<textarea class="form-control-dropdown" type="text" cols="5" rows="2" class="form-control-" id="exampleInputEmail1" placeholder="Note..." name="note" required=''></textarea>
			</div>
			<div style="float: left; width: 150px"> 
			<button type="submit" name="enquiry_form" value='0'  class="btn btn-default">Save as Enquiry</button>
		</div>

		<div style="float: right; width: 150px"> 
			<button type="submit" name="admission_form" value='1'  class="btn btn-default">Save as Admission</button>
		</div>
						
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
<?php 
	if(isset($_POST['enquiry_form'])){
		//getting data from fields
	
		
		$full_name=$_POST['full_name'];
		$user_email=$_POST['user_email'];
		$mobile_no=$_POST['mobile_no'];
		$address=$_POST['address'];
		$branch=$_POST['branch'];
		$course=$_POST['course'];
		$education=$_POST['education'];
		$title2=$_POST['title2'];
		$note=$_POST['note'];

		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "download/".$filename;
		$file1 = explode(".",$filename);
	 	$ext = $file1[1];
	 	$allowed = array("jpg","png");
	 		if(in_array($ext,$allowed))
	 		{

			move_uploaded_file($tempname,$folder);

		
		$get_admin="insert into enquiry_form(full_name,user_email,mobile_no,address,branch,course,education,title2,st_photo,note) values('$full_name','$user_email','$mobile_no','$address','$branch','$course','$education','$title2','$filename','$note')";
		$run_query=mysqli_query($conn,$get_admin);
		
		if($run_query){
			echo "<script>alert('Your enquiry has been submited.');</script>";
			echo "<script>window.open('index.php','_self');</script>";
		}else{
			echo "<script>alert('SQL Error: Your enquiry is not created');</script>";
		}
	}
}else if(isset($_POST['admission_form'])){

		$full_name=$_POST['full_name'];
		$user_email=$_POST['user_email'];
		$mobile_no=$_POST['mobile_no'];
		$address=$_POST['address'];
		$branch=$_POST['branch'];
		$course=$_POST['course'];
		$education=$_POST['education'];
		$title2=$_POST['title2'];
		$note=$_POST['note'];

		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "download/".$filename;
		$file1 = explode(".",$filename);
	 	$ext = $file1[1];
	 	$allowed = array("jpg","png");
	 		if(in_array($ext,$allowed))
	 		{

			move_uploaded_file($tempname,$folder);
		
		$get_admin="insert into enquiry_form(full_name,user_email,mobile_no,address,branch,course,education,title2,st_photo,note,status) values('$full_name','$user_email','$mobile_no','$address','$branch','$course','$education','$title2','$filename','$note',1)";
		$run_query=mysqli_query($conn,$get_admin);
		
		if($run_query){
			echo "<script>alert('Your enquiry has been submited.');</script>";
			echo "<script>window.open('index.php','_self');</script>";
		}else{
			echo "<script>alert('SQL Error: Your enquiry is not created');</script>";
		}
	}
}
?>

