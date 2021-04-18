<?php
	require_once('../models/clsUsuario.php');
if ($_GET) {
	$id=$_GET['Id'];

	$objUsuario= new Usuario();
	$objUsuario->setId($id);
	session_start();
	$_SESSION["codigoU"]=$id;
	//INVOCAR METODO PARA TRAER LA VARIABLE FILAS DE LA CLASE
	$filas=$objUsuario->consultarPorCodigo();
	//VALIDAR EL CASO EN QUE EL CODIGO NO EXISTA EN LA TABLA USUARIOS
	if ($filas==null) {
		header('Location: ../view/editarUsuario.php?mensaje=incorrecto');
	}else{
		foreach ($filas as $fila) {
			$nombre=$fila['nombreUsuario'];
			$apellido=$fila['apellidoUsuario'];
			$correo=$fila['correoUsuario'];
			$telefono=$fila['telefonoUsuario'];
			$direccion=$fila['direccionUsuario'];
			$tipo=$fila['rolUsuario'];

			echo $nombre."<br>";
			echo $apellido."<br>";
			echo $correo."<br>";
			echo $telefono."<br>";
			echo $direccion."<br>";
			echo $tipo;
			//PASAR LAS VARIABLES AL FORMULARIO A TRAVÉS DEL ENLACE
			header('Location: ../view/editarUsuario.php?mensaje=correcto&nombre='.$nombre.'&apellido='.$apellido. '&correo='.$correo. '&telefono='.$telefono. '&direccion='.$direccion. '&tipo='.$tipo);
		}

	}
}
?>
