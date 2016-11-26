<?php 
	class Facebook{
		//Atributos
		public $nombre;
		public $edad;
		private $pass;


		//Métodos
		public function __construct($nombre, $edad, $pass){
			$this->nombre = $nombre;
			$this->edad = $edad;
			$this->pass = $pass;
		}

		public function verinfo(){
			echo "Nombre: " . $this->nombre . "<br>";
			echo "Edad: " . $this->edad  ."<br>";
			$this->cambiarpass("54321");
			echo "Password" . $this->pass ."";
			
			
		}

		private function cambiarpass($pass){
			$this->pass = $pass;
		}
	}

	$facebook = new Facebook("Neftali", 27, "12345");
	//$facebook->pass;
	//$facebook->cambiarpass("54321");
	$facebook->verinfo();
?>