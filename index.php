<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/estilos1.css">
  </head>
  <body>
    <header>
       <seccion id="main-col">
        <div class="contenedor">
          <div class="logo">
            <h1>Tracking Activities</h1>
          </div>
        </div>
    </seccion>
    </header>
    <center>
      <br><br><br><br>
      <form action="loguear.php" method="post">
        <h1 class="tituloo">Iniciar sesion</h1>
        <input type="text" name="usuario" required placeholder="Usuario">
        <input type="password" name="password" required placeholder="Password">
        <input type="submit" value="Iniciar">

      </form>
    </center>
    <br><br><br><br>
    <div class="footer-min-div">
      <div class="footer-social-icons">
        <center><h2 class="tituloo">Siguenos en:</h2></center>
        <ul>
          <li><a href="https://facebook.com" target="blank"><img src="assets/img/facebook.png" alt="" width="60" height="60"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com" target="blank"><img src="assets/img/twitter.jpg" alt="" width="60" height="60"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://instagram.com" target="blank"><img src="assets/img/instagram.jpg" alt="" width="60" height="60"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  <div class="footer-bottom">
    <p>©Todos los derechos recervados Tracking Activities 2019</p>
  </div>
  </body>
</html>
