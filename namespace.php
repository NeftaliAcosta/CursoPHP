<?php 
	
	/*require_once "api/Models/PersonaModels.php";
	require_once "api/Controllers/PersonaControllers.php";
	/*

	/*Se crea un autoload*/
	spl_autoload_register(function($clase){
		/*$ruta = "api/" . $clase . ".php";*/

		$ruta = "api/" . str_replace("\\", "/", $clase) . ".php";
		if(is_readable($ruta)){
			require_once $ruta;
		}else{
			echo "El archivo no existe";
		}
	});

	Models\PersonaModels::Hola();
	Controllers\PersonaControllers::Hola();
?>