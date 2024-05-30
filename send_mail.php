<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name-2'] ?? '';
    $email = $_POST['email-3'] ?? '';
    $message = $_POST['field'] ?? '';
    
    $to = "info@nadirhujdur.com";
    $subject = "New Contact Form Submission";
    $headers = "From: info@nadirhujdur.com" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";
    
    if(mail($to, $subject, $email_body, $headers)){
        echo "Email Successfully Sent!";
    }else{
        echo "Failed to send the email!";
    }
}