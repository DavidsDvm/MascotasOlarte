<?php
session_start();

session_destroy();//destruye la sesion que se encuentra activa
header('Location: ../view/login.php');//lleva al formulario de login

?>
