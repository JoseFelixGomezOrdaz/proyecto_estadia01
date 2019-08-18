<?php
require '../conexion.php';
session_start();
$usuario= $_SESSION['username'];
$tipo_usuario= $_SESSION['tipo_usuario'];
if($tipo_usuario != 'profesor'){
  header("Location:../index.php");
}
if($usuario == null || $usuario= ''){
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro unidades</title>
    <link rel="stylesheet" href="css/estilos3.css">
    <link rel="stylesheet" href="css/estilos2.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
          <nav><ul>
          <li><a href="inicio.php">Inicio</a></li>
          <li class="actual"><a href="registro_planeacion.php">Registro unidades</a></li>
          <li><a href="../cerrar.php">Cerrar sesion</a></li>
          </ul></nav>

        </div>
      </div>
       <seccion id="main-col">
        <div class="contenedor">
          <div class="logo">
            <h1>Tracking Activities</h1>
          </div>
        </div>
    </seccion>
    </header>
    <form action="guardar_planeacion.php" method="post">
      <center>
        <br><br>
        <h1>Registro De Planeacion</h1>
      <table border="0px">
        <thcad>
          <tr>
            <td><input type="number" name="numero_unidad"  required step="any" min="1" max="20" placeholder="Numero de unidad"></td>
            <td><input type="text" name="nombre_unidad"  required placeholder="Nombre de unidad" pattern="[A-Z a-z]+"></td>
            <td><input type="number" name="horas_practicas"  required placeholder="Horas practicas" min="0" max="200"></td>
          </tr>
          <tr>
            <td><br><input type="number" name="horas_teoricas"  required placeholder="Horas teoricas" min="0" max="200"></td>
            <td><label for="Name">Fecha de inicio de planeacion</label><input type="date" name="fecha_inicio_planeacion"  required  min="2019-01-01" max="2050-12-31"></td>
            <td><label for="Name">Fecha de termino de planeacion</label><input type="date" name="fecha_termino_planeacion"  required  min="2019-01-01" max="2050-12-31"></td>
          </tr>
          <tr>
            <td><label for="Name">Fecha de inicio de ejecucion</label><input type="date" name="fecha_inicio_ejecucion"  required  min="2019-01-01" max="2050-12-31"></td>
            <td><label for="Name">Fecha de termino de ejecucion</label><input type="date" name="fecha_termino_ejecucion"  required  min="2019-01-01" max="2050-12-31"></td>
            <td><br><textarea name="actividades_docente" required placeholder="Actividades del docente"></textarea></td>
          <tr>
            <td><textarea name="actividades_estudiante" required placeholder="Actividades del estudiante"></textarea></td>
            <td><textarea name="instrumentos_evaluacion" required placeholder="Instrumentos de evaluacion"></textarea></td>
            <td><textarea name="evidencia" required placeholder="Evidencia"></textarea></td>
          </tr>
          <tr>
            <td><input type="number" name="ponderacion"  required placeholder="Ponderacion"  mini="1" max="100"></td>
            <td><textarea name="observaciones" required placeholder="Observaciones"></textarea>
          </tr>

          </thcad>
          </table>
          <input type="submit" value="Guardar">
      </center>
    </form>
    <br><br><br><br>
    <div class="footer-min-div">
      <div class="footer-social-icons">
        <center><h2 class="tituloo">Siguenos en:</h2></center>
        <ul>
          <li><a href="https://facebook.com" target="blank"><img src="img/facebook.png" alt="" width="60" height="60"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com" target="blank"><img src="img/twitter.jpg" alt="" width="60" height="60"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://instagram.com" target="blank"><img src="img/instagram.jpg" alt="" width="60" height="60"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  <div class="footer-bottom">
    <p>©Todos los derechos recervados Tracking Activities 2019</p>
  </div>
    </body>
</html>
