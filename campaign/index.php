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
$smarty->caching = true;
$smarty->cache_lifetime = 120;

// $inputs = array(
// 	'hope' 				=> !empty($_POST['hope']) ? $_POST['hope'] : null,
// 	'name' 				=> !empty($_POST['name']) ? $_POST['name'] : null,
// 	'phone' 			=> !empty($_POST['phone']) ? $_POST['phone'] : null,
// 	'companion_name' 	=> !empty($_POST['companion_name']) ? $_POST['companion_name'] : null,
// 	'mail' 				=> !empty($_POST['mail']) ? $_POST['mail'] : null,

// 	'save'				=> isset($_POST['save']) ? $_POST['save'] : null,
// 	'send'				=> isset($_POST['send']) ? $_POST['send'] : null,
// 	'back'				=> isset($_POST['back']) ? $_POST['back'] : null,
// );

$smarty->assign('formAction', DOMAIN . '/campaign/index.php');
// $smarty->assign('value', $value);

$message = array();

if ( isset($_POST['save']) ) {
	$inputs = array(
		'hope' 				=> !empty($_POST['hope']) ? $_POST['hope'] : null,
		'name' 				=> !empty($_POST['name']) ? $_POST['name'] : null,
		'phone' 			=> !empty($_POST['phone']) ? $_POST['phone'] : null,
		'companion_name' 	=> !empty($_POST['companion_name']) ? $_POST['companion_name'] : null,
		'mail' 				=> !empty($_POST['mail']) ? $_POST['mail'] : null,

		'save'				=> isset($_POST['save']) ? $_POST['save'] : null,
		'send'				=> isset($_POST['send']) ? $_POST['send'] : null,
		'back'				=> isset($_POST['back']) ? $_POST['back'] : null,
	);

	$message = $input->checkInput($inputs);

	$status = true;
	foreach ( $message as $item ) {
		if ( !empty($item) ) {
			$status = false;
			break;
		}
	}
	if ( $status ) {
		$smarty->assign('value', $inputs);
		return $smarty->display('confirm.tpl');
	} else {
		$smarty->assign('value', $inputs);
		$smarty->assign('message', $message);

		return $smarty->display('index.tpl');
	}
}

if ( isset($_POST['send']) ) {
	// $smarty->assign('value', $inputs);
	// // mail(MANAGE_CAMPAIGN_EMAIL, 'Thank You', $smarty->fetch('mail_manage.tpl'));
	// // mail($inputs['mail'], 'Thank You', $smarty->fetch('mail_customer.tpl'));

	// mb_language("ja");
	// mb_internal_encoding("UTF-8");

	// $subject = MANAGE_CAMPAIGN_SUBJECT;
	// $subject = mb_convert_encoding($subject, "ISO-2022-JP", "AUTO");
	// $subject = mb_encode_mimeheader($subject);

	// $body = $smarty->fetch('mail_manage.tpl');

	// $headers = "MIME-Version: 1.0 \n";
	// $headers .= "From: " . FROM_EMAIL . "\n";
	// // $headers .= "Bcc: " . $bcc . "\n";

	// // $parameters = "-f " . $return;

	// ini_set("SMTP","smtp.gmail.com");
	// ini_set("smtp_port", 587);
	// // ini_set("username","dophu17@gmail.com");
	// // ini_set("password","exaxpydwwbjmdgbp");
	// ini_set("sendmail_from","dophu17@gmail.com");


	// if ( !mb_send_mail(MANAGE_CAMPAIGN_EMAIL, $subject, $body, $headers) ) {
	//     echo "mb_send_mail() failed.\n";
	//     return false;
	// }

	// return $smarty->display('send.tpl');
}

if ( isset($_POST['back']) ) {
	// return $smarty->display('index.tpl');
}
echo 1;
$smarty->assign('message', $message);
$smarty->display('index.tpl');
