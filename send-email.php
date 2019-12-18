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

  $message .= "<p style='font-family: sans-serif; font-size: 12px; font-weight: bold; text-transform: uppercase; margin: 0; margin-bottom: 5px;'>{$input}</p>";
  $message .= "<p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 20px;'>{$value}</p>";

}

$template = str_replace("{{CONTENT}}", $message, $template);

try {

  $mail->IsMail();

  $mail->setFrom('no-reply@lovemypoint.com', 'The Point');
  $mail->addAddress('inman.sebastian@gmail.com', 'Sebastian Inman');

  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $message;

  $mail->send();
  echo "success";

} catch (Exception $e) {

  echo $mail->ErrorInfo;

}