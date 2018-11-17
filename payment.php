
<?php
	//session_start();
	include("includes/db.php");
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?> 

<head>
	
	<script>
		function calc() 
		{
			var n1 = parseInt(document.getElementById('n1').value);
			var n2 = parseInt(document.getElementById('n2').value);
			var oper = document.getElementById('operators').value;

			

			if (oper === '=') 
			{
			   document.getElementById('result').value = n1=n2;
			}

			if (oper === '-') 
			{
				document.getElementById('result').value = n1-n2;
			}

			if (oper === '/') 
			{
				document.getElementById('result').value = n1-n2;
			}
		}


	</script>
</head>


<div class="row">
		<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
		<div id="page-wrapper">
		<div class="main-page">
		<div class="form">
		<center><h2 class="title1">Payment Management System</h2></center>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
		<div class="form-body">


			
			<div class="form-group"> 
			<label for="name"><strong>Name</strong></label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full Name" name="full_name" required=''> 
			</div>	
					
			<!-- <div class="form-group"> 
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
			</div>  -->
			<div class="form-group"> 
			<label for="name"><strong>Total Course Fees<strong></label>
			<input type="text" class="form-control" id="n1" placeholder="Enter Course Fee..." name="tpayment" required=''> 
			</div>
			<div class="form-group"> 
			<label for="name"><strong>Currently Fee<strong></label>
			<input type="text" class="form-control" id="n2" placeholder="Currently paid..." name="cur_pay" required=''> 
			</div>
			<div class="form-group"> 
				<label for="name"><strong>Payment Mode<strong></label>
				<select class="form-control-dropdown" id="operators" name="pay_mod" required=''>
				<option>Select</option>
				<option value="=">Full Payment</option>
				<option value="-">Half Payment</option>
				<option value="/">Installment</option>					
				</select>
			</div>

			<div class="form-group"> 
				<button onclick="calc();">Click to Check Pending Fees</button> 
			
			<input type="text" class="form-control" id="result" placeholder="Painding..." name="painding" />

			
			</div>

			<div class="form-group"> 
			<label for="name"><strong>Mobile</strong></label>
			<input type="text" class="form-control" placeholder="Ex 9*****0021" required="" type="tel" name="mobile_no" minlength="10" maxlength="10" required="" /> 
			</div>

			<!-- <div class="form-group"> 
			 <input type="file" class="form-control" name="uploadfile" placeholder="" required="">Upload Your Passport Size Photo</input> 
			</div> -->	
			<div style="float: right; width: 150px"> 
			<button type="submit" name="save_payment" value='0'  class="btn btn-default">Click to Pay</button>
		</div>

						
			</div>
		</div>
	</div>
	</div>
</div>
</form>
</div>



<?php } ?>
