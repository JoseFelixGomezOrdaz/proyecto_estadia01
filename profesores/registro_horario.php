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
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="poyecto">
    <meta name="keywords" content="diceño web,desarrollo web, seo, posicionnamiento web">
    <title>Registro horio</title>
    <link rel="stylesheet" href="css/estilos3.css">
    <link rel="stylesheet" href="css/estilos2.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
          <nav><ul>
          <li><a href="inicio.php">Inicio</a></li>
          <li class="actual"><a href="registro_horario.php">Registro horario</a></li>
          <li><a href="horario/lista_horario.php">Horarios</a></li>
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
    <form action="guardar_horario.php" method="post">
      <center>
        <br><br>
        <h1>Registro De Horario</h1>
      <table border="0px">
        <thcad>
          <tr>
            <td><input type="text" name="grupo"  required placeholder="Grupo" pattern="[A-Z a-z 1-9]+"></td>
            <td><input type="text" name="materia"  required placeholder="Materia" pattern="[A-Z a-z]+"></td>
            <td><input type="text" name="lunes_inicio"  required placeholder="Lunes hora de inicio" pattern="[AMam PMpm 0-9:x]+"></td>
          </tr>
          <tr>
            <td><input type="text" name="lunes_termino"  required placeholder="Lunes hora de termino" pattern="[AMam PMpm 0-9:x]+"></td>
            <td><input type="text" name="lugar_lunes"  required  placeholder="Aula donde se impartira el lunes" pattern="[A-Z a-z 0-9:x]+"></td>
            <td><input type="text" name="martes_inicio"  required placeholder="Martes hora de inicio" pattern="[AMam PMpm 0-9:x]+"></td>
          </tr>
          <tr>
            <td><input type="text" name="martes_termino"  required placeholder="Martes hora de termino" pattern="[AMam PMpm 0-9:x]+"></td>
            <td><input type="text" name="lugar_martes"  required  placeholder="Aula donde se impartira el martes" pattern="[A-Z a-z 0-9]+"></td>
            <td><input type="text" name="miercoles_inicio"  required placeholder="Miercoles hora de inicio" pattern="[AMam PMpm 0-9:x]+"></td>
          <tr>
            <td><input type="text" name="miercoles_termino"  required placeholder="Miercoles hora de termino" pattern="[AMam PMpm 0-9:x]+"></td>
            <td><input type="text" name="lugar_miercoles"  required  placeholder="Aula donde se impartira el miercoles" pattern="[A-Z a-z 0-9]+"></td>
            <td><input type="text" name="jueves_inicio"  required placeholder="Jueves hora de inicio" pattern="[AMam PMpm 0-9:x]+"></td>
          </tr>
          <tr>
            <td><input type="text" name="jueves_termino"  required placeholder="Jueves hora de termino" pattern="[AMam PMpm 0-9:x]+"></td>
            <td><input type="text" name="lugar_jueves"  required  placeholder="Aula donde se impartira el jueves" pattern="[A-Z a-z 0-9]+"></td>
            <td><input type="text" name="viernes_inicio"  required placeholder="Viernes hora de inicio" pattern="[AMam PMpm 0-9:x]+"></td>
          </tr>
          <tr>
            <td><input type="text" name="viernes_termino"  required placeholder="Viernes hora de termino" pattern="[AMam PMpm 0-9:x]+"></td>
            <td><input type="text" name="lugar_viernes"  required  placeholder="Aula donde se impartira el viernes" pattern="[A-Z a-z 0-9]+"></td>
            <td><input type="text" name="sabado_inicio"  required placeholder="Sabado hora de inicio" pattern="[AMam PMpm 0-9:x]+"></td>
          </tr>
          <tr>
            <td><input type="text" name="sabado_termino"  required placeholder="Sabado hora de termino" pattern="[AMam PMpm 0-9:x]+"></td>
            <td><input type="text" name="lugar_sabado"  required  placeholder="Aula donde se impartira el sabado" pattern="[A-Z a-z 0-9]+"></td>
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
