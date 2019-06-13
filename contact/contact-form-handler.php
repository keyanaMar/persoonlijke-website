<?php
	$name= $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];


	$email_from = 'keyana.marica@student.rocva.nl';

	$email_subject = 'New Form Submission';

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n";




	$tp = "Keyana.marica@student.rocva.nl";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");
