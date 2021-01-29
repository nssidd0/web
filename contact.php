<?php

$to = nssidd0@gmail.com";
$subject = "";
$message = "";
$from = "";
$headers = "From: $from";

if(mail($to,$subject,$message,$headers)){
	echo "Mail Sent Successfully.";
}else{
	echo "Email Sent Failed.";
}

?>