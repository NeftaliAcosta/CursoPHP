<?php
	abstract class Molde{
		abstract public function ingresarnombre($nombre);
		abstract public function obtenernombre();
	}


	class Persona extends Molde{
		private $mensaje = "Hola mundo";
		private $nombre;

		public function mostrar(){
			print $this->mensaje;
		}

		public function ingresarnombre($nombre, $txt = "Guby"){
			$this->nombre = $nombre . " " .$txt;
		}

		public function obtenernombre(){
			print $this->nombre;
		}
	}

	$obj = new Persona();
	$obj->ingresarnombre("TAito");
	$obj->obtenernombre();
?>