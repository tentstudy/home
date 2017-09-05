<?php 
	function s($key)
	{
		global $s;
		echo $s[$key];
	}
	$langs = array(
		'vi' => 'Việt Nam',
		'en' => 'English'
		);
	$langToHtmlLang = array(
		'vi' => 'vi-VN',
		'en' => 'en-US'
	);
	$ok = false;
	$lang;
	foreach ($langs as $lang => $value) {
		if (array_key_exists($lang, $_GET)) {
			require_once __DIR__ . "/../data/lang/{$lang}.php";
			$ok = true;
			break;
		}
	}
	if(!$ok){
		require_once __DIR__ . '/../data/lang/vi.php';
		$lang = 'vi';
	}
?>