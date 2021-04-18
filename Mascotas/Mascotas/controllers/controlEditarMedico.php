<?php
require_once('../models/clsMedico.php');
if (isset($_POST) && !empty($_POST)) {
	$nombre=$_POST['name-medic'];
	$apellido=$_POST['last-name-medic'];
	$correo=$_POST['email-medic'];
	$telefono=$_POST['phone-numer-medic'];
	$tajeta=$_POST['professional-card-medic'];
  $espacialidad=$_POST['speciality-medic'];

	//ME ENTERO DE LAS VARIABLES DE SESION
	session_start();
	//MUESTRO LA VARIABLE DE SESION codigoU
	$id=$_SESSION["codigoU"];

	//crear el objeto
	$objUsuario= new Medico();

		//ENVIAR LAS VARIABLES A LA CLASE con el metodo set de cada variable
		$objUsuario->setId($id);
		$objUsuario->setNombre($nombre);
		$objUsuario->setApellido($apellido);
		$objUsuario->setCorreo($correo);
    $objUsuario->setTelofono($telefono);
    $objUsuario->setTarjetaProfesional($tajeta);
    $objUsuario->setEspecialidad($espacialidad);
		//VERIFICAR QUE LOS DATOS LE HAYAN LLEGADO A LA CLASE con el metodo get de cada variable
		echo $objUsuario->getId()."<br>";
		echo $objUsuario->getNombre()."<br>";
		echo $objUsuario->getApellido()."<br>";
		echo $objUsuario->getCorreo()."<br>";
    echo $objUsuario->getTelefono()."<br>";
    echo $objUsuario->getTarjetaProfesional()."<br>";
    echo $objUsuario->getEspecialidad()."<br>";
		//INVOCAR EL METODO DE MODIFICACION
		$objUsuario->editarMedico();

}
?>
