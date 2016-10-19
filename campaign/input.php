<?php

class Input
{
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
			if ( !is_numeric($data['phone']) ) {
				$message['phone'] = '電話番号を入力してください。';
			} else {
				$message['phone'] = null;
			}
		}

		if ( empty($data['mail']) ) {
			$message['mail'] = 'メールアドレスを入力してください。';
		} else {
			if ( !strpos($data['mail'], '@') ) {
				$message['mail'] = 'メールアドレスを入力してください。';
			} else {
				$message['mail'] = null;
			}
		}

		return $message;
	}
}