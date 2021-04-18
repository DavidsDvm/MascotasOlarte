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
    <link rel="stylesheet" href="../help/css/style_add_diagnostic.css">

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
              <a class="nav-link active" href="diagnostic.php">Diagnostico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php">SALIR</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container-login100">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <form class="login100-form validate-form" method="post" action="medic-new.php">
          <span class="login100-form-title p-b-37">
            Digite los datos del nuevo diagnostico veterinario
          </span>
          <span class="login100-form-sub-title p-b-37">
            Aqui encontrara el formulario para llenar los datos del nuevo diagnostico veterinario
          </span>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el id de diagnostico">
            <input class="input100" type="number" name="diagnostic-id" placeholder="Digite el id de diagnostico" >
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite la describcion del diagnostico">
            <input class="input100" type="text" name="diagnostic-describcion" placeholder="Digite la describcion del diagnostico" >
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el id de la consulta medica">
            <input class="input100" type="number" name="diagnostic-consultfk" placeholder="Digite el id de la consulta medica" >
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
