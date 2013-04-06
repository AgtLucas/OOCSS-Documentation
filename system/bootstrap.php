<?php

	//Including the autoloader
	include_once(SYS . 'autoload.php');

	if(file_exists(ROOT . 'config.php')) {
		$config = Config::get();
	} else if(file_exists(ROOT . 'config.php.default')) {
		die('Config file not found. Config.php.default exists, rename and fill in.');
	} else {
		die('Config file and config template not found.');
	}

	$db = new Mysqlidb($config['DB']['host'], $config['DB']['user'], $config['DB']['pass'], $config['DB']['database']);

	var_dump($db);