<?php
require_once('../models/clsUsuario.php');;
if (isset($_POST) && !empty($_POST)) {
	$id=$_POST['id-user'];
	$nombre=$_POST['name-user'];
	$apellido=$_POST['last-name-user'];
	$correo=$_POST['email-numer-user'];
	$telefono=$_POST['phone-numer-user'];
	$direccion=$_POST['cll-numer-user'];
	$password=$_POST['pass-user'];
	$repass=$_POST['re-pass-user'];
  $rol=$_POST['tipe-user'];

	//crear el objeto
	$objUsuario= new Usuario();

	if($password==$repass){
		// ENVIAR LAS VARIABLES A LA CLASE con el metodo set de cada variable
    $objUsuario->setId($id);
		$objUsuario->setNombre($nombre);
		$objUsuario->setApellido($apellido);
		$objUsuario->setCorreo($correo);
    $objUsuario->setTelofono($telefono);
    $objUsuario->setDireccion($direccion);
    $objUsuario->setPassword($password);
    $objUsuario->setRol($rol);
		//VERIFICAR QUE LOS DATOS LE HAYAN LLEGADO A LA CLASE con el metodo get de cada variable
		echo $objUsuario->getId()."<br>";
		echo $objUsuario->getNombre()."<br>";
		echo $objUsuario->getApellido()."<br>";
		echo $objUsuario->getCorreo()."<br>";
    echo $objUsuario->getTelefono()."<br>";
    echo $objUsuario->getDireccion()."<br>";
    echo $objUsuario->getPassword()."<br>";
    echo $objUsuario->getRol()."<br>";
		//INVOCAR EL METODO DE MODIFICACION
		$objUsuario->crearUsuario();

	}else{
		header('Location: ../view/add_user.php?mensaje=errorclave');
	}


}
?>
