<?php
	require_once('../models/clsMedico.php');
if ($_GET) {
	$id=$_GET['Id'];

	$objUsuario= new Medico();
	$objUsuario->setId($id);
	//INVOCAR METODO PARA TRAER LA VARIABLE FILAS DE LA CLASE
	$filas=$objUsuario->borrarUsuario();

	}
?>
