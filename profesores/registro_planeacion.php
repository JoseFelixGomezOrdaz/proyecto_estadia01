<?php
require '../conexion.php';
session_start();
$usuario= $_SESSION['username'];
if($usuario == null || $usuario= ''){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro unidades</title>
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="../assets/css/estilos1.css">
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
            <td><input type="number" name="horas_teoricas"  required placeholder="Horas teoricas" min="0" max="200"></td>
            <td><label for="Name">Fecha de inicio de planeacion</label><input type="date" name="fecha_inicio_planeacion"  required  min="2019-01-01" max="2050-12-31"></td>
            <td><label for="Name">Fecha de termino de planeacion</label><input type="date" name="fecha_termino_planeacion"  required  min="2019-01-01" max="2050-12-31"></td>
          </tr>
          <tr>
            <td><label for="Name">Fecha de inicio de ejecucion</label><input type="date" name="fecha_inicio_ejecucion"  required  min="2019-01-01" max="2050-12-31"></td>
            <td><label for="Name">Fecha de termino de ejecucion</label><input type="date" name="fecha_termino_ejecucion"  required  min="2019-01-01" max="2050-12-31"></td>
            <td><textarea name="actividades_docente" required placeholder="Actividades del docente"></textarea></td>
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
    </body>
</html>
