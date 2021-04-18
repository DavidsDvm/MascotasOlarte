<?php
require_once('conexion.php');
  class Medico  extends conexion{
    private $id;
    private $nombre;
    private $apellido;
    private $telefono;
    private $correo;
    private $tarjetaProfesional;
    private $especialidad;
    private $estado;
    private $idUsuario;

   public function __construct(){
     $this->db=parent::__construct();
   }
   // ENCAPSULAMIENTO-----------------------
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

   public function getTelefono(){
     return $this->telefono;
   }
   public function setTelofono($phone){
    $this->telefono=$phone;
   }

   public function getCorreo(){
     return $this->correo;
   }
   public function setCorreo($mail){
    $this->correo=$mail;
   }

   public function getTarjetaProfesional(){
     return $this->tarjetaProfesional;
   }
   public function setTarjetaProfesional($professionalcard){
     $this->tarjetaProfesional=$professionalcard;
   }

   public function getEspecialidad(){
     return $this->especialidad;
   }
   public function setEspecialidad($especial){
     $this->especialidad=$especial;
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
     $consulta=$this->db->prepare("CALL consultarTablaCompletaMedico");
     $filas=null;
     $consulta->execute();
   while($resultado=$consulta->fetch()){
     $filas[]=$resultado;
   }
   return $filas;
 }

  public function consultarPorCodigo(){
    $filas=null;
    $consulta=$this->db->prepare("Call consultarXCodigoMedico(:Id)");
    $consulta->bindParam(':Id', $this->id);
    $consulta->execute();
    while ($resultado=$consulta->fetch()) {
      $filas[]=$resultado;
    }
    return $filas;

  }

  public function editarMedico(){
    $consulta=$this->db->prepare("CALL editarMedico(:Id,:name,:surname,:phone,:email,:tarjeta,:especialidad)");
    $consulta->bindParam(':name', $this->nombre);
    $consulta->bindParam(':surname', $this->apellido);
    $consulta->bindParam(':email', $this->correo);
    $consulta->bindParam(':phone', $this->telefono);
    $consulta->bindParam(':tarjeta', $this->tarjetaProfesional);
    $consulta->bindParam(':especialidad', $this->especialidad);
    $consulta->bindParam(':Id', $this->id);

    if($consulta->execute()){
      header('Location: ../view/editarMedico.php?mensaje=editarok');
    }else {
      header('Location ../view/editarMedico.php?mensaje=editarerror');
    }

  }

  public function crearMedico(){
    $consulta=$this->db->prepare("INSERT INTO Medico(idMedico, nombreMedico, apellidoMedico, correoMedico, telefonoMedico, tarjetaProfesional, especialidadMedico, idUsuarioFK, estadoMedico) VALUES (:Id, :name, :surname, :email, :phone, :tarjeta, :espacialidad, :idfk, 'Activo')");
    $consulta->bindParam(':Id', $this->id);
    $consulta->bindParam(':name', $this->nombre);
    $consulta->bindParam(':surname', $this->apellido);
    $consulta->bindParam(':email', $this->correo);
    $consulta->bindParam(':phone', $this->telefono);
    $consulta->bindParam(':tarjeta', $this->tarjetaProfesional);
    $consulta->bindParam(':espacialidad', $this->especialidad);
    $consulta->bindParam(':idfk', $this->idUsuario);

    if($consulta->execute()){
      header('Location: ../view/add_medic.php?mensaje=crearok');
    }else {
      header('Location ../view/add_medic.php?mensaje=crearerror');
    }

  }

  public function borrarUsuario(){
    $consulta=$this->db->prepare("CALL EliminarMedico(:Id)");
    $consulta->bindParam(':Id', $this->id);

    if($consulta->execute()){
      header('Location: ../view/medic.php?mensaje=borrarok');
    }else {
      header('Location ../view/medic.php?mensaje=borrarbad');
    }

  }

}

?>
