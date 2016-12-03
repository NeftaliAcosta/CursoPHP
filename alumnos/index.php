<?php
	/*
	require_once "Config/Autoload.php";
	Config\Autoload::run();
	$est = new Models\Estudiante();
	$est->hola();*/

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);

	require_once "Config/Autoload.php";
	Config\Autoload::run();
	new Config\Request();
?>