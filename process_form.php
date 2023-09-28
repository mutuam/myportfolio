 <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["message"];

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

    // Send the email
    $mailSent = mail($to, $subject, $email_message, $headers);

    if ($mailSent) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent. Please try again later.";
    }
}
?>
