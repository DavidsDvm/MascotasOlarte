<?php
require_once('Conexion.php');
class Paciente extends conexion{
  private $id;
  private $nombre;
  private $apellido;
  private $correo;
  private $telefono;
  private $direccion;
  private $fecha;
  private $estado;
  private $idUsuario;

  public function __construct(){
    $this->db=parent::__construct();
  }
  //ENCAPSULAMIENTO----------------------
  public function getId(){
    return $this->id;
  }
 public function setId($codigo){
   $this->id=$codigo;
  }

  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($name){
   $this->nombre=$name;
  }

  public function getApellido(){
    return $this->apellido;
  }
  public function setApellido($apelli){
   $this->apellido=$apelli;
  }

  public function getCorreo(){
    return $this->correo;
  }
  public function setCorreo($mail){
   $this->correo=$mail;
  }

  public function getTelefono(){
    return $this->telefono;
  }
  public function setTelofono($phone){
   $this->telefono=$phone;
  }

  public function getDireccion(){
    return $this->direccion;
  }
  public function setDireccion($direction){
   $this->direccion=$direction;
  }

  public function getFecha(){
    return $this->fecha;
  }
  public function setFecha($date){
    $this->fecha=$date;
  }

  public function getEstado(){
    return $this->estado;
  }
  public function setEstado($state){
   $this->estado=$state;
  }

  public function getIdUsuario(){
    return $this->idUsuario;
  }
  public function setIdUsuario($codigoUsuario){
    $this->idUsuario=$codigoUsuario;
  }

  public function consultarTodos(){
    $consulta=$this->db->prepare("SELECT * FROM Paciente order by idPaciente ASC");
    $filas=null;
    $consulta->execute();
  while($resultado=$consulta->fetch()){
    $filas[]=$resultado;
  }
  return $filas;
}
}
?>
