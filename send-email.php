<?php

if(empty($_POST)) exit();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require(dirname(__FILE__) . '/vendor/autoload.php');

$mail = new PHPMailer(true);

$subject = $_POST['subject'] ?? "New form submitted from The Point";

$template = file_get_contents('./emails/template.html');

$template = str_replace("{{SUBJECT}}", $subject, $template);
$template = str_replace("{{MESSAGE}}", $_POST['message'] ?? "New form submitted from The Point", $template);

$message = "";

foreach($_POST['form'] as $input => $value) {

  // Sanitize the user input.
  $value = htmlspecialchars(strip_tags($value));

  $message .= "<p style='font-family: sans-serif; font-size: 12px; font-weight: bold; text-transform: uppercase; margin: 0; margin-bottom: 5px;'>{$input}</p>";
  $message .= "<p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 20px;'>{$value}</p>";

}

$template = str_replace("{{CONTENT}}", $message, $template);

try {

  // SMTP Mailer.
  $mail->isSMTP();

  // Debug SMTP functions.
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

  // SMTP Gmail Host.
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;

  // Set the encryption mechanism to use STARTTLS.
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

  // Authenticate SMTP.
  $mail->SMTPAuth = true;

  // Login to the SMTP authenticator.
  $mail->Username = 'no-reply@lovemypoint.com';
  $mail->Password = 'lovemypoint';

  // This is who the email is being sent from.
  $mail->setFrom('no-reply@lovemypoint.com', 'The Point Pub & Grill');

  // Send the email to these addresses.
  $mail->addAddress('thoevet@lovemypoint.com');
  $mail->addAddress('ctouzet@lovemypoint.com');
  $mail->addAddress('dlewis@lovemypoint.com');
  $mail->addAddress('rburns@lovemypoint.com');
  $mail->addAddress('katied@lovemypoint.com');
  $mail->addAddress('jarmstrong@lovemypoint.com');

  // CC Myself on all emails.
  $mail->addCC('sebastian@seedscs.com', 'Sebastian Inman');

  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $message;

  $mail->send();
  echo "success";

} catch (Exception $e) {

  echo $mail->ErrorInfo;

}