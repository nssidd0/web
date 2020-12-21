<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subjest'];
$message = $_REQUEST['message'];

//check input fields
if (empty($name) || empty($email) || empty($subject) || empty($message))
{
	echo ('Please fill all the fields');
}
else
{
	mail("nssidd0@gmail.com", "Email form", $message , "From: $name <$email>");
	echo "<script type='text/javascript'>alert('Message Sent Successfully!...');
	window.history.go(-1);
	</script>";
}
?>
