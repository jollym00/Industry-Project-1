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
 
$outlook_mail->IsHTML(true); 

$outlook_mail->Subject = 'Legislation Update Notification';
$outlook_mail->Body    = "Hello Lahebo User, <br> <br> The following legislation has been updated: <br> <br> Act: $Act <br> Division: $Division <br> Legislation Number: $LegNum <br> Legislation Name: $LegName <br> <br> Please log in to your Lahebo account to view the change. <br> <br> Thanks, <br> The Lahebo Team";

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