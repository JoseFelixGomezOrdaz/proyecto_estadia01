<?php
session_start();
$usuario= $_SESSION['username'];
if($usuario == null || $usuario= ''){
    header("Location:../index.php");
}
require '../conexion.php';
$nombre_materia= $_POST['nombre_materia'];
$periodo= $_POST['periodo'];
$carrera= $_POST['carrera'];
$cuatri= $_POST['cuatri'];
$usuario= $_SESSION['username'];

$usuario= $_SESSION['username'];
$query= "INSERT INTO materia (usuario, nombre_materia, periodo, carrera, grupo)VALUES('$usuario', '$nombre_materia', '$periodo', '$carrera', '$cuatri')";
if($resultado=mysqli_query($conexion, $query)){
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <script type="text/javascript">
        alert("Se guarado la materia");
        window.location="registro_planeacion.php";
      </script>
    </body>
  </html>
  <?php
  //echo "Registro almacenado en la BD";
  //header("Location:index.php");
}else{ ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <script type="text/javascript">
        alert("Error al guardar la planeacion");
        window.location="registro_materia.php";
      </script>
    </body>
  </html>
  <?php
}
  ?>
