<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mascotas Olarte</title>
    <link rel="stylesheet" href="../help/css/bootstrap.css">
    <link rel="stylesheet" href="../help/css/style_register.css">
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
              <a class="nav-link" href="login.php">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="register.php">Registro</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

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
            if ($mensaje=='correcto') {
              $nombre=$_GET['nombre'];
              $correo=$_GET['correo'];
            }
          }
        }
      }
    ?>
    <form method="POST" action="../controllers/controlRegistro.php">
      <div class="container-login100">
  		 <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
  			<form class="login100-form validate-form">
  				<span class="login100-form-title p-b-37">
  					Registrate con tus datos
  				</span>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el id del usuario">
            <input class="input100" type="number" name="id-user" placeholder="Digite el id del usuario" >
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el nombre del usuario">
            <input class="input100" value="<?php echo $nombre; ?>" type="text" name="name-user" placeholder="Digite el nombre del usuario" >
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el apellido del usuario">
            <input class="input100" type="text" name="last-name-user" placeholder="Digite el apellido del usuario" >
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el correo del usuario">
            <input class="input100" value="<?php echo $correo; ?>" type="email" name="email-numer-user" placeholder="Digite el correo del usuario" >
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite el telefono del usuario">
            <input class="input100" type="number" name="phone-numer-user" placeholder="Digite el telefono del usuario" >
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite la direccion del usuario">
            <input class="input100" type="text" name="cll-numer-user" placeholder="Digite la direccion del usuario" >
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Digite la contraseña del usuario">
            <input class="input100" type="password" name="pass-user" placeholder="Digite la contraseña del usuario" >
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-20" data-validate="Confirmación de la contraseña">
            <input required maxlenght='32' class="input100" type="password" name="re-pass-user" placeholder="Confirmación de la contraseña">
            <span class="focus-input100"></span>
          </div>
  				<div class="container-login100-form-btn">
  					<button class="login100-form-btn">
  						Registrate
  					</button>
  				</div>
          </form>
  				<div class="text-center p-t-57 p-b-20">
  					<span class="txt1">
  						O Registrate con...
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
  					<a href="login.html" class="txt2 hov1">
  						Ya tienes cuenta? Logeate!
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
