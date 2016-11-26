<?php 
	interface Auto{
		public function Encender();
		public function Apagar();
	}

	interface Gasolina extends Auto{
		public function VaciarTanque();
		public function LlenarTanque($cant);
	}


	class Deportivo implements Gasolina{

		private $estado = false;
		private $tanque = 0;

		public function Estado(){
			if($this->estado){
				echo "El auto está encendido y tiene " .$this->tanque. " litros en el tanque.<br>";
			}else{
				echo "El auto está apagado <br>";
			}
		}

		public function Encender(){
			if($this->estado){
				echo "El auto no se puede encender 2 veces<br>";
			}else{
				if($this->tanque <= 0){
					echo "Usted no puede encender el auto porque el tanque esta vacio <br>";
				}else{
					echo "El auto ahora está encendido<br>";
					$this->estado = true;
				}
				
			}
		}

		public function Apagar(){
			if($this->estado){
				echo "Auto Apagado <br>";
				$this->estado = false;
			}else{
				echo "El auto ya estaba apagado <br>";
			}
		}

		public function VaciarTanque(){
			$this->tanque = 0;
		}

		public function LlenarTanque($cant){
			$this->tanque = $cant;
		}

		public function Usar($km){
			if($this->estado){
				$reducir = $km / 3;
				$this->tanque = $this->tanque - $reducir;
				if($this->tanque <= 0){
					$this->estado = false;
				}
			}else{
				echo "El auto esta apagado y no se puede usar <br>";
			}
		}
	}

	$objeto = New Deportivo();
	$objeto->LlenarTanque(100);
	$objeto->encender();
	$objeto->usar(120);	
	$objeto->estado();
?>