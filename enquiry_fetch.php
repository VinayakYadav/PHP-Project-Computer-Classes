<?php
include("includes/db.php");
$output='';
$sql = "SELECT * FROM enquiry_form WHERE full_name LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) 
{
	$output .= '<h4 align="center">Search Result</h4>';
	$output .= '<div class ="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>S N</th>
							<th>Name of Student</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Branch</th>
							<th>Adress of Student</th>
							<th>Photos</th>
							<th>Status</th>
						</tr>';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .= '<tr>
										<td>'.$row['id'].'</td>
										<td>'.$row['full_name'].'</td>
										<td>'.$row['user_email'].'</td>
										<td>'.$row['mobile_no'].'</td>
										<td>'.$row['branch'].'</td>
										<td>'.$row['address'].'</td>
										<td>'.$row['st_photo'].'</td>
										
										<td>'.$row['status'].'</td>
										
									</tr>';
	}
	echo $output;
	
}
else
{
	echo 'Data Not Found';
}

?>