<?php 
	trait Persona2{
		public $nombre;

		public function mostrarNombre(){
			echo $this->nombre;
		}

		abstract function asignarNombre($nombre);
	}

	trait Trabajador{
		protected function mensaje(){
			echo "Mi nombre es ";
		}
	}

	class Persona{
		use Persona2, Trabajador;

		public function asignarNombre($nombre){
<<<<<<< HEAD
			$this->nombre = self::mensaje() . $nombre;
=======
			$this->$nombre = self::mensaje() . $nombre;
>>>>>>> origin/master
		}
	}

	$obj = new Persona();
	$obj->asignarNombre('Neftali');
	$obj->mostrarNombre();
?>