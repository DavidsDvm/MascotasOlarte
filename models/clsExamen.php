<?php
require_once('Conexion.php');
	class Examen extends conexion{
		private $id;
		private $fecha;
		private $tipo;
		private $valor;
		private $idHistoria;

		public function __construct(){
			$this->db=parent::__construct();
		}

		//ENCAPSULAMIENTO---------------------------
		public function getId(){
			return $this->id;
		}
		public function setId($codigo){
			$this->id=$codigo;
		}

		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($date){
			$this->fecha=$date;
		}

		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($type){
			$this->tipo=$type;
		}
		public function getValor(){
			return $this->valor;
		}
		public function setValor($value){
			$this->valor=$value;
		}

		public function getHistoria(){
			return $this->idHistoria;
		}
		public function setHistoria($historia){
			$this->idHistoria=$historia;
		}

		public function consultarTodos(){
			$consulta=$this->db->prepare("SELECT * FROM Examen order by idExamen ASC");
			$filas=null;
			$consulta->execute();
		while($resultado=$consulta->fetch()){
			$filas[]=$resultado;
		}
		return $filas;
	}


	}
?>
