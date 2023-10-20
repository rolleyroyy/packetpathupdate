<?php

error_reporting(0);

// Retrieve the POST data
$formData = $_POST['data'];

// Retrieve the form fields from the formData array
$name = $formData['name'];
$email = $formData['email'];
$phone = $formData['phone'];
$organization = $formData['organization'];
$message = $formData['message'];

// Perform any necessary validation or processing here


// Send email
$to = 'allan@breeur.com';
$subject = 'New Form Submission';
$body = "Name: $name\nEmail: $email\nPhone: $phone\nOrganization: $organization\nMessage: $message";

// Additional headers
$headers = "From: $to" . "\r\n";
$headers .= "Reply-To: $to" . "\r\n";

// Send the email
// mail($to, $subject, $body, $headers);

// Generate the response message
$responseMessage = "Thank you for submitting the form, $name!";

// Prepare the JSON response
$response = [
    'message' => $name
];

// Set the response headers
header('Content-Type: application/json');

// Send the JSON response
echo json_encode($response);

?>