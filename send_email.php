<?php
if(isset($_POST['submit'])){
    $to = "info@dhiyafoods.com"; // Your email address
    $from = $_POST['email']; // Sender's email address
    $name = $_POST['name']; // Sender's name
    $subject = $_POST['subject']; // Email subject
    $message = $_POST['message']; // Message content

    // Email headers
    $headers = "From: $name <$from>" . "\r\n";
    $headers .= "Reply-To: $from" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Send email
    if(mail($to, $subject, $message, $headers)){
        echo "<script>alert('Your message has been sent successfully!');</script>";
    } else{
        echo "<script>alert('Failed to send email. Please try again later.');</script>";
    }
}
?>