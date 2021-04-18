<?php
require_once('../models/clsUsuario.php');;
if (isset($_POST) && !empty($_POST)) {
	$nombre=$_POST['text_nombre_registro'];
	$correo=$_POST['text_mail_registro'];

	echo "pagina";
	$objUsuario= new Usuario();
	$objUsuario->setNombre($nombre);
	$objUsuario->setCorreo($correo);

	echo $objUsuario->getNombre()."<br>";
	echo $objUsuario->getCorreo()."<br>";
	header('Location: ../view/register.php?mensaje=correcto&nombre='.$nombre.'&correo='.$correo);

}
?>
