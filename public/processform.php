<?php
// Collect POST variables
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$organization = $_POST['organization'];
$message = $_POST['message'];

// Process email
$to = 'allan@breeur.com';
$subject = 'New Contact Form Submission from PacketP Website';
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Organization: $organization\n";
$body .= "Message: $message";

$headers = "From: noreply@packetp.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

// Send email
$mailSent = mail($to, $subject, $body, $headers);

// Prepare response
$response = array();

if ($mailSent) {
    $response['status'] = 'success';
    $response['message'] = '<span style="color: blue;">Thank you for your message!</span>';
} else {
    $response['status'] = 'error';
    $response['message'] = 'An error occurred while sending the email.';
}

// Send response as JSON
header('Content-Type: application/json');
echo json_encode($response);