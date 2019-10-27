<?php

// SETTING THE EMAIL PORTION 

if(isset($_POST['email'])) {
    $emailTo = "eli@thenerodev.com"; 
    $emailSubject = "Contacting MPA Charlotte";

// IF THERE'S AN ERROR WITH THE FORM; DISPLAYS ERROR

function formDie($error) {
    echo "Sorry, but you've ran into a problem when entering information for this form."
    echo "<br> </br";
    echo "Error Occurred: ".$error;
    die();
}

// VALIDATING THE FORM INFORMATION 
if(!isset($_POST['text']) || 
    !isset($_POST['email']) || 
    !isset($_POST['message'])) {
    formDie('Form does not have all the required materials to send to contact.');
}

// REQUIRED VARIABLES FOR THE FORM

$name = $_POST['text'];
$emailFrom = $_POST['email'];
$message = $_POST['message'];

$errorMessage = "";
$emailMessage = "Form details below. \n\n";
$emailExp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/'; // EXPECETED EMAIL VALUES 
$stringExp = "/^[A-Za-z .'-]+$/"; // EXPECTED STRING VALUES
 
// CHECKING IF EXPECTED VALUES ARE SET
if(!preg_match($emailExp, $emailFrom)) {
    $errorMessage .= 'The Email Address entered contains invalid strings. Please Try Again.';
}

if(!preg_match($stringExp, $name)) {
    $errorMessage .= 'The Name entered contains invalid strings. Please Try Again.';
}

if(strlen($message) < 2) {
    $errorMessage .= "The Message doesn't have enough characters to send.";
}

if(strlen($errorMessage) > 0 ) {
    formDie($errorMessage);
}
// CLEANS UP EMAIL IF THERE'S EXTRA SPACE OR BAD STRING TYPES
function cleanString($string) {
    $badString = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($badString, "",$string);
}

$emailMessage .= "Name: ".clean_string($name)."\n";
$emailMessage .= "Email: ".clean_string($emailFrom)."\n";

$emailMessage .= "Message: ".clean_string($message)."\n";

// CREATES THE EMAIL HEADERS
$headers = 'From: '.$emailFrom."\r\n".
'Reply-To: '.$emailFrom."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($emailTo, $emailSubject, $emailMessage, $headers);  
?>
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 

}
?>
