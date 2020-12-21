<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subjest'];
$message = $_REQUEST['message'];

//check input fields
if (empty($name) || empty($email) || empty($subject) || empty($message))
{
	echo "Please fill all the fields";
}
else
{
	mail("nssidd0@gmail.com", "Web MSG", $message , "From: $name <$email>");
	echo "<script type='text/javascript'>alert('your message sent successfully');
	window.history.log(-1);
	</script>";
}
?>
