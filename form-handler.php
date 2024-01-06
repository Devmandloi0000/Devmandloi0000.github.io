<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate form data (you can add more validation if needed)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Your email address where you want to receive messages
    $to = "devmandloi37@gmail.com";

    // Subject of the email
    $email_subject = "New Contact Form Submission: $subject";

    // Compose the email message
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message";

    // Send the email
    mail($to, $email_subject, $email_body);

    // Optionally, you can redirect the user to a thank you page
    header("Location: thank-you.html");
    exit;
} else {
    // If the form is not submitted, redirect to the home page
    header("Location: index.html");
    exit;
}
?>
