<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require '../libs/Smarty.class.php';
include '../configs/config.php';
include 'input.php';

$smarty = new Smarty;
$input = new Input;
session_start();

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = false;
// $smarty->cache_lifetime = 120;


$smarty->assign('formAction', DOMAIN . '/campaign/index.php');
$smarty->assign('value', $_POST);
$message = array();

echo '<pre>';
print_r($_POST);
echo '</pre>';

if ( isset($_POST['save']) ) {
	$message = $input->checkInput($_POST);
	$status = true;
	foreach ( $message as $item ) {
		if ( !empty($item) ) {
			$status = false;
			break;
		}
	}
	if ( $status ) {
		return $smarty->display('confirm.tpl');
	} else {
		$smarty->assign('message', $message);
	}
}

if ( isset($_POST['send']) ) {
	$smarty->assign('value', $_POST);
	// mail(MANAGE_CAMPAIGN_EMAIL, 'Thank You', $smarty->fetch('mail_manage.tpl'));
	// mail($inputs['mail'], 'Thank You', $smarty->fetch('mail_customer.tpl'));

	mb_language("ja");
	mb_internal_encoding("UTF-8");

	// $subject = MANAGE_CAMPAIGN_SUBJECT;
	// $subject = mb_convert_encoding($subject, "ISO-2022-JP", "AUTO");
	// $subject = mb_encode_mimeheader($subject);

	$body = $smarty->fetch('mail_manage.tpl');

	$from_name = mb_encode_mimeheader(mb_convert_encoding(FROM_NAME,'iso-2022-jp','utf-8'));
	$headers = "From:" . $from_name . '<' . FROM_EMAIL . '>';

	ini_set("SMTP","smtp.gmail.com");
	ini_set("smtp_port", 587);
	// ini_set("username","dophu17@gmail.com");
	// ini_set("password","kcrtftpisnatcjyt ");
	ini_set("sendmail_from","dophu17@gmail.com");

	if ( !mb_send_mail($_POST['mail'], TITLE_CONTACT_GUEST, $body, $headers) ) {
		echo "mb_send_mail() failed.\n";
		return $smarty->display('confirm.tpl');
	}

	// if ( !mb_send_mail(MANAGE_CAMPAIGN_EMAIL, $subject, $body, $headers) ) {
	//     echo "mb_send_mail() failed.\n";
	//     return false;
	// }

	return $smarty->display('send.tpl');
}

if ( isset($_POST['back']) ) {
	// return $smarty->display('index.tpl');
}

$smarty->assign('message', $message);
$smarty->display('index.tpl');
