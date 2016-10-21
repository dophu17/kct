<?php

function sendMail($smarty, $view, $value, $fromName, $fromEmail, $toName, $toEmail, $subject) 
{
	$mailer = new PHPMailer;
	$mailer->isSMTP();
	$mailer->CharSet 		= MAIL_CHARSET;
	$mailer->Host 			= MAIL_HOST;
	$mailer->SMTPAuth 		= MAIL_SMTPAUTH;
	$mailer->Username 		= MAIL_USERNAME;
	$mailer->Password 		= MAIL_PASSWORD;
	$mailer->SMTPSecure 	= MAIL_SMTPSECURE;
	$mailer->Port 			= MAIL_PORT;

	$mailer->setFrom($fromEmail, $fromName);
	$mailer->addAddress($toEmail, $toName);
	$mailer->isHTML(false); // Set email format to HTML

	$mailer->Subject = $subject;
	$smarty->assign('value', $value);
	$mailer->Body    = $smarty->fetch($view);

	if( !$mailer->send() ) {
	    echo 'Mailer Error: ' . $mailer->ErrorInfo;
	    return false;
	} else {
	    return true;
	}
}