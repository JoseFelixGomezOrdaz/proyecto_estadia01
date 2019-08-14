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
if($usuario == null || $usuario= ''){
    header("Location:index.php");
}

?>

  <body>
    <header>
      <div class="contenedor">
          <nav><ul>
          <li class="actual"><a href="inicio.php">Inicio</a></li>
          <li><a href="usuarios/lista_usuarios.php">Usuarios</a></li>
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
      <br><br><br>
      <?php
        $nombre= $_SESSION['nombre'];
        $apellido_p= $_SESSION['apellido_p'];
        echo "<h1>Bienvenido $nombre $apellido_p</h1>";
      ?>
    </center>
  </body>
</html>
