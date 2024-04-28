<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $model_number = $_POST["model_number"];
    
    $to = "shubhamthakur80661@gmail.com@gmail.com"; // Replace with your email address
    $subject = "Extension Setup Form Submission";
    $message = "Full Name: $full_name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Model Number: $model_number\n";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    
  //  header("html"); // Redirect to Error Box.html
    header("Location: Error Box.html")
    exit();
} else {
    echo "Error: Invalid request.";
}
?>
