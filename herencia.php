<?php 
	class vehiculo{
		
		//Atributos
		public $motor = false;
		private $nombre = "";
		public $marca;
		public $color;

		//Metodos
		public function estado($nombre){
			if($this->motor){
				echo "El motor de ".$nombre." está encendido<br>";
			}else{
				echo "El motor de ".$nombre." está apagado<br>";
			}

		}

		public function encender($nombre){
			if($this->motor){
				echo "Cuidado, el motord de " .$nombre. " ya está ecendido <br>";
			}else{
				echo "Encendiendo motor de " .$nombre." <br>";
				$this->motor = true;
			}
		}

		public function procesar($nombre){
			$this->nombre = $nombre;
			self::estado($nombre);
			self::encender($nombre);
			self::estado($nombre);
		}
	}

	class moto extends vehiculo{
		

		//Metodos
	}

	class cuatrimoto extends moto{


	}


	$moto = new moto();
	$moto->procesar("Cuatrimoto");
	
?>