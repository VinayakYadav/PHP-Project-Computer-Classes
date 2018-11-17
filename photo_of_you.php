<?php
	//session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?>

<div class="row">
		<div id="page-wrapper">
		<div class="main-page">
		<a href="action.php?profile"><h2 class="title1">Photo of You</h2></a>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-body">

			<div class="form-group">
					<h4 class="title1"></h4>
					<?php
					//global $con;
						$dir_path="images/";
						$extension_array=array('jpg','png','jpeg','gif');

						if (is_dir($dir_path)) 
						{
							# code...
							$files=scandir($dir_path);

							for ($i=0; $i < count($files); $i++) 
							{ 
								if ($files[$i] !='.' && $files[$i] !='..') 
								{
									// get files name...
									echo "File Name -> $files[$i]<br>";
									
									// get files extension...
									$file=pathinfo($files[$i]);
									$extension = $file['extension'];
									echo "File Extension -> $extension<br>";
									echo "<img_src='$dir_path$files[$i]' style='width:150px; height:150px;'>";
										
								}
							}
						}
					?>
					<h5>Your email account used across payments on Atech</h5></a>
		</div>
	</div>
	</div>
</div>
</div>


	<?php } ?>