<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <!--<img src="assets/img/logo.jpeg" align="right" />-->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos1.css">
  </head>
<?php
session_start();
$usuario= $_SESSION['username'];
$tipo_usuario= $_SESSION['tipo_usuario'];
if($tipo_usuario != 'coordinador'){
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
          <li class="actual"><a href="inicio.php">Inicio</a></li>
          <li><a href="usuarios/lista_usuarios.php">Ver Maestros</a></li>
          <li><a href="mostrar_avances.php">Mostrar avances</a></li>
          <li><a href="cambiar_password.php">Cambiar password</a></li>
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
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
        $nombre= $_SESSION['nombre'];
        $apellido_p= $_SESSION['apellido_p'];
        echo "<h1>Bienvenido $nombre $apellido_p</h1>";
      ?>
    </center>
    <br><br><br><br><br><br><br><br><br><br><br><br>
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
