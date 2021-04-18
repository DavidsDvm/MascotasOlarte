<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mascotas Olarte</title>
    <link rel="stylesheet" href="../help/css/bootstrap.css">
    <link rel="stylesheet" href="../help/css/style_main_menu.css">

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
					<?php
					if($cargo=='Admin'){
					?>
          <ul class="nav nav-pills ml-auto">
            <li class="nav-item" id="button-active-1">
              <a class="nav-link active" href="main_menu.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medic.php">Médico</a>
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
              <a class="nav-link" href="medical-history.php">Historia Clínica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="exam.php">Examen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medical-consultation.php">Consulta Médica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="diagnostic.php">Diagnóstico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controllers/controlCerrarSesion.php">SALIR</a>
            </li>
          </ul>
					<?php
					}
					if($cargo=='Paciente'or$cargo=='Usuario'){
					?>
					<ul class="nav nav-pills ml-auto">
						<li class="nav-item" id="button-active-1">
              <a class="nav-link active" href="main_menu.php">Inicio</a>
            </li>
						<li class="nav-item">
							<a class="nav-link" href="medical-consultation.php">Consulta Médica</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="medical-history.php">Historia Clínica</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../controllers/controlCerrarSesion.php">SALIR</a>
						</li>
					</ul>
					<?php
					}
					if($cargo=='Secretaria'){
					?>
					<ul class="nav nav-pills ml-auto">
            <li class="nav-item" id="button-active-1">
              <a class="nav-link active" href="main_menu.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medic.php">Médico</a>
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
              <a class="nav-link" href="medical-history.php">Historia Clínica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="exam.php">Examen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medical-consultation.php">Consulta Médica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="diagnostic.php">Diagnóstico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controllers/controlCerrarSesion.php">SALIR</a>
            </li>
          </ul>
					<?php
					}
					if($cargo=='Medico'){
					?>
					<ul class="nav nav-pills ml-auto">
            <li class="nav-item" id="button-active-1">
              <a class="nav-link active" href="main_menu.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="diary.php">Agenda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medical-history.php">Historia Clínica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="exam.php">Examen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medical-consultation.php">Consulta Médica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="diagnostic.php">Diagnóstico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controllers/controlCerrarSesion.php">SALIR</a>
            </li>
          </ul>
					<?php
					}
					?>
        </div>
      </nav>
    </header>

    <section id="acerca-de">
        <div class="contenido-seccion">
            <div class="container">
                <div class="col-md-6">
                    <div class="texto-acerca-de">
                        <h3>Bienvenido <?php echo $usuario." cargo: ".$cargo; ?></h3>
                        <p class="lead">Aquí puede modificar datos, y agregar a nuevo personal que disponga en la empresa, ademas de poder modificar los datos</p>
                        <p>Dispone de todas las opciones de la parte superior para poder modificar datos, recuerde usar sus permisos con discrecion, cualquier dato modificado/creado no tiene vuelta atras!!.</p>
                        <h4>GRACIAS</h4>
                        <a href="main_menu.php" class="btn btn-sm btn-secondary-outline">Inicio</a>
                        <a href="../controllers/controlCerrarSesion.php" class="btn btn-sm btn-secondary-outline">Salir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
