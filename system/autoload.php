<?php defined('SELF') or die();

spl_autoload_register(function($class) {
	$path = SYS . 'classes/' . strtolower($class) . '.php';

	if(!file_exists($path)) {
		die('Unable to load class [' . $path . ']');
	}

	include($path);
});