<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subjectName = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'arnavgadade1404@gmail.com';
    $subject = $subjectName;
    $email_body = "User Name: $name.\n".
		           "User Email: $email.\n".
		            "Subject: $subject.\n".
		            "User Message: $message.\n";
    $to = $email;

    $headers = "From: $email_from\r\n";
    $headers = "Reply-To: $email\r\n";

    mail($to, $subject, $email_body, $headers);
    header("Location: contact.com");
?>