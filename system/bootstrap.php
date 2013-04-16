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

	//Connect to DB
	$db = new DBEngine($config['DB']['user'], $config['DB']['pass'], $config['DB']['database'], $config['DB']['host'], true);

	//If error, die
	if(!is_null($db->get_last_error())) {
		die($error);
	}

	