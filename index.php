<?php
session_start();
require 'config.php';

spl_autoload_register(function ($class){
	if(strpos($class, 'Controller') > -1) {
		if(file_exists('controllers/'.$class.'.php')) {
			require_once 'controllers/'.$class.'.php';
		}
	} else if(file_exists('admin/models/'.$class.'.php')) {
		require_once 'admin/models/'.$class.'.php';
	} else {
		require_once 'admin/core/'.$class.'.php';
	}
});

$core = new Core();
$core->run();
?>