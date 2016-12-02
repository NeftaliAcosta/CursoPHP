<?php namespace Models;
	

	class Estudiante{

		private $id;
		private $nombre;
		private $edad;
		private $promedio;
		private $imagen;
		private $id_seccion;
		private $fecha;
		private $con;


		public function __construc(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function hola(){
			echo "hola mundo";
		}
		public function get($atributo){
			return $this->$atributo;
		}

		public function listar(){
			$sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ond t1.id_seccion = t2.id ";
			$this->con->consultaRetorno($sql);
			return datos;
		}

		public function add(){
			$sql = "INSERT INTO estudiantes(id, nombre, edad, promedio, imagen, id_seccion, fecha)
					VALUES (null, '{$this->nombre}', '{$this->edad}', '{$this->promedio}', '{$this->imagen}', 
						'{$this->id_seccion}', NOW())";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM estudiantes where id='{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
			$sql = "UPDATE FROM estudiantes SET nombre='{$this->nombre}', edad='{$this->edad}',
				promedio='{$this->promedio}', id_seccion ='{$this->id_seccion}' where id = '{$this->id}'";
				$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql =  "SELECT t1.*, t2.nombre as nombre_seccion from estudiantes t1 INNER JOIN secciones t2
				on t1.id_seccion = t2.id WHERE t1.id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}	
	}
?>