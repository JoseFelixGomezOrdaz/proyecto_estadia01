<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <!--<img src="assets/img/logo.jpeg" align="right" />-->
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="../assets/css/estilos1.css">
  </head>
<?php
session_start();
$usuario= $_SESSION['username'];
if($usuario == null || $usuario= ''){
    header("Location:../index.php");
}

?>

  <body>
    <header>
      <div class="contenedor">
          <nav><ul>
          <li><a href="inicio.php">Inicio</a></li>
          <li><a href="registro_materia.php">Nueva planeacion</a></li>
          <li><a href="horario/lista_horario.php">Horario</a></li>
          <li  class="actual"><a href="cambiar_password.php">Cambiar password</a></li>
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
    <center>
      <br><br><br>
      <h1>Cambio de password</h1>
      <form action="actualizar_password.php" method="post">
        <table border="0px">
          <thcad>
            <tr>
              <td><input type="password" name="password_actual" required placeholder="Password actual"></td>
            </tr>
            <tr>
              <td><input type="password" name="nueva_password" required placeholder="Nueva password"></td>
            </tr>
            <tr>
              <td><input type="password" name="conf_password" required placeholder="Confirmar password"></td>
            </tr>
            </thcad>
            </table>
            <input type="submit" value="Guardar">
      </form>
    </center>
  </body>
</html>
