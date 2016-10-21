<?php

// setting mail
define('MAIL_CHARSET', 'UTF-8');
define('MAIL_HOST', 'smtp.gmail.com'); 			// Specify main and backup SMTP servers
define('MAIL_PORT', 587);						// TCP port to connect to
define('MAIL_SMTPAUTH', true);					// Enable SMTP authentication
define('MAIL_USERNAME', 'dophu17@gmail.com');	// SMTP username
define('MAIL_PASSWORD', 'kcrtftpisnatcjyt');	// SMTP password
define('MAIL_SMTPSECURE', 'tls');				// Enable TLS encryption, `ssl` also accepted

// content mail
define('TITLE_CAMPAIGN_GUEST', '【岡山県青年館】お問合せいただきありがとうございました');
define('TITLE_CAMPAIGN_MANAGER', 'ホームページよりお問合せがありました');
define('FROM_EMAIL', 'uchiwa-cm-sales@ml.kct.jp');
define('FROM_NAME', '岡山県青年館');
define('TO_ADDRESS', 'uchiwa-cm-sales@ml.kct.jp'); //data@chiroro.co.jp

// using
define('DOMAIN', 'http://' . $_SERVER['SERVER_NAME']);