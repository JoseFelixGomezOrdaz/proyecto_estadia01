<?php
require 'conexion.php';
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
    <title>Inicio</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/estilos1.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
          <nav><ul>
          <li><a href="inicio.php">Inicio</a></li>
          <li class="actual"><a href="registro.php">Nuevo usuario</a></li>
          <li><a href="cerrar.php">Cerrar sesion</a></li>
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
    <form action="guardar_usuario.php" method="post">
      <center>
        <br><br>
        <h1>Registro De Usuario</h1>
      <table border="0px">
        <thcad>
          <tr><th><input type="text" name="nombre" value="<?php if(isset($nombre)) echo $nombre ?>" required placeholder="Nombre" pattern="[A-Z a-z]+"></th>
          <td><input type="text" name="apellido_p" value="<?php if(isset($apellido_p)) echo $apellido_p ?>" required placeholder="Apellido paterno" pattern="[A-Z a-z]+"></td>
          <td><input type="text" name="apellido_m" value="<?php if(isset($apellido_m)) echo $apellido_m ?>" required placeholder="Apellido materno" pattern="[A-Z a-z]+"></td></tr>
          <tr><th><input type="text" name="tipo_u" value="<?php if(isset($tipo_u)) echo $tipo_u ?>" required placeholder="Tipo de usuario" pattern="[A-Z a-z]+"></th>
          <td><input type="number" name="usuario" value="<?php if(isset($usuario)) echo $usuario ?>" required placeholder="No. Empleado" min="1" max="10000"></td>
          <td><input type="email" name="correo" value="<?php if(isset($correo)) echo $correo ?>" required placeholder="Correo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"></td></tr>
          <tr><th><input type="password" name="password" value="<?php if(isset($password)) echo $password ?>" required placeholder="Password"></th>
          <td><input type="password" name="conf_password" value="<?php if(isset($conf_password)) echo $conf_password ?>" required placeholder="Confirmar password"></td></tr>
          </thcad>
          </table>
          <input type="submit" value="Guardar">
      </center>
    </form>
    </body>
</html>
