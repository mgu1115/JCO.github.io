<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'JoyCentricOrg@gmail.com';

    $email_subject = $_POST['subject'];

    $email_body = "Message from: $name.\n". 
        "Email: $visitor_email.\n".
        "Message: $message.\n";
    $to = "JoyCentricOrg@gmail.com"
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>