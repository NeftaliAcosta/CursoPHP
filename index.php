<?php
	class Persona{
		//Atributos
		public $nombre = array();
		public $apellido =array();

		//Metodos
		public function guardar($nombre, $apellido){
			$this->nombre[]=$nombre;
			$this->apellido[]=$apellido;
		}

		public function mostrar(){
			for($i=0; $i < count($this->nombre); $i++){
				Persona::formato($this->nombre[$i], $this->apellido[$i]);
			}
		}

		public function formato($nombre, $apellido){
			echo "<b>Nombre:</b> " .$nombre . " | <b>Apellido:</b> " .$apellido . "<br>";

		}
	}

	$persona = new Persona();
	$persona->guardar("Neftalí", "Acosta");
	$persona->guardar("Papu", "Achach");
	$persona->guardar("Misael", "Herrera");
	$persona->guardar("Gilberto", "López");
	$persona->mostrar();
?>