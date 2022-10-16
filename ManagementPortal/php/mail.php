<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$outlook_mail = new PHPMailer;
 
$outlook_mail->IsSMTP();
// Send email using Outlook SMTP server
$outlook_mail->Host = 'smtp-mail.outlook.com';
// port for Send email
$outlook_mail->Port = 587;
$outlook_mail->SMTPSecure = 'tls';
$outlook_mail->SMTPDebug = 1;
$outlook_mail->SMTPAuth = true;
$outlook_mail->Username = 'Complianceplus22@outlook.com';
$outlook_mail->Password = 'CompliancePlus1';
 
$outlook_mail->From = 'Complianceplus22@outlook.com';
$outlook_mail->FromName = 'complianceplus';// frome name
$outlook_mail->AddAddress('melwinjolly@gmail.com', 'Melwin Jolly'); 
 
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