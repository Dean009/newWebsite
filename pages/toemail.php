<?php
if(isset($_POST['submit'])){
	echo "Submit the form!";	
}

//Var setting

$fname = $_POST['firstName'];
$sname = $_POST['surname'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email = $_POST['email'];

$email_to = 'deanmoore009@gmail.com';


//Validation

if(empty($fname)||empty($sname)||empty($country)||empty($subject)||empty($message)||empty($email)){
	echo "Please fill in all fields";
	exit;
}

mail($to, $subject, $message);

?>
