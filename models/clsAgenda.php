<?php
require_once('Conexion.php');
class Agenda extends conexion{
  private $id;
  private $fecha;
  private $hora;
  private $Consultorio;
  private $estado;
  private $idPaciente;
  private $idMedico;

  public function __construct(){
			$this->db=parent::__construct();
		}

  // ENCAPSULAMIENTO-------------------
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

  public function getHora(){
    return $this->hora;
  }
  public function setHora($hour){
    $this->hora=$hour;
  }

  public function getConsultorio(){
    return $this->consultorio;
  }
  public function setConsultorio($consul){
    $this->consultorio=$consul;
  }

  public function getEstado(){
    return $this->estado;
  }
  public function setEstado($state){
   $this->estado=$state;
  }

  public function getIdPaciente(){
    return $this->idPaciente;
  }
  public function setIdPaciente($codigoPaciente){
    $this->idPaciente=$codigoPaciente;
  }

  public function getIdMedico(){
    return $this->idMedico;
  }
  public function setIdMedico($codigoMedico){
    $this->idMedico=$codigoMedico;
  }

  public function consultarTodos(){
    $consulta=$this->db->prepare("SELECT * FROM Agenda order by idAgenda ASC");
    $filas=null;
    $consulta->execute();
  while($resultado=$consulta->fetch()){
    $filas[]=$resultado;
  }
  return $filas;
}


}
?>
