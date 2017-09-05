<?php
	if ($_SERVER['HTTP_HOST'] === 'home.dev') {
		define('hostName', 'localhost');
		define('username', 'root');
		define('password', '');
		define('databaseName', 'tent_study');
	} else {
		define('hostName', 'localhost');
		define('username', 'tentstud_tentstudy');
		define('password', '!W_}?M5Bo5x#');
		define('databaseName', 'tentstud_tentstudy');
	}
	$listAdmins = array(
		'1848989518674598'
	);
?>