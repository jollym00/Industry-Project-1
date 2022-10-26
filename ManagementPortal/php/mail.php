<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$outlook_mail = new PHPMailer;
 
$outlook_mail->IsSMTP();
// Send email using Outlook SMTP server
$outlook_mail->Host = 'smtp-mail.outlook.com';
// port for Send email
$outlook_mail->Port = 587;
$outlook_mail->SMTPSecure = 'tls';
$outlook_mail->SMTPDebug = 1;
$outlook_mail->SMTPAuth = true;
$outlook_mail->Username = 'Compliancepluss2022@outlook.com';
$outlook_mail->Password = 'CompliancePlus1';
 
$outlook_mail->From = 'Compliancepluss2022@outlook.com';
$outlook_mail->FromName = 'complianceplus';// frome name
$outlook_mail->AddAddress($mail); 
 
$outlook_mail->IsHTML(true); // Set email format to HTML
 
$outlook_mail->Subject = 'Legislation Update notification';
$outlook_mail->Body    = 'Send email using Outlook SMTP server <br>This is the HTML message body <strong>in bold!</strong> <a href="https://onlinecode.org/" target="_blank">onlincode.org</a>';
$outlook_mail->AltBody = 'This is the body in plain text for non-HTML mail clients at https://onlinecode.org/';
 
if(!$outlook_mail->Send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $outlook_mail->ErrorInfo;
	exit;
}
else
{
	echo 'Message of Send email using Outlook SMTP server has been sent';
}

?>