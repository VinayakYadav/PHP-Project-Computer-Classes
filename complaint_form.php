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
		<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
		<div id="page-wrapper">
		<div class="main-page">
		<div class="form">
		<h2 class="title1">Student Complaint Form</h2>
		<h4 class="title1">Personal Information</h4>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="row">
			<div class="form-body">
			<div class="form-group"> 
			<h5 class="title1">Your Full Legal Name(As Enrolled)</h5>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="first name" name="enrolled_first_name" required=''> 
			</div>
			<div class="form-group"> 
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="last name" name="enrolled_last_name" required=''> 
			</div>
			<div class="form-group"> 
			<h5 class="title1">Major</h5>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="major" required=''> 
			</div>
			<div class="form-group"> 
			<h5 class="title1">expected Year/Month of completion</h5>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="expected_time" required=''> 
			</div>
			<div class="form-group"> 
			<input type="email" class="form-control" name="user_email" placeholder="Enter Your Email" required=""/> 
			</div>	
			<div class="form-group"> 
			<input type="text" class="form-control" placeholder="Mobile No." required="" type="tel" name="contact" minlength="10" maxlength="10" required="" /> 
			</div>
			<div class="form-group"> 
				<textarea class="form-control-dropdown" type="text" cols="8" rows="3" class="form-control-" id="exampleInputEmail1" placeholder="Address" name="address" required=''></textarea>
			</div>
			<div class="form-group"> 
				<h5 class="title1">Information about your complaint </h5>
			</div>
			<div class="form-group"> 
				<h5 class="title1">Select Complaint topic</h5>
				<select class="form-control-dropdown" name="complaint_about" id="exampleInputPassword1" required=''>
				<option>Teacher</option>
				<option>Student</option>
				<option>Others.</option>					
				</select>
			</div>
			<div class="form-group"> 
				<h5 class="title1">First date on which the events or issue occurred</h5>
				<input class="form-control-dropdown" name="event_occurre" type="date" required=""/>
			</div>

			<div class="form-group"> 
				<h5 class="title1">Name(s) of the person(s) involved</h5>
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="person_name" required=''>
				</select>
			</div>
			<div class="form-group"> 
				<h5 class="title1">please describe your complaint in details. Include the name of person, location and dates involved. If this complaint is against specific person(s), please list the names and titles. </h5>
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="complaint_details" required=''>
				</select>
			</div>
			<div class="form-group"> 
				<h5 class="title1">What attempts haver you made to resolve this complaint up to now? Please state who you contacted and what traspired.</h5>
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="attemps_resolve" required=''>
				</select>
			</div>
			<div class="form-group"> 
				<h5 class="title1">Why do you think the complaint was not able to be resolve in your prior attemps?</h5>
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="complaint_answers" required=''>
				</select>
			</div>
			<div class="form-group"> 
				<h5 class="title1">Any other information you want to provide?</h5>
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="information_details" required=''>
				</select>
			</div>
			<div class="form-group"> 
				<h5 class="title1">File Upload</h5>
				<h6 class="title1">If attachments are necessary, Please include as a .jpg or .pdf</h6>
				<input type="file" name="file_or_pdf" class="form-control" id="exampleInputEmail1" required=''>
				</select>
			</div>
			<button type="submit" name="complaint_form" value="Submit Form"  class="btn btn-default">Submit Form</button>
						
			</div>
		</div>
	</div>
	</div>
</div>
</form>
</div>
<?php } ?> 

<?php 
	if(isset($_POST['complaint_form'])){
		//getting data from fields
		$enrolled_first_name=$_POST['enrolled_first_name'];
		$enrolled_last_name=$_POST['enrolled_last_name'];
		$major=$_POST['major'];
		$expected_time=$_POST['expected_time'];
		$user_email=$_POST['user_email'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		$complaint_about=$_POST['complaint_about'];
		$event_occurre=$_POST['event_occurre'];
		$person_name=$_POST['person_name'];
		$complaint_details=$_POST['complaint_details'];
		$attemps_resolve=$_POST['attemps_resolve'];
		$complaint_answers=$_POST['complaint_answers'];
		$information_details=$_POST['information_details'];
		
		
		//getting data from file
		$file_or_pdf=$_FILES['file_or_pdf']['name'];
		$img_temp_name=$_FILES['file_or_pdf']['tmp_name'];
		
		move_uploaded_file($img_temp_name,"images/$file_or_pdf");
		
		$get_admin="insert into complaint_form(enrolled_first_name,enrolled_last_name,major,expected_time,user_email,contact,address,complaint_about,event_occurre,person_name,complaint_details,attemps_resolve,complaint_answers,information_details,file_or_pdf) values('$enrolled_first_name','$enrolled_last_name','$major','$expected_time','$user_email','$contact','$address','$complaint_about','$event_occurre','$person_name','$complaint_details','$attemps_resolve','$complaint_answers','$information_details','$file_or_pdf')";
		$run_query=mysqli_query($conn,$get_admin);
		
		if($run_query){
			echo "<script>alert('Your complaint has been submited.');</script>";
			echo "<script>window.open('index.php','_self');</script>";
		}else{
			echo "<script>alert('SQL Error: Your complaint is not created');</script>";
		}
	}
?>
