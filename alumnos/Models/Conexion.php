<?php namespace Models;
	
	class Conexion{

		private $datos = array(
				"host" => "localhost",
				"user" => "root",
				 "pass"=> "",
				 "db" => "proyecto"
			);
	}
	private $con;

	/*Creamos un método constructor para realizar la conexión
	con la librería mysqli*/

	public function __construct(){
		$this->con= new \mysqli($this->datos['host'],
		$this->datos['user'], $this->datos['pass'],
		$this->datos['db']);
	}

	/*Método recibe una variable y llama a la conexión 
	e indicarle que se ejecuta una query y se envía el 
	parametro que recibe*/
	public function consultaSimple($sql){
		$this->con->query($sql);
	}

	/*Devuelve lo que se consulta*/
	public function consultaRetorno($sql){
		$datos = $this->con->query($sql);
		return $datos;
	}	
?>