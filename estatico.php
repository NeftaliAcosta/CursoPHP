<?php 
	class Pagina{
		//Atributos
		public $nombre = "Gubynetwork";
		public static $url = "www.gubynetwork.com";

		//Metodos
		public function bienvenida(){
			echo "Bienvenidos a <b>". $this->nombre . "</b> la pagina es <b>". self::$url . "</b><br>";
		}

		public static function bienvenida2(){
			echo "Bienvenido a ". self::$url;
		}
	}

	class Web extends Pagina{

	}

	//$pagina = new Pagina();
	//$pagina->bienvenida();
	Web::bienvenida2();
?>