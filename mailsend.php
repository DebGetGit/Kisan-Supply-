<?php
$to_email = "kisan.supply@gmail.com";
//$subject = $_POST['message'];
$subject = "Complaint From user";
$body = "Complaint from User";
$headers = "From: demoacc2526@gmail.com";

if (mail($to_email, $body, $subject, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Kisan Supply - Contact US</title>
    <link rel="stylesheet" type="text/css" href="css/agro.css" />
  </head>
  <body>
    <header>
      <div class="main">
        <div class="logo">
          <a href="index.php"><img src="images\logo.png" alt="Logo" /></a>
        </div>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="cart.html">Cart</a></li>
          <li><a href="contact_us.php">Contact Us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>