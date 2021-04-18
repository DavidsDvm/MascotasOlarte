<?php
require_once('Conexion.php');
	class Diagnostico extends conexion{
		private $id;
		private $descripcion;
		private $idConsulta;

		public function __construct(){
			$this->db=parent::__construct();
		}

		//ENCAPSULAMIENTO--------------------------------
		public function getID(){
			return $this->id;
		}
		public function setId($codigo){
			$this->id=$codigo;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($des){
			$this->descripcion=$des;
		}
		public function getConsulta(){
			return $this->idConsulta;
		}
		public function setConsulta($consulta){
			$this->idConsulta=$consulta;
		}

		public function consultarTodos(){
      $consulta=$this->db->prepare("SELECT * FROM diagnostico order by idDiagnostico ASC");
      $filas=null;
      $consulta->execute();
    while($resultado=$consulta->fetch()){
      $filas[]=$resultado;
    }
    return $filas;
  }


	}

?>
