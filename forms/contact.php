<?php
if (isset($_POST['send'])) {
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userSubject = $_POST['subject'];
    $userMessage = $_POST['message'];

    // Set the recipient email address
    $recipientEmail = 'akash2408kumar@gmail.com'; // Replace with your email address

    // Create the email message
    $emailSubject = "New contact form submission: $userSubject";
    $emailMessage = "Name: $userName\n";
    $emailMessage .= "Email: $userEmail\n";
    $emailMessage .= "Subject: $userSubject\n";
    $emailMessage .= "Message:\n$userMessage";

    // Additional headers
    $headers = "From: $userEmail\r\n";
    $headers .= "Reply-To: $userEmail\r\n";

    // Send the email
    if (mail($recipientEmail, $emailSubject, $emailMessage, $headers)) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
