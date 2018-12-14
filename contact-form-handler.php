<?php
$to_email = 'chris31.3rd@gmail.com, zb2270@gmail.com';
$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_phone = $_POST['phone'];
$message = $_POST['message'];

// formatting variables
$comma = ", ";
$rn = "<br>";

$headers = 'From: Lawshea Gourmet <info@lawsheagourmet.com>' . "\r\n" .
    'Reply-To: Chef <info@lawsheagourmet.com>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n";

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //for HTML

$subject = "lawsheagourmet.com Contact Form Submitted";

$message = $rn . "Hello! Someone has contacted you using the 'Contact Us' form from the lawsheagourmet.com website. Their info is as follows: " . $rn.$rn .
    '<b>Name: </b>' . $contact_name . $rn .
    '<b>Contact Info: </b>' . $contact_email . $contact_phone . $rn .
    '<b>Message: </b>' . $message . $rn;


if($contact_name != ''){
  mail($to_email, $subject, $message, $headers);
  header("Location: http://lawsheagourmet.com/preview/index.html?contactThanks=yes");
}
?>
