<?php

// set value


// set old value
// $oldValue = array(
// 	'hope' 				=> null,
// 	'name' 				=> null,
// 	'phone' 			=> null,
// 	'companion_name' 	=> null,
// 	'mail' 				=> null,
// );

// $message = array(
// 	'hope' 				=> null,
// 	'name' 				=> null,
// 	'phone' 			=> null,
// 	'companion_name' 	=> null,
// 	'mail' 				=> null,
// );

// $setMessage = array(
// 	'hope' 				=> 'ご参加日を選択してください。',
// 	'name' 				=> 'お名前を入力してください。',
// 	'phone' 			=> '電話番号を入力してください。',
// 	'companion_name' 	=> null,
// 	'mail' 				=> 'メールアドレスを入力してください。',
// );


// set validation
// hope
// if ( empty($value['hope']) ) {
// 	$status = false;
// }

class Input
{
	// function setValue($data = array()) {
	// 	$inputs = array(
	// 		'hope' 				=> !empty($_POST['hope']) ? $_POST['hope'] : null,
	// 		'name' 				=> !empty($_POST['name']) ? $_POST['name'] : null,
	// 		'phone' 			=> !empty($_POST['phone']) ? $_POST['phone'] : null,
	// 		'companion_name' 	=> !empty($_POST['companion_name']) ? $_POST['companion_name'] : null,
	// 		'mail' 				=> !empty($_POST['mail']) ? $_POST['mail'] : null,

	// 		'save'				=> isset($_POST['save']) ? $_POST['save'] : null,
	// 		'send'				=> isset($_POST['send']) ? $_POST['send'] : null,
	// 		'back'				=> isset($_POST['back']) ? $_POST['back'] : null,
	// 	);

	// 	return $inputs;
	// }

	function checkInput($data = array()) {
		$message = array();

		if ( empty($data['hope']) ) {
			$message['hope'] = 'ご参加日を選択してください。';
		} else {
			$message['hope'] = null;
		}

		if ( empty($data['name']) ) {
			$message['name'] = 'お名前を入力してください。';
		} else {
			$message['name'] = null;
		}

		if ( empty($data['phone']) ) {
			$message['phone'] = '電話番号を入力してください。';
		} else {
			$message['phone'] = null;
		}

		if ( empty($data['mail']) ) {
			$message['mail'] = 'メールアドレスを入力してください。';
		} else {
			$message['mail'] = null;
		}

		return $message;
	}
}