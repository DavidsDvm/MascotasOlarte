<?php
require_once('../models/clsUsuario.php');
	if (isset($_POST) && !empty($_POST)) {
		//CAPTURAR LOS DATOS QUE EL USUARIO DIGITO EN EL FORMULARIO
		$correo=$_POST['txtCorreo'];
		$password=$_POST['txtClave'];
		$objUsuario=new Usuario ();//CREAR UN OBJETO DE LA CLASE USUARIO
		//ENVIAR LOS DATOS DEL FORMULARIO A LA CLASE
		$objUsuario->setCorreo($correo);
		$objUsuario->setPassword($password);//enviar clave encriptada con md5
		//VERIFICAR SI EL LOGIN DE LA CLASE ES TRUE O FALSE
		if ($objUsuario->login()==true) {
			//CREAR UNA VARIABLE DE SESION CON EL NOMBRE DEL USUARIO QUE INGRESA, aprovechando que el nombre es un dato único
			session_start();
			$filas=$objUsuario->consultarTipo();

			foreach ($filas as $fila) {
				$nombre=$fila['nombreUsuario'];
				$tipo=$fila['rolUsuario'];

			$_SESSION["usuario"]=$nombre;
			//CREAR una variable de sesion con el tipo de usuario
			$_SESSION['cargo']=$tipo;
			header('Location: ../view/main_menu.php');
			}
		}else{
			header('Location: ../view/login.php?fallo=error');//envio de error a traves de metodo get
		}
	}
?>
