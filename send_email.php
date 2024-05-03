<?php
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Load environment variables
Dotenv::createImmutable(__DIR__ )->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form fields
    $name = $_POST["full-name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
   // Check if any of the required fields are empty
   if (empty($name) || empty($email) || empty($message)) {
    $response = ['status' => 'error', 'message' => 'Please fill out all required fields.'];
    echo json_encode($response);
    exit; // Stop further execution
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response = ['status' => 'error', 'message' => 'Invalid email format.'];
    echo json_encode($response);
    exit; // Stop further execution
}

// Validate phone number format (assuming it is a 10-digit number)
$phoneNumber = $_POST["phone"];
if (!preg_match("/^(\+\d{1,3})?(\d{10})$/", $phoneNumber)) {
    $response = ['status' => 'error', 'message' => 'Invalid phone number format.'];
    echo json_encode($response);
    exit; // Stop further execution
}

    // Set the recipient email address
    $to = "tammingagivondo@gmail.com";
    
    // Subject of the email
    $subject = "New Contact/Job Form Submission";
    
    // Compose the email message
    $email_message = "Name: $name<br>";
    $email_message .= "Email: $email<br><br>";
    $email_message .= "Message:<br>$message<br>";
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    // Set PHPMailer to use SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['GMAIL_USERNAME']; // Use the Gmail username from .env
    $mail->Password = $_ENV['GMAIL_PASSWORD']; // Use the Gmail password from .env
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Set email format to HTML
    $mail->isHTML(true);

    // Set email headers
    $mail->setFrom($email, $name);
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body    = $email_message;

    // Send the email
    if($mail->send()) {
        $response = ['status' => 'success', 'message' => 'Your message has been sent successfully.'];
    } else {
        $response = ['status' => 'error', 'message' => 'Oops! Something went wrong and we couldn\'t send your message.'];
    }
    echo json_encode($response);
} else {
    // If the request method is not POST, redirect back to the contact page
    header("Location: index.php");
}
?>
