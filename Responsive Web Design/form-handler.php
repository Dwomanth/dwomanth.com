<?php
$name = $_POST['name'];
$Visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'dwomohanthony23@gmail.com';

$email_subject = 'New Form Submission';

$emil_body  = "User Name: $name. \n".
                "User Email: $Visitor_email. \n".
                "Subject: $subject. \n".
                "User Message: $message. \n";

$to = 'dwomohanthony8@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$emil_body,$headers);
                

header("Location: contact.html");

?>