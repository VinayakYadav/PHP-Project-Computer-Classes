/*if ($_GET['submit'])
	{
		$serno = $_GET['serial_number'];
		$subject = $_GET['subject_name'];
		$module = $_GET['module_name'];
		$file = $_GET['uploadfile'];

       $query = "UPDATE view_all_notes_db SET subject_name='$subject', module_name='$module', notes='$file' WHERE s_n='$serno'"; 
       $data = mysqli_query($conn, $query);
       if ($data) {
       	    echo "Record updated sussesfully";
       }
       else
       {
       	echo "Record not updated";
       }

	}
	else
	{
		echo "Click on update button to save the changes";

	}

?>
