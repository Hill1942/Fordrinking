<?php

	/*include_once("controller/Controller.php");

	$controller = new Controller();
	$controller->invoke();*/

   // include_once("controller/")
error_reporting(E_ALL);

$site_path = realpath(dirname(__FILE__));
define('__SITE_PATH', $site_path);

include 'include/init.php';

//$registy->router = new router($regist)