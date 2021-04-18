<?php
session_start();
if(isset($_SESSION['usuario'])){
	header('Location: main_menu.php');
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
    <link rel="stylesheet" href="../help/css/style_login.css">

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
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">Sobre nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.php">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Registro</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container-login100" style="background-image: url('fondo.jpg');">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <form method="POST" action="../controllers/controlLogin.php" class="login100-form validate-form">
          <span class="login100-form-title p-b-37">
            Introduce tus datos
          </span>
          <?php
            if($_GET){
              $fallo=$_GET['fallo'];
              if ($fallo=='error') {
                echo "<span class='txt4'> Hay un error en tus credenciales, verifica y vuelve a intentar </span>";
              }
            }
          ?>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
            <input maxlength="50" required class="input100" type="text" name="txtCorreo" placeholder="Nick o correo electronico">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
            <input maxlength="20" required class="input100" type="password" name="txtClave" placeholder="Contrasena">
            <span class="focus-input100"></span>
          </div>
          <div class="container-login100-form-btn">
            <input maxlength="32" required type="submit" name="btnIniciarSesion" class="btn btn-primary" value="Iniciar Sesión">
          </div>
          <div class="text-center p-t-57 p-b-20">
            <span class="txt1">
              O logeate con...
            </span>
          </div>
          <div class="flex-c p-b-112">
            <a href="#" class="login100-social-item">
              <img src="../help/img/icono_facebook.png" alt="FACEBOOK">
            </a>
            <a href="#" class="login100-social-item">
              <img src="../help/img/icono_google.png" alt="GOOGLE">
            </a>
          </div>
          <div class="text-center">
            <a href="register.php" class="txt2 hov1">
              Sign Up
            </a>
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
  <script src="../help/js/jquery-3.4.1.min.js"></script>
  <script src="../help/js/popper.min.js"></script>
  <script src="../help/js/bootstrap.min.js"></script>

 </body>
</html>
