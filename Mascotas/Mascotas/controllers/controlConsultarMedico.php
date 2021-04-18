<?php
	require_once('../models/clsMedico.php');
if ($_GET) {
	$id=$_GET['Id'];

	$objUsuario= new Medico();
	$objUsuario->setId($id);
	session_start();
	$_SESSION["codigoU"]=$id;
	//INVOCAR METODO PARA TRAER LA VARIABLE FILAS DE LA CLASE
	$filas=$objUsuario->consultarPorCodigo();
	//VALIDAR EL CASO EN QUE EL CODIGO NO EXISTA EN LA TABLA USUARIOS
	if ($filas==null) {
		header('Location: ../view/editarMedico.php?mensaje=incorrecto');
	}else{
		foreach ($filas as $fila) {
			$nombre=$fila['nombreMedico'];
			$apellido=$fila['apellidoMedico'];
			$telefono=$fila['telefonoMedico'];
			$correo=$fila['correoMedico'];
			$tarjeta=$fila['tarjetaProfesional'];
			$especialidad=$fila['especialidadMedico'];

			echo $nombre."<br>";
			echo $apellido."<br>";
			echo $telefono."<br>";
			echo $correo."<br>";
			echo $tarjeta."<br>";
			echo $especialidad;
			//PASAR LAS VARIABLES AL FORMULARIO A TRAVÉS DEL ENLACE
			header('Location: ../view/editarMedico.php?mensaje=correcto&nombre='.$nombre.'&apellido='.$apellido. '&telefono='.$telefono. '&correo='.$correo. '&tarjeta='.$tarjeta. '&especialidad='.$especialidad);
		}

	}
}
?>
