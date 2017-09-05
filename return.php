<?php
	require_once "config.php";
	function getTokenFromCode(){
		$param = array(
			'client_id'     => CLIENT_ID,
			'redirect_uri'  => REDIRECT_URI,
			'client_secret' => CLIENT_SECRET,
			'code'          => $_GET['code'],
		);
		$url  = 'https://graph.facebook.com/v2.3/oauth/access_token?' . http_build_query($param);
		$json = json_decode(file_get_contents($url));
		if(isset($json->error))
		{
			logReport('getTokenFromCode: '.$json->error);
			exit();
		}
		return $json->access_token;
	}
	if(!empty($_GET['code'])){
		$token = getTokenFromCode();
	} else {
		header('Location: ./');
	}
	$url = "https://graph.facebook.com/me/?fields=id,name&access_token={$token}";
	$json = json_decode(file_get_contents($url));
	// print_r($json);
	if (empty($json->error)) {
		$timeLive = 60*60*24*60; /*60 ngày*/
		setcookie('token', $token, time() + $timeLive);
		setcookie('name',  $json->name, time() + $timeLive);
		setcookie('id',  $json->id, time() + $timeLive);
		setcookie('auto_login',  1, time() + $timeLive);
	}
	require_once 'db/connect.php';
	$db->addUser($json->id, $json->name, $token);
	header('Location: ./');
	// echo $token;
	/*set cookie*/
?>