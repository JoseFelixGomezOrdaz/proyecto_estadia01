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
$tipo_usuario= $_SESSION['tipo_usuario'];
if($tipo_usuario != 'administrador'){
  header("Location:../index.php");
}
if($usuario == null || $usuario= ''){
    header("Location:../index.php");
}

?>

  <body>
    <header>
      <div class="contenedor">
          <nav><ul>
          <li><a href="inicio.php">Inicio</a></li>
          <li><a href="usuarios/lista_usuarios.php">Usuarios</a></li>
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
    <br><br><br><br>
    <div class="footer-min-div">
      <div class="footer-social-icons">
        <center><h2 class="tituloo">Siguenos en:</h2></center>
        <ul>
          <li><a href="https://facebook.com" target="blank"><img src="../img/facebook.png" alt="" width="60" height="60"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com" target="blank"><img src="../img/twitter.jpg" alt="" width="60" height="60"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://instagram.com" target="blank"><img src="../img/instagram.jpg" alt="" width="60" height="60"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  <div class="footer-bottom">
    <p>©Todos los derechos recervados Tracking Activities 2019</p>
  </div>
  </body>
</html>
