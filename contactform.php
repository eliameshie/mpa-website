<?php 
	
	if(isset($_POST['submit'])) {
		$name = $_POST['text'];
		$mailFrom = $_POST['email'];
		$tel = $_POST['tel'];
		$message = $_POST['message'];
		$subject = $_POST[''];


		$mailTo = "pop.mpacharlotte.org";
		$headers = "From: ".mailFrom;
		$txt = "You have received an e-mail from ".$name.".\n\n".$message;

		mail($mailTo, $subject, $txt, $headers);
		header("Location: index.php?mailsend");
	}

 ?>