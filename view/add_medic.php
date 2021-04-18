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
    <link rel="stylesheet" href="../help/css/style_add_medic.css">

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
              <a class="nav-link active" href="medic.php">Medico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.php">Usuario</a>
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

		<form method="POST" action="../controllers/controlCrearMedico.php">
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
						Digite los datos del nuevo medico veterinario
					</span>
	        <span class="login100-form-sub-title p-b-37">
						Aqui encontrara el formulario para llenar los datos del nuevo medico veterinatio
					</span>
	        <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el id de el medico">
	          <input maxlength="32" required class="input100" type="number" name="id-medic" placeholder="Digite el id de el medico" >
	          <span class="focus-input100"></span>
	        </div>
	        <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el nombre del medico">
						<input maxlength="50" required class="input100" type="text" name="name-medic" placeholder="Digite el nombre del medico" >
						<span class="focus-input100"></span>
					</div>
	        <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el apellido del medico">
						<input maxlength="50" required class="input100" type="text" name="last-name-medic" placeholder="Digite el apellido del medico" >
						<span class="focus-input100"></span>
					</div>
	        <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el telefono del medico">
						<input maxlength="20" required class="input100" type="number" name="phone-numer-medic" placeholder="Digite el telefono del medico" >
						<span class="focus-input100"></span>
					</div>
	        <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el correo del medico">
						<input maxlength="100" required class="input100" type="email" name="email-medic" placeholder="Digite el correo del medico" >
						<span class="focus-input100"></span>
					</div>
	        <div class="wrap-input100 validate-input m-b-20" data-validate="Digite la tarjeta profesional del medico">
						<input maxlength="50" required class="input100" type="number" name="professional-card-medic" placeholder="Digite la tarjeta profesional del medico" >
						<span class="focus-input100"></span>
					</div>
	        <div class="wrap-input100 validate-input m-b-20" data-validate="Digite la especialidad del medico">
						<input maxlength="50" required class="input100" type="text" name="speciality-medic" placeholder="Digite la  especialidad del medico" >
						<span class="focus-input100"></span>
					</div>
	        <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el id de usuario del medico">
						<input maxlength="32" required class="input100" type="number" name="id-userfk-medic" placeholder="Digite el id de usuario del medico" >
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
    <script src="../help/js/jquery-3.4.1.min.js"></script>
    <script src="../help/js/popper.min.js"></script>
    <script src="../help/js/bootstrap.min.js"></script>

   </body>
  </html>
