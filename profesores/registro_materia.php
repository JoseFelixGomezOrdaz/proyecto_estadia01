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
    <title>Registro materia</title>
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="../assets/css/estilos1.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
          <nav><ul>
          <li><a href="inicio.php">Inicio</a></li>
          <li class="actual"><a href="registro_materia.php">Nueva materia</a></li>
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
    <form action="guardar_materia.php" method="post">
      <center>
        <br><br>
        <h1>Registro De Planeacion</h1>
      <table border="0px">
        <thcad>
          <tr>
            <td><input type="text" name="nombre_materia"  required placeholder="Nombre de la materia" pattern="[A-Z a-z ñ]+"></td>
            <td><input type="text" name="periodo" required placeholder="Periodo" pattern="[A-Z a-z -]+"></td>
          <tr>
            <td><input type="text" name="carrera"  required placeholder="carreara" pattern="[A-Z a-z ñ]+"></td>
            <td><label for="Name">Cuatrimestre</label>
            <select name="cuatri">
              <option value="primero">Primero</option>
              <option value="segundo">Segundo</option>
              <option value="tercero">Tercero</option>
              <option value="cuarto">cuarto</option>
              <option value="quinto">Quinto</option>
              <option value="septimo">Septimo</option>
              <option value="octavo">Octavo</option>
              <option value="noveno">Noveno</option>
              <option value="decimo">Decimo</option>
              <option value="onceavo">Onceavo</option>
            </select></td>
          </tr>
          </thcad>
          </table>
          <input type="submit" value="Guardar">
      </center>
    </form>
    </body>
</html>
