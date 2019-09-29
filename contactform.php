<?php
    $name = $_POST['text'];
    $email = $_POST['email'];
    $phone = $_POST['tel']
    $message = $_POST['message'];
    $from = 'From: MPACharlotte'; 
    $to = 'eli@thenerodev.com'; 
    $subject = 'Contacting MPACharlotte';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Telephone: $phone\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>