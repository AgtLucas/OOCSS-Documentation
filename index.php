<?php

define('SELF', true);

defined('DS') or define('DS', DIRECTORY_SEPARATOR);
define('ROOT', pathinfo(__FILE__, PATHINFO_DIRNAME) . DS);
define('APP', ROOT . 'app' . DS);
define('SYS', ROOT . 'system' . DS);

//Run OOCSS DOC - http://bukk.it/run.gif
include_once(SYS . 'bootstrap.php');