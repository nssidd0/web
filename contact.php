<?php

$to = nssidd0@gmail.com";
$subject = "GRAPHIC DESIGN";
$message = "i need in 20 days.";
$from = "janamk470@gmail.com";
$headers = "From: $from";

if(mail($to,$subject,$message,$headers)){
	echo "Mail Sent Successfully.";
}else{
	echo "Email Sent Failed.";
}

?>
