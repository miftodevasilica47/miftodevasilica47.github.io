<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send an email with the form data
  $to = 'youremail@example.com'; // Change this to your email address
  $subject = 'New message from your website';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email\r\nReply-To: $email\r\n";

  mail($to, $subject, $body, $headers);

  // Redirect the user to a thank-you page
  header('Location: thank-you.html');
  exit;
}
?>
