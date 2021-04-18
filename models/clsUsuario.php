<?php
require_once('conexion.php');
  class Usuario extends conexion{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $direccion;
    private $password;
    private $rol;
    private $estado;

    public function __construct(){
      $this->db=parent::__construct();
    }

    //ENCAPSULAMIENTO------------------
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

    public function getPassword(){
      return $this->password;
    }

    public function setPassword($contrasena){
     $this->password=$contrasena;
    }

    public function getRol(){
      return $this->rol;
    }

    public function setRol($role){
     $this->rol=$role;
    }

    public function getEstado(){
      return $this->estado;
    }

    public function setEstado($state){
     $this->estado=$state;
    }

    public function login(){
      $consulta=$this->db->prepare("CALL loginUsuario(:Usuario, :Clave)");
      $consulta->bindParam(':Usuario',$this->correo);
      $consulta->bindParam(':Clave',$this->password);
      $consulta->execute();
      if ($consulta->rowCount()==1) {
        return true;
      }
      else {
        return false;
      }
    }

    public function consultarTodos(){
      $consulta=$this->db->prepare("CALL consultarTablaCompletaUsuario");
      $filas=null;
      $consulta->execute();
    while($resultado=$consulta->fetch()){
      $filas[]=$resultado;
    }
    return $filas;
  }

  public function consultarPorCodigo(){
    $filas=null;
    $consulta=$this->db->prepare("CALL consultarXCodigo(:Id)");
    $consulta->bindParam(':Id', $this->id);
    $consulta->execute();
    while ($resultado=$consulta->fetch()) {
      $filas[]=$resultado;
    }
    return $filas;

  }

  public function consultarTipo(){
    $filas=null;
    $consulta=$this->db->prepare("CALL consultarTipoUsuario(:name)");
    $consulta->bindParam(':name',$this->correo);
    $consulta->execute();
    while ($resultado=$consulta->fetch()) {
      $filas[]=$resultado;
    }
    return $filas;
  }

  public function crearUsuario(){
    $consulta=$this->db->prepare("INSERT INTO usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) VALUES (:Id, :name, :surname, :email, :phone, :direction, :clave, :rol, 'Activo')");
    $consulta->bindParam(':Id', $this->id);
    $consulta->bindParam(':name', $this->nombre);
    $consulta->bindParam(':surname', $this->apellido);
    $consulta->bindParam(':email', $this->correo);
    $consulta->bindParam(':phone', $this->telefono);
    $consulta->bindParam(':direction', $this->direccion);
    $consulta->bindParam(':clave', $this->password);
    $consulta->bindParam(':rol', $this->rol);

    if($consulta->execute()){
      header('Location: ../view/add_user.php?mensaje=crearok');
    }else {
      header('Location ../view/add_user.php?mensaje=crearerror');
    }

  }

  public function registrarUsuario(){
    $consulta=$this->db->prepare("INSERT INTO usuario(idUsuario, nombrem,Usuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) VALUES (:Id, :name, :surname, :email, :phone, :direction, :clave, 'Paciente', 'Activo')");
    $consulta->bindParam(':Id', $this->id);
    $consulta->bindParam(':name', $this->nombre);
    $consulta->bindParam(':surname', $this->apellido);
    $consulta->bindParam(':email', $this->correo);
    $consulta->bindParam(':phone', $this->telefono);
    $consulta->bindParam(':direction', $this->direccion);
    $consulta->bindParam(':clave', $this->password);

    if($consulta->execute()){
      header('Location: ../view/register.php?mensaje=crearok');
    }else {
      header('Location ../view/register.php?mensaje=crearerror');
    }

  }

  public function editarUsuario(){
    $consulta=$this->db->prepare("Call editarUsuario(:Id,:name,:surname,:email,:phone,:direction,:clave,:rol)");
    $consulta->bindParam(':name', $this->nombre);
    $consulta->bindParam(':surname', $this->apellido);
    $consulta->bindParam(':email', $this->correo);
    $consulta->bindParam(':phone', $this->telefono);
    $consulta->bindParam(':direction', $this->direccion);
    $consulta->bindParam(':clave', $this->password);
    $consulta->bindParam(':rol', $this->rol);
    $consulta->bindParam(':Id', $this->id);

    if($consulta->execute()){
      header('Location: ../view/editarUsuario.php?mensaje=editarok');
    }else {
      header('Location ../view/editarUsuario.php?mensaje=editarerror');
    }

  }

  public function borrarUsuario(){
    $consulta=$this->db->prepare("CALL EliminarUsuario(:Id);");
    $consulta->bindParam(':Id', $this->id);

    if($consulta->execute()){
      header('Location: ../view/user.php?mensaje=borrarok');
    }else {
      header('Location ../view/user.php?mensaje=borrarbad');
    }

  }

  }

?>
