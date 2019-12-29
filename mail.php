<?php
 
$fname 		= $_POST['fname'];
$email 		= $_POST['email'];
$subject 	= $_POST['subject'];
$msg 		= $_POST['msg'];

$email_from = 'satimudesigns';

$email_subject = "New Form Submission";

$email_body = "User Name: $fname.\n",
                "User Email: $email.\n",
                 "User Message: $msg.\n";

$to 		= 'brandonngandu@gmail.com';

$headers	= "From: $fname \r\n";

$headers    = "Reply To: $email \r\n";

mail($to,$subject,$email_body,$headers);

header("Location: contact.html")