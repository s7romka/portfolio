<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $country = htmlspecialchars($_POST['country']);
    $subject = htmlspecialchars($_POST['subject']);

    $to = "romka.s.2005@gmail.com";
    $subject_email = "New contact form submission from $firstname $lastname";
    $message = "First Name: $firstname\n";
    $message .= "Last Name: $lastname\n";
    $message .= "Email: $email\n";
    $message .= "Country: $country\n";
    $message .= "Message:\n$subject";

    $headers = "From: $email";

    if (mail($to, $subject_email, $message, $headers)) {
        echo "Thank you for contacting me, $firstname.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>