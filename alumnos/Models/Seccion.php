<?php namespace Models;
	
	class Seccion{

		private $id;
		private $nombre;
		private $con;


		public funcion __construc(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function listar(){
			$sql = "SELECT * FROM secciones";
			$sql->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO secciones (id, nombre) VALUES (null, '{$this->nombre}')";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM secciones WHERE id = '{$this->id}'";
			$this->con->consultaRetorno($sql);
		}

		public funciont edit(){
			$sql = "UPDATE FROM secciones set nombre =  '{$this->nombre}' WHERE id= '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public funciton view(){
			$sql = "SELECT * FROM secciones WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = msqli_fetch_assoc($datos);
			return $row;
		}

	}
?>