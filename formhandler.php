<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];
$subject=$_POST['subject'];

$email_from='info@University.com';
$email_subject='new form submission';
$email_body="user name:$name.\n".
            "user email:$visitor_email.\n".
            "subject:$subject.\n".
            "user message:$message.\n";

            $to ='prashanthatt@yahoo.com';
            $headers=" From: $email_from\r\n";
            $headers .="Reply-To:$visitor_email \r\n";

            mail($to,$email_subject,$email_body,$headers);
            header("Location:contact.html");
?>