<?php 

		$name = $_POST['name'];
		$visitor_email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$email_from = 'k.developer.x@gmail.com';

		$email_subject = 'New Form Query!';

		$email_body = "Visitor Name : $name.\n".
						"Visitor Email : $visitor_email.\n".
							"Visitor Message : $message.\n";


	 $to ="nssidd0@gmail.com";

	 $headers = "Form : $email_from \r\n";
	 $headers .= "Reply-To : $visitor_email \r\n";

	$run = mail($to,$email_subject,$subject,$email_body,$headers);

    if($run)
	 	echo "<script>alert('Form Submitted!');location.href='index.html';</script>";
	 



 ?>
