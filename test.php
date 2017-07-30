<?php
    // echo $_SERVER['REQUEST_URI'];
    print_r($_GET);
    $langs = array(
        'vi' => 'Việt Nam',
        'en' => 'English'
    );
    $ok = false;
    foreach ($langs as $lang => $value) {
    	if (array_key_exists($lang, $_GET)) {
    		require_once __DIR__ . "/data/lang/{$lang}.php";
    		$ok = true;
    		break;
    	}
    }
    if(!$ok){
    	require_once __DIR__ . '/data/lang/vi.php';
        echo 123;
    }
?>