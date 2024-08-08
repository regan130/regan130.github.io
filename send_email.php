<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "drreganalifardyanto@gmail.com";  // Ganti dengan email Anda
    $subject = "Form Submission";
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
