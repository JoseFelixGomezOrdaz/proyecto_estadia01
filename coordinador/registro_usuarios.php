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
    <title>Inicio</title>
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="../assets/css/estilos1.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
          <nav><ul>
          <li><a href="inicio.php">Inicio</a></li>
          <li class="actual"><a href="registro_usuarios.php">Nuevo usuario</a></li>
          <li><a href="usuarios/lista_usuarios.php">Usuarios</a></li>
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
    <form action="guardar_usuario.php" method="post">
      <center>
        <br><br>
        <h1>Registro De Usuario</h1>
      <table border="0px">
        <thcad>
          <tr>
            <td><input type="text" name="nombre" required placeholder="Nombre" pattern="[A-Z a-z ñóéí]+"></td>
            <td><input type="text" name="apellido_p" required placeholder="Apellido paterno" pattern="[A-Z a-z ñóéí]+"></td>
            <td><input type="text" name="apellido_m" required placeholder="Apellido materno" pattern="[A-Z a-z ñóéí]+"></td>
          </tr>
          <tr>
            <td><label for="Name">Grado de studios</label>
            <select name="grado_estudios">
               <option value="Lic.">Lic.</option>
               <option value="Ing.">Ing.</option>
               <option value="Mtro.">Mtro</option>
               <option value="Mtr.">Mtr.</option>
               <option value="Ph.D.">Ph.D.</option>Mtr.
            </select></td>
            <td>
              <label for="Name">Tipo de usuario</label>
              <select name="tipo_u">
                <option value="profesor">Profesor</option>
              </select>
           </td>
            <td><br><input type="number" name="usuario"  required placeholder="No. Empleado" min="1" max="10000"></td>
          </tr>
          <tr>
            <td><input type="email" name="correo"  required placeholder="Correo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"></td>
            <td><input type="password" name="password" required placeholder="Password"></td>
            <td><input type="password" name="conf_password" required placeholder="Confirmar password"></td>
          </tr>
          </thcad>
          </table>
          <input type="submit" value="Guardar">
      </center>
    </form>
    </body>
</html>
