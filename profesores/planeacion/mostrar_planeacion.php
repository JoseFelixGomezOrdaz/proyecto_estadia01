<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Horario</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos1.css">
  </head>
<?php
session_start();
$usuario= $_SESSION['username'];
$tipo_usuario= $_SESSION['tipo_usuario'];
if($tipo_usuario != 'profesor'){
  header("Location:../../index.php");
}
if($usuario == null || $usuario= ''){
    header("Location:../../index.php");
}
require '../../conexion.php';
?>

  <body>
    <header>
      <div class="contenedor">
          <nav><ul>
          <li><a href="../inicio.php">Inicio</a></li>
          <li class="actual"><a href="lista_horario.php">Planeacion</a></li>
          <li><a href="../registro_horario.php">Nuevo planeacion</a></li>
          <li><a href="../../cerrar.php">Cerrar sesion</a></li>
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
    <br><br>
    <section class="contenedor_usuarios">
      <center> <h1>Planeacion</h1> <center>
      <form class="form_search" action="buscar_usuario.php" method="post">
        <input type="text" name="busqueda" id="busqueda" required placeholder="Buscar">
        <input type="submit" name="btn_buscar" value="Buscar" class="btn_search">
      </form>
      <br><br>
      <?php
      $usuario= $_SESSION['username'];
      $query= mysqli_query($conexion, "SELECT * FROM materia INNER JOIN planeacion
      ON materia.id_materia=planeacion.id_materia WHERE materia.usuario=$usuario");
      echo "SELECT * FROM materia INNER JOIN planeacion
      ON materia.id_materia=planeacion.id_materia WHERE materia.usuario=$usuario";
      $resultado= mysqli_num_rows($query);

      if($resultado > 0){
        while ($datos= mysqli_fetch_array($query)) {?>

      <table>
        <caption><?php $materia= $datos['nombre_materia'];  ?></caption>
        <tr>

        </tr>
            <tr>
              <td>Hora inicio</td>

            </tr>
            <tr>
              <td>Hora termino</td>

              <td>
                <a href="#" class="link_edit">Editar</a>
                |
                <a href="#" class="link_delete">Eliminar</a>
              </td>
            </tr>
            <tr>
              <td>Lugar</td>

            </tr>
          <?php

        }}else{
          echo "<h1>Tu aún no tienes un horario</h1>";
        }
        ?>
      </table>

    </section>
  </body>
</html>
