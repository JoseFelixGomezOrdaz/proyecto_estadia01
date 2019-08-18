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
    <title>Registro materia</title>
    <link rel="stylesheet" href="css/estilos3.css">
    <link rel="stylesheet" href="css/estilos2.css">
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
        <br><br>
      <table border="0px">
        <thcad>
          <tr>
            <td><br><input type="text" name="nombre_materia"  required placeholder="Nombre de la materia" pattern="[A-Z a-z ñ]+"></td>
            <td><label for="Name">Periodo</label>
            <select name="periodo">
              <option value="enero-abril">Enero-Abril</option>
              <option value="mayo-agosto">Mayo-Agosto</option>
              <option value="septiembre-diciembre">Septiembre-Diciembre</option>
            </select></td>
          <tr>
            <td><br><input type="text" name="carrera"  required placeholder="Carrera" pattern="[A-Z a-z ñ]+"></td>
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
