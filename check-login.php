<?php
	// session_start();
	// if(empty($_COOKIE['token'])){
	// 	header('Location: /');
	// }
	// if(empty($_SESSION['id'])){
	// 	$me = json_decode(file_get_contents("https://graph.facebook.com/me?fields=name,id&access_token={$_COOKIE['token']}"));
	// 	$_SESSION['id'] = $me->id;
	// 	$userId = $me->id;
	// } else {
	// 	$userId = $_SESSION['id'];
	// }
	require_once __DIR__ . '/db/connect.php';
	if(empty($_COOKIE['id']) || !$db->userIsset($_COOKIE['id'])){
		header('Location: /login.php?login_with_facebook');
		exit();
	}
?>