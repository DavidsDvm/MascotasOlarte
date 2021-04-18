<?php
require_once('../models/clsMedico.php');
if (isset($_POST) && !empty($_POST)) {
	$id=$_POST['id-medic'];
  $nombre=$_POST['name-medic'];
	$apellido=$_POST['last-name-medic'];
	$correo=$_POST['email-medic'];
	$telefono=$_POST['phone-numer-medic'];
	$tarjeta=$_POST['professional-card-medic'];
  $espacialidad=$_POST['speciality-medic'];
  $userfk=$_POST['id-userfk-medic'];
	//crear el objeto
	$objUsuario= new Medico();

		// ENVIAR LAS VARIABLES A LA CLASE con el metodo set de cada variable
    $objUsuario->setId($id);
		$objUsuario->setNombre($nombre);
		$objUsuario->setApellido($apellido);
		$objUsuario->setCorreo($correo);
    $objUsuario->setTelofono($telefono);
    $objUsuario->setTarjetaProfesional($tarjeta);
    $objUsuario->setEspecialidad($espacialidad);
    $objUsuario->setIdUsuario($userfk);
		//VERIFICAR QUE LOS DATOS LE HAYAN LLEGADO A LA CLASE con el metodo get de cada variable
		// echo $objUsuario->getId()."<br>";
		// echo $objUsuario->getNombre()."<br>";
		// echo $objUsuario->getApellido()."<br>";
		// echo $objUsuario->getCorreo()."<br>";
    // echo $objUsuario->getTelefono()."<br>";
    // echo $objUsuario->getTarjetaProfesional()."<br>";
    // echo $objUsuario->getEspecialidad()."<br>";
    // echo $objUsuario->getIdUsuario()."<br>";
		//INVOCAR EL METODO DE MODIFICACION
		$objUsuario->crearMedico();


}
?>
