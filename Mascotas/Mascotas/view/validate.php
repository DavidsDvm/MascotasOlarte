<?php
$usuario=$_POST['username'];
$password=$_POST['pass'];

if ($usuario=="admin@admin.com" && $password=="1234") {
  include 'main_menu.php';
  echo '<script language="javascript">alert("Usted ingreso");</script>';
}
else {
  if ($usuario=="paciente@paciente.com" && $password=="1234") {
    include 'main_menu_paciente.php';
    echo '<script language="javascript">alert("Usted ingreso");</script>';
  } else {
    if ($usuario=="secretaria@secretaria.com" && $password=="1234") {
      include 'main_menu_secretaria.php';
      echo '<script language="javascript">alert("Usted ingreso");</script>';
    } else {
      if ($usuario=="doctor@doctor.com" && $password=="1234") {
        include 'main_menu_doctor.php';
        echo '<script language="javascript">alert("Usted ingreso");</script>';
      } else {
        include 'login.php';
        echo '<script language="javascript">alert("Tiene datos erroneos, porfavor verifique");</script>';
      }

    }

  }

}
?>
