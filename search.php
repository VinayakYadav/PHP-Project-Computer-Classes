

	<div class="form-group">
		<div style="float: left; width: 300px"> 
		<input type="text" class="form-control" placeholder="Search" name="Search">
	</div>
	
	<div style="float: left; width: 60px"> 
	<button class="btn btn-default" name="SearchButton">Go</button>
</div>
<?php

if(isset($_GET["SearchButton"])){
							$Search = $_GET["Search"];
							$ViewQuery = "SELECT * FROM enquiry_form WHERE full_name LIKE '%$Search%' OR user_email LIKE '%$Search%' OR mobile_no LIKE '%$Search%' OR address LIKE '%$Search%' OR branch LIKE '%$Search%'";
						}


?>
</div>