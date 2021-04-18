<?php
	require_once('../models/clsUsuario.php');
if ($_GET) {
	$id=$_GET['Id'];

	$objUsuario= new Usuario();
	$objUsuario->setId($id);
	//INVOCAR METODO PARA TRAER LA VARIABLE FILAS DE LA CLASE
	$filas=$objUsuario->borrarUsuario();

	}
?>
