<?php
if(!isset($_POST['submit'])){
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

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

//Validation

if(empty($fname)||empty($sname)||empty($country)||empty($subject)||empty($message)||empty($email)){
	echo "Please fill in all fields";
	exit;
}

mail($email_to, $subject, $message);
header('Location: thank-you.html');

function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>


