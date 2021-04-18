<?php
session_start();
if (isset($_SESSION['usuario'])) {
	$usuario=$_SESSION['usuario'];
	$cargo=$_SESSION['cargo'];
}else{
	header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mascotas Olarte</title>
    <link rel="stylesheet" href="../help/css/bootstrap.css">
    <link rel="stylesheet" href="../help/css/style_add_user.css">

  </head>
  <body>

    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">
            <img src="../help/img/Logo_Mascotas_Olarte.png" alt="logo compania" id="Logo-navbar">
          </a>
          <ul class="nav nav-pills ml-auto">
            <li class="nav-item" id="button-active-1">
              <a class="nav-link" href="main_menu.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medic.php">Medico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="user.php">Usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="patient.php">Paciente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="diary.php">Agenda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medical-history.php">Historia Clinica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="exam.php">Examen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medical-consultation.php">Consulta Medica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="diagnostic.php">Diagnostico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php">SALIR</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

		<div class="content">
			<form method="POST" action="../controllers/controlCrearUsuario.php">
		    <div class="container-login100">
		  		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
		  			<form class="login100-form validate-form" method="post" action="medic-new.php">
							<span class="login100-form-sub-title p-b-37 mensaje-text-green">
								<?php
								if($_GET){
									$mensaje=$_GET['mensaje'];
									if($mensaje=='errorclave'){
										echo "La clave y la confirmación no coinciden, verifique y reintente";
										}else{
											if($mensaje=='crearok'){
												echo "Datos Creados Correctamente";
											}else {
												if ($mensaje=='crearerror') {
													echo "Error en los datos, PUEDE TENER ERROR EN EL ID o en DATOS";
												}
											}
										}
									}
								?>
		  				</span>
		  				<span class="login100-form-title p-b-37">
		  					Digite los datos del nuevo usuario
		  				</span>
		          <span class="login100-form-sub-title p-b-37">
		  					Aqui encontrara el formulario para llenar los datos del nuevo usuario
		  				</span>
							<div class="wrap-input100 validate-input m-b-20" data-validate="Digite el id del usuario">
			          <input maxlength="32" required class="input100" type="number" name="id-user" placeholder="Digite el id del usuario" >
			          <span class="focus-input100"></span>
			        </div>
		          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el nombre del usuario">
		  					<input maxlength="50" required class="input100" type="text" name="name-user" placeholder="Digite el nombre del usuario" >
		  					<span class="focus-input100"></span>
		  				</div>
		          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el apellido del usuario">
		  					<input maxlength="50" required class="input100" type="text" name="last-name-user" placeholder="Digite el apellido del usuario" >
		  					<span class="focus-input100"></span>
		  				</div>
		          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el correo del usuario">
		  					<input maxlength="50" required class="input100" type="email" name="email-numer-user" placeholder="Digite el correo del usuario" >
		  					<span class="focus-input100"></span>
		  				</div>
		          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el telefono del usuario">
		  					<input maxlength="20" required class="input100" type="number" name="phone-numer-user" placeholder="Digite el telefono del usuario" >
		  					<span class="focus-input100"></span>
		  				</div>
		          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite la direccion del usuario">
		  					<input maxlength="50" required class="input100" type="text" name="cll-numer-user" placeholder="Digite la direccion del usuario" >
		  					<span class="focus-input100"></span>
		  				</div>
		          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite la contraseña del usuario">
		  					<input maxlength="20" required class="input100" type="password" name="pass-user" placeholder="Digite la contraseña del usuario" >
		  					<span class="focus-input100"></span>
		  				</div>
							<div class="wrap-input100 validate-input m-b-20" data-validate="Confirmación de la contraseña">
								<input required maxlenght='20' class="input100" type="password" name="re-pass-user" placeholder="Confirmación de la contraseña">
								<span class="focus-input100"></span>
							</div>
		          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el rol del usuario">
		            <select name="tipe-user" class="form-control">
		              <option selected disabled value="">Digite el rol del usuario...</option>
		              <option>Medico</option>
		              <option>Paciente</option>
		              <option>Secretaria</option>
		            </select>
		  					<span class="focus-input100"></span>
		  				</div>
		  				<div class="container-login100-form-btn">
		  					<button class="login100-form-btn">
		  						Crear
		  					</button>
		  				</div>
		  			</form>
		  		</div>
		  	</div>
			</form>
		</div>

    <footer id="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <p>Creado por David Vargas Monroy - Kevin David Rodriguez Riveros</p>
                    <p>desarrollo <a href="http://www.tecnicopiloto.edu.co/">Grupo de trabajo SISTEMAS</a></p>
                </div>
                <div class="col-sm-3">
                    <ul class="list-unstyled">
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="about_us.php">Acerca de Nosotros</a></li>
                        <li><a href="services.php">Últimas noticias</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="list-unstyled">
                        <li><a href="http://facebook.com">facebook</a></li>
                        <li><a href="http://twitter.com">twitter</a></li>
                        <li><a href="http://youtube.com">youtube</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h6>Info</h6>
                    <p>Proyecto desarollado con fines no comerciales</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

   </body>
  </html>
