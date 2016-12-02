<?php
	

	require_once "Config/Autoload.php";
	Config\Autoload::run();
	$est = new Models\Estudiante();
	$est->hola();
?>