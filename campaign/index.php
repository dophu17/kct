<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require '../libs/Smarty.class.php';
require '../libs/PHPMailer/PHPMailerAutoload.php';
include '../configs/config.php';
include '../configs/functions.php';
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

	if ( !sendMail($smarty, 'mail_manage.tpl', $_POST, FROM_NAME, FROM_EMAIL, $_POST['name'], $_POST['mail'], TITLE_CAMPAIGN_GUEST)
		|| !sendMail($smarty, 'mail_manage.tpl', $_POST, FROM_NAME, FROM_EMAIL, $_POST['name'], TO_ADDRESS, TITLE_CAMPAIGN_MANAGER)
	) {
		echo 'Send email error!';
		return $smarty->display('confirm.tpl');
	}

	return $smarty->display('send.tpl');
}

if ( isset($_POST['back']) ) {
	return $smarty->display('index.tpl');
}

$smarty->assign('message', $message);
$smarty->display('index.tpl');