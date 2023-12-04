<?php

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data after sanitizing
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $number = htmlspecialchars($_POST["number"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address. Please provide a valid email.";
        exit;
    }

    // Set up email parameters
    $to = "christopher.mutuawambua@gmail.com"; // Replace with your email address
    $subject = "Mail from website";
    $headers = "From: $email\r\n" .
               "CC: christopher.mutuawambua@gmail.com";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Number: $number\n";
    $email_message .= "Message:\n$message";

    // Send the email using a more reliable method (e.g., PHPMailer)
    require 'htd/PHPMailerAutoload.php'; // Make sure to include the PHPMailer library

    $mail = new PHPMailer();
    $mail->setFrom($email, $name);
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $email_message;

    if ($mail->send()) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }
}*/
?>




<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {
   
                  
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.example.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'christopher.mutuawambua@gmail.com';                   
    $mail->Password   = '070707750461';                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SSL;           
    $mail->Port       = 465;                                  

    //Recipients
    $mail->setFrom('christopher.mutuawambua@gmail.com', 'Mailer');
    $mail->addAddress('christopher.mutuawambua@gmail.com', 'Joe User');     
    
    $mail->addReplyTo('info@example.com', 'Information');


    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');        


    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}?>