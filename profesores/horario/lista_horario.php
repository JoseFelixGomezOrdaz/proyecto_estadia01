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
          <li class="actual"><a href="lista_horario.php">Horarios</a></li>
          <li><a href="../registro_horario.php">Nuevo horario</a></li>
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
      <center> <h1>Lista de horario</h1> <center>
      
      <br><br>
      <?php
      $usuario= $_SESSION['username'];
      $query= mysqli_query($conexion, "SELECT * FROM horario where usuario= $usuario");
      $resultado= mysqli_num_rows($query);
      if($resultado > 0){
        while ($datos= mysqli_fetch_array($query)) {?>

      <table>
        <caption><?php $materia= $datos['materia']; $grupo= $datos['grupo']; echo "$materia $grupo"; ?></caption>
        <tr>
          <th></th>
          <th>Lunes</th>
          <th>Martes</th>
          <th>Miercoles</th>
          <th>Jueves</th>
          <th>Viernes</th>
          <th>Sabado</th>
          <th>Opciones</th>
        </tr>
            <tr>
              <td>Hora inicio</td>
              <td><?php $lunes_inicio= $datos['lunes_inicio']; echo "$lunes_inicio"; ?></td>
              <td><?php $martes_inicio= $datos['martes_inicio']; echo "$martes_inicio"; ?></td>
              <td><?php $miercoles_inicio= $datos['miercoles_inicio']; echo "$miercoles_inicio"; ?></td>
              <td><?php $jueves_inicio= $datos['jueves_inicio']; echo "$jueves_inicio"; ?></td>
              <td><?php $viernes_inicio= $datos['viernes_inicio']; echo "$viernes_inicio"; ?></td>
              <td><?php $sabado_inicio= $datos['sabado_inicio']; echo "$sabado_inicio"; ?></td>
            </tr>
            <tr>
              <td>Hora termino</td>
              <td><?php $lunes_termino= $datos['lunes_termino']; echo "$lunes_termino"; ?></td>
              <td><?php $martes_termino= $datos['martes_termino']; echo "$martes_termino"; ?></td>
              <td><?php $miercoles_termino= $datos['miercoles_termino']; echo "$miercoles_termino"; ?></td>
              <td><?php $jueves_termino= $datos['jueves_termino']; echo "$jueves_termino"; ?></td>
              <td><?php $viernes_termino= $datos['viernes_termino']; echo "$viernes_termino"; ?></td>
              <td><?php $sabado_termino= $datos['sabado_termino']; echo "$sabado_termino"; ?></td>
              <td>
                <a href="#" class="link_edit">Editar</a>
                |
                <a href="#" class="link_delete">Eliminar</a>
              </td>
            </tr>
            <tr>
              <td>Lugar</td>
              <td><?php $lugar_lunes= $datos['lugar_lunes']; echo "$lugar_lunes"; ?></td>
              <td><?php $lugar_martes= $datos['lugar_martes']; echo "$lugar_martes"; ?></td>
              <td><?php $lugar_miercoles= $datos['lugar_miercoles']; echo "$lugar_miercoles"; ?></td>
              <td><?php $lugar_jueves= $datos['lugar_jueves']; echo "$lugar_jueves"; ?></td>
              <td><?php $lugar_viernes= $datos['lugar_viernes']; echo "$lugar_viernes"; ?></td>
              <td><?php $lugar_sabado= $datos['lugar_sabado']; echo "$lugar_sabado"; ?></td>
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
