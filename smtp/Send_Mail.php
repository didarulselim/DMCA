<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from       = 'no-reply@jobsvalle.com';
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->SMTPDebug = 1;
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.jobsvalle.com"; // Amazon SES server, note "tls://" protocol
$mail->Port       =  465;                    // set the SMTP port
$mail->Username   = "no-reply@jobsvalle.com";  // SMTP  username
$mail->Password   = "dfiFu93+(=N9";  // SMTP password
$mail->SetFrom($from);
$mail->AddReplyTo($from);
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
if($mail->Send()){
	return true;
}
 
}
?>
