<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $mobileNo = $_POST['mobileNo'];
  $email = $_POST['email'];

  // Build email content
  $to = 'annlyn4yeo@gmail.com';
  $subject = 'New Contact Form Submission';
  $message = "Name: $name\n";
  $message .= "Mobile No.: $mobileNo\n";
  $message .= "Email: $email\n";

  // Send the email
  $success = mail($to, $subject, $message);

  if ($success) {
    echo 'Email sent successfully.';
  } else {
    echo 'Error sending email.';
  }
}
?>