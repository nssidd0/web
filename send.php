<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'nssidd0@gmail.com';

	$email_subject = 'New Form Submission';

	$email_body = 'Name: $name.\n'.
					'Email: $visitor_email.\n'.
						'Subject: $subject.\n'.
							'Message: $message.\n';

	$to = 'example@gmail.com';

	$headers = 'From: $email_from \r\n';

	$headers .= 'Reply-to: $visitor_email \r\n';

	mail($to,$email_subject,$email_body,$headers);

	header('Location: index.html');

?>