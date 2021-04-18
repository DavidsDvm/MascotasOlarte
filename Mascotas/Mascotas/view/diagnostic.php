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
    <link rel="stylesheet" href="../help/css/style_diagnostic.css">

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
							<a class="nav-link" href="main_menu.php">Inicio</a>
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
							<a class="nav-link active" href="diagnostic.php">Diagnóstico</a>
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
							<a class="nav-link" href="main_menu.php">Inicio</a>
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
							<a class="nav-link active" href="diagnostic.php">Diagnóstico</a>
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
							<a class="nav-link" href="main_menu.php">Inicio</a>
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
							<a class="nav-link active" href="diagnostic.php">Diagnóstico</a>
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

    <table class="table-crud table table-bordered">
      <thead class="thead-crud">
        <tr>
          <th scope="col">idDiagnostico</th>
          <th scope="col">Descripcion </th>
          <th scope="col">idConsultafk</th>
          <th scope="col"><button type="button" class="btn btn-success" onclick="location.href='add_diagnostic.php'">Agregar Nuevo</button></th>
        </tr>
      </thead>
			<tbody>
        <?php
        require_once('../models/clsDiagnostico.php');
        $objeto=new Diagnostico();
        $filas=$objeto->consultarTodos();
        if ($filas !=null){
          foreach ($filas as $fila) {
        ?>
        <tr>
          <td class="crud-text-blue"><?php echo $fila['idDiagnostico']; ?></td>
          <td class="crud-text-green"><?php echo $fila['Describcion']; ?></td>
          <td class="crud-text-blue"><?php echo $fila['idConsultafk']; ?></td>
          <td>
            <div class="btn-group btn-group-crud" role="group" aria-label="Basic example">
              <button type="button" onclick="location.href='../controllers/controlConsultarMedico.php?Id=<?php echo $fila['idMedico']; ?>'" class="btn btn-warning btn-crud">Editar</button>
              <button type="button" onclick="location.href='../controllers/controlEliminarMedico.php?Id=<?php echo $fila['idMedico']; ?>'" class="btn btn-danger btn-crud">Eliminar</button>
            </div>
          </td>
        </tr>
        <?php
            }
         }
        ?>
			</tbody>
    </table>

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
