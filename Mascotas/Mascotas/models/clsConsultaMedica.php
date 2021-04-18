<?php
require_once('Conexion.php');
  class ConsultaMedica extends conexion{
    private $id;
    private $hora;
    private $motivo;
    private $enfermedad;
    private $idHistoria;

    public function __construct(){
			$this->db=parent::__construct();
		}

    //ENCAPSULAMIENTO-----------------------------
    public function getId(){
			return $this->id;
		}
		public function setId($codigo){
			$this->id=$codigo;
		}

    public function getHora(){
      return $this->hora;
    }
    public function setHora($hour){
      $this->hora=$hour;
    }

    public function getMotivo(){
      return $this->motivo;
    }
    public function setMotivo($motive){
      $this->motivo=$motive;
    }

    public function getEnfermedad(){
      return $this->enfermedad;
    }
    public function setEnfermedad($disease){
     $this->enfermedad=$disease;
    }

    public function getHistoria(){
			return $this->idHistoria;
		}
		public function setHistoria($historia){
			$this->idHistoria=$historia;
		}

    public function consultarTodos(){
      $consulta=$this->db->prepare("SELECT * FROM consulta_medica order by idConsulta ASC");
      $filas=null;
      $consulta->execute();
    while($resultado=$consulta->fetch()){
      $filas[]=$resultado;
    }
    return $filas;
  }

  }
?>
