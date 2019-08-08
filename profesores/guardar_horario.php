<?php
session_start();
$usuario= $_SESSION['username'];
if($usuario == null || $usuario= ''){
    header("Location:../index.php");
}
require '../conexion.php';
$grupo= $_POST['grupo'];
$materia= $_POST['materia'];
$lunes_inicio= $_POST['lunes_inicio'];
$lunes_termino= $_POST['lunes_termino'];
$lugar_lunes= $_POST['lugar_lunes'];
$martes_inicio= $_POST['martes_inicio'];
$martes_termino= $_POST['martes_termino'];
$lugar_martes= $_POST['lugar_martes'];
$miercoles_inicio= $_POST['miercoles_inicio'];
$miercoles_termino= $_POST['miercoles_termino'];
$lugar_miercoles= $_POST['lugar_miercoles'];
$jueves_inicio= $_POST['jueves_inicio'];
$jueves_termino= $_POST['jueves_termino'];
$lugar_jueves= $_POST['lugar_jueves'];
$viernes_inicio= $_POST['viernes_inicio'];
$viernes_termino= $_POST['viernes_termino'];
$lugar_viernes= $_POST['lugar_viernes'];
$sabado_inicio= $_POST['sabado_inicio'];
$sabado_termino= $_POST['sabado_termino'];
$lugar_sabado= $_POST['lugar_sabado'];

/*echo "('$usuario', '$grupo', '$materia', '$lunes_inicio', '$lunes_termino', '$lugar_lunes', '$martes_inicio', '$martes_termino',
'$lugar_martes', '$miercoles_inicio', '$miercoles_termino', '$lugar_miercoles', '$jueves_inicio', '$jueves_termino', '$lugar_jueves', '$viernes_inicio',
'viernes $viernes_termino', '$lugar_viernes', '$sabado_inicio', '$sabado_termino', '$lugar_sabado'";*/
$usuario= $_SESSION['username'];
$query= "INSERT INTO horario (usuario, grupo, materia, lunes_inicio, lunes_termino, lugar_lunes, martes_inicio, martes_termino, lugar_martes, miercoles_inicio, miercoles_termino, lugar_miercoles, jueves_inicio, jueves_termino, lugar_jueves, viernes_inicio, viernes_termino, lugar_viernes, sabado_inicio, sabado_termino, lugar_sabado)VALUES
  ('$usuario', '$grupo', '$materia', '$lunes_inicio', '$lunes_termino', '$lugar_lunes', '$martes_inicio', '$martes_termino',
  '$lugar_martes', '$miercoles_inicio', '$miercoles_termino', '$lugar_miercoles', '$jueves_inicio', '$jueves_termino', '$lugar_jueves', '$viernes_inicio',
  '$viernes_termino', '$lugar_viernes', '$sabado_inicio', '$sabado_termino', '$lugar_sabado')";
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
        alert("Se guarado el horario");
        window.location="horario/lista_horario.php";
      </script>
    </body>
  </html>
  <?php

}else{ ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <script type="text/javascript">
        alert("Error al guardar el horario");
        window.location="registro_horario.php";
      </script>
    </body>
  </html>
  <?php
}
  ?>
