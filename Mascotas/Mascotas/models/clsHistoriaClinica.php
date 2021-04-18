<?php
require_once('Conexion.php');
class HistoriaClinica extends conexion{
  private $id;
  private $estatura;
  private $peso;
  private $antecedentes;
  private $alergias;
  private $enfermedades;
  private $idPaciente;

  public function __construct(){
    $this->db=parent::__construct();
  }
  //ENCAPSULAMIENTO--------------------------------
  public function getId(){
    return $this->id;
  }
  public function setId($codigo){
   $this->id=$codigo;
  }

  public function getEstatura(){
    return $this->estatura;
  }
  public function setEstatura($stature){
   $this->estatura=$stature;
  }

  public function getPeso(){
    return $this->peso;
  }
  public function setPeso($weight){
   $this->peso=$weight;
  }

  public function getAntecedentes(){
    return $this->antecedentes;
  }
  public function setAntecedentes($antecedent){
   $this->antecedentes=$antecedent;
  }

  public function getAlergias(){
    return $this->alergias;
  }
  public function setAlergias($allergies){
   $this->alergias=$allergies;
  }

  public function getEnfermedades(){
    return $this->enfermedades;
  }
  public function setEnfermedades($diseases){
   $this->enfermedades=$diseases;
  }

  public function getIdPaciente(){
    return $this->idPaciente;
  }
  public function setIdPaciente($codigoPaciente){
    $this->idPaciente=$codigoPaciente;
  }

  public function consultarTodos(){
    $consulta=$this->db->prepare("SELECT * FROM historia_clinica order by idHistoria ASC");
    $filas=null;
    $consulta->execute();
  while($resultado=$consulta->fetch()){
    $filas[]=$resultado;
  }
  return $filas;
}


}
?>
